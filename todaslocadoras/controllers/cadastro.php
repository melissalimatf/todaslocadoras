<?php 
require_once '../models/conexao.php';
require_once '../models/user.php';

// Criação do objeto User
$User = new User($pdo);

$result = [
    'status' => null,
    'description' => null
  ];
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      //Verifica já existe esse email no bd
      if ($User->existe($_POST)['status'] === 'error') {

        $result['status'] = 'error';
        $result['description'] = 'Já existe cadastro com este e-mail! Faça login para acessar sua conta.';
  
      } else {

        $User->insert($_POST);

    // Login do usuário
    $respons = $User->login([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
      ]);
  
      if ($respons['status'] === 'success') {

        setcookie('user_id', $User->user->code, time() + (86400 * 1), "/");
        setcookie('user_token', $User->user->token, time() + (86400 * 1), "/");
        header('Location: ../controllers/login-index.php');

      };
    }
};

 // Session do usuário
 $User->session();
require_once '../views/cadastro.php';

// Exibir alerta se existir um cadastro com o e-mail fornecido
if ($result['status'] === 'error') {
  ?>
  <script>
      alert('<?php echo $result["description"]; ?>');
  </script>
  <?php
};

?>