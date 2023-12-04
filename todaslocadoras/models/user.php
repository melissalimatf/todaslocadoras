<?php 
class User {
    public $pdo;
    public $user;
    function __construct($conexao) {
      $this->pdo = $conexao;
    }

    public function session(){
    
      // Prepara e executa uma consulta SQL para verificar a sessão do usuário
      $sql = $this->pdo->prepare("SELECT * FROM cadastro WHERE `code` = :code AND `token` = :token");
      $sql->execute([
        ':code' => $_COOKIE['user_id'],
        ':token' => $_COOKIE['user_token']
  
      ]);
      
      // Verifica se a consulta retornou algum resultado
      if($sql->rowCount()>0){
     // Atribui o resultado da consulta ao objeto $this->user
        $this->user = $sql->fetchObject();
        return [
          'status' => 'success',
          'description' => 'Sessão válida!'
        ];
      }else{
        return [
          'status' => 'error',
          'description' => 'Você foi desconectado!'
        ]; 
      }
    }
  
  //ADICIONAR DADOS DO CADASTRO AO BANCO DE DADOS
    public function insert($d){
      
      try {
        // Prepara uma consulta SQL para inserir um novo registro na tabela 'cadastro'
        $sql = $this->pdo->prepare("
            INSERT INTO `cadastro` 
            (`id`,`code`,`nome`,`sobrenome`,`cpf`,`celular`,`email`,`senha`, `token`) 
            VALUES (NULL,uuid(),:nome,:sobrenome,:cpf,:celular,:email,:senha,:token)");

            // Gera um token único usando uniqid()
              $tokenid = uniqid('', true);
    
        // Executa a consulta SQL, substituindo os valores dos parâmetros
        $sql->execute([
          ':nome' => strtolower($d['nome']),
          ':sobrenome' => strtolower($d['sobrenome']),
          ':cpf' => $d['cpf'],
          ':celular' => $d['celular'],
          ':email' => strtolower($d['email']),
          ':senha' => password_hash($d['senha'], PASSWORD_DEFAULT),
          ':token' => $tokenid
        ]);
      } catch (PDOException $e) {
        // Captura a exceção e trata o erro
        echo "Erro na inserção: " . $e->getMessage();
     
    };
    }

    //verifica se existe o email no banco de dados
   public function existe($d){

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Verifica se o e-mail já está cadastrado
     $checkEmailSql = $this->pdo->prepare("SELECT * FROM `cadastro` WHERE `email` = :email");
     $checkEmailSql->execute([':email' => strtolower($d['email'])]);
      
      if ($checkEmailSql->rowCount() > 0) {
        return [
          'status' => 'error',
          'description' => 'Já existe cadastro com este e-mail',
        ];
      };
    };
  }

  public function getUserById($userId) {
    $sql = $this->pdo->prepare("SELECT * FROM cadastro WHERE id = :id");
    $sql->execute([
      ':id' => $userId
    ]);
        return $sql->fetch(PDO::FETCH_ASSOC);
  }
    

    public function login($d){
      try{
          // Prepara e executa uma consulta SQL para verificar o login do usuário
          $sql = $this->pdo->prepare("SELECT * FROM cadastro WHERE email = :email");
          $sql->execute([
              ':email' => trim(strtolower($d['email']))
          ]);

          // Verifica se a consulta retornou algum resultado
          if($sql->rowCount()>0){
              // Atribui o resultado da consulta ao objeto $user
              $user = $sql->fetchObject();
 
               // Verifica se a senha fornecida é válida
              if (password_verify($d['senha'],$user->senha)) {
                
                  //Gera novo Token
               $token = password_hash(date('Y-m-d H:i:s'), PASSWORD_DEFAULT);

                   // Prepara e executa uma consulta SQL para atualizar o token do usuário
                  $update = $this->pdo->prepare("UPDATE cadastro SET token='$token' WHERE id=$user->id");
                  $update->execute();

                  
                  // Verifica se a atualização do token foi bem-sucedida
                  if($update->rowCount()>0){
                      // Atualiza o objeto $user com o novo token
                      $user->token = $token;
                      $this->user = $user;
                  
                      return [
                      
                          'status' => 'success',
                          'description' => 'Login realizado com sucesso!'
                      ];    
                  }else{
                      return [
                          'status' => 'error',
                          'description' => 'Algo deu errado. Tente novamente!'
                          
                      ];    
                  }

              }else {
                  return [
                      'status' => 'error',
                      'description' => 'E-mail ou senha inválido!'
                  ];
              }
          }else{
              return [
                  'status' => 'error',
                  'description' => 'E-mail ou senha inválido!'
              ];
          }
      }catch(\PDOException $e){ 
          return [
              'status' => 'error',
              'description' => 'Já existe cadastro com este e-mail. Faça Login!'
          ];
      }
  }    


  };

 