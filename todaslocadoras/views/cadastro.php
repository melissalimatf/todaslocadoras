
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../views/style.css">
  <title>Cadastre-se!</title>
</head>

<body class="body-register">
  <header class="header-register">
    <img class="logomarca" src="../views/imagens/nav-icons/rentcars.svg"  onclick="document.location.href='../views/index.php'" >
    <nav class="navbar">
      <ul class="menu">
        <div class="nav dropbtn-idiomas">
          <li>
            <a href="#"><span class="all-flags dropbtn-idiomas">
                <div class="txt-flag">
                  <img class="flag-br dropbtn-idiomas" src="../views/imagens/nav-icons/brazil.png">
                </div></a>
          </li>
          <div class="idiomas-container">
            <div class="dropdown-idiomas-content" id="myDropdown-idiomas">
              <span id="seta-idiomas"></span>
              <h1>Idioma</h1>
              <div class="idioma-container">
                <img class="flag" src="../views/imagens/nav-icons/brazil.png">
                <a href="#">Português(BR)</a>
              </div>
              <div class="idioma-container">
                <img class="flag" src="../views/imagens/nav-icons/flag-alemanha.png">
                <a href="#">Deutsch</a>
              </div>
              <div class="idioma-container">
                <img class="flag" src="../views/imagens/nav-icons/flag-canada.png">
                <a href="#"> English (CA)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-reinounido.png">
                <a href="#"> English (UK)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-eua.png">
                <a href="#"> English (US)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-espanha.png">
                <a href="#">Español</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-argentina.png">
                <a href="#"> Español (AR)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-chile.png">
                <a href="#">Español (CL)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-colombia.png">
                <a href="#">Español (CO)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-mexico.png">
                <a href="#">Español (MX)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-canada.png">
                <a href="#"> Français (CA)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-franca.png">
                <a href="#"> Français (FR)</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-italia.png">
                <a href="#"> Italiano</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-netherlands.png">
                <a href="#"> Nederlands</a>
              </div>
              <div class="idioma-container">
                <img class="" src="../views/imagens/nav-icons/flag-portugal.png">
                <a href="#"> Português (PT)</a>
              </div>
            </div>
          </div>
        </div>

        <div class="nav dropbtn-moedas"">
            <li  class=" dropbtn-moedas">
          <a href="#"><span translate="translate" class="change-currency notranslate dropbtn-moedas">
              <div class="txt dropbtn-moedas" id="txt-rs">R$
            </span>
        </div></a>
        </li>
        <div class="drop-moedas" id="myDropdown-moedas">
          <div class="dropdown-moedas-content ">
            <span id="seta-moedas"></span>
            <div class="moedas-mais-usadas">
              <h1>Moedas mais usadas</h1>
              <ul>
                <li><span class="ponto-rs">...</span><span class="moeda">R$</span><span class="pipe">|</span> Real
                  Brasileiro</li>
                <li><span class="moeda">US$</span><span class="pipe">|</span> US Dólar</li>
                <li><span class="moeda">CLP</span><span class="pipe">|</span> Peso Chileno</li>
                <li><span class="ponto-euro">.....</span><span class="moeda"> €</span><span class="pipe">|</span> Euro
                </li>
                <li><span class="moeda">MXN</span><span class="pipe">|</span> Peso Mexicano</li>
                <li><span class="moeda">CAD</span><span class="pipe">|</span> Dólar Canadense</li>
                <li><span class="moeda">ARS</span><span class="pipe">|</span> Peso Argentino</li>
                <li><span class="ponto-libra">.....</span><span class="moeda">£</span><span class="pipe">|</span> Libra
                  Esterlina</li>
              </ul>
            </div>
          </div>
          <div class="dropdown-moedasVisualizacao-content " id="myDropdown-moedas">
            <div class="moedas-de-visualizacao">
              <h1>Moeda de visualização</h1>
              <ul>
                <li><span class="moeda">THB</span><span class="pipe">|</span> Baht Tailandês</li>
                <li><span class="moeda">BOB</span><span class="pipe">|</span>Boliviano da Bolívia</li>
                <li><span class="moeda">CZK</span><span class="pipe">|</span> Coroa Checa</li>
                <li><span class="moeda">DKK</span><span class="pipe">|</span> Coroa Dinamarquesa</li>
                <li><span class="moeda">NOK</span><span class="pipe">|</span> Coroa Norueguesa</li>
                <li><span class="moeda">SEK</span><span class="pipe">|</span> Coroa Sueca</li>
                <li><span class="moeda">KWD</span><span class="pipe">|</span> Dinar Cuaitiano</li>
                <li><span class="moeda">JOD</span><span class="pipe">|</span> Dinar Jordano</li>
                <li><span class="moeda">AED</span><span class="pipe">|</span> Dirame dos Emirados Árabes Unidos</li>
                <li><span class="moeda">AUD</span><span class="pipe">|</span> Dólar Australiano</li>
                <li><span class="moeda">CAD</span><span class="pipe">|</span> Dólar Canadense</li>
                <li><span class="moeda">FJD</span><span class="pipe">|</span> Dólar Fijiano</li>
                <li><span class="moeda">NAD</span><span class="pipe">|</span> Dólar Namibiano</li>
                <li><span class="moeda">NZD</span><span class="pipe">|</span> Dólar Neozelandês</li>
                <li><span class="moeda">HKD</span><span class="pipe">|</span> Dólar de Hong Kong</li>
                <li><span class="moeda">SGD</span><span class="pipe">|</span> Dólar de Singapura</li>
                <li><span class="moeda">PLN</span><span class="pipe">|</span> Zlóti</li>
                <li><span class="moeda">HUF</span><span class="pipe">|</span> Florim Húngaro</li>
                <li><span class="moeda">XOF</span><span class="pipe">|</span> Franco CFA BCEAO</li>
                <li><span class="moeda">CHF</span><span class="pipe">|</span> Franco Suíço</li>
                <li><span class="moeda">UAH</span><span class="pipe">|</span> Grívnia Ucraniana</li>
                <li><span class="moeda">GEL</span><span class="pipe">|</span> Lari Georgiano</li>
                <li><span class="moeda">MDL</span><span class="pipe">|</span> Leu Moldávio</li>
                <li><span class="moeda">RON</span><span class="pipe">|</span> Leu Romeno</li>
                <li><span class="moeda">BGN</span><span class="pipe">|</span> Lev Búlgaro</li>
                <li><span class="moeda">EGP</span><span class="pipe">|</span> Libra Egípcia</li>
                <li><span class="moeda">US$</span><span class="pipe">|</span> US Dólar</li>
                <li><span class="moeda">TRY</span><span class="pipe">|</span> Lira Turca</li>
                <li><span class="moeda">AZN</span><span class="pipe">|</span> Manat Azerbaijano</li>
                <li><span class="moeda">TWD</span><span class="pipe">|</span> Novo Dólar Taiwanês</li>
                <li><span class="moeda">ILS</span><span class="pipe">|</span> Novo Shekel Israelense</li>
                <li><span class="moeda">PEN</span><span class="pipe">|</span> Novo Sol Peruano</li>
                <li><span class="moeda">ARS</span><span class="pipe">|</span> Peso Argentino</li>
                <li><span class="moeda">CLP</span><span class="pipe">|</span> Peso Chileno</li>
                <li><span class="moeda">COP</span><span class="pipe">|</span> Peso Colombiano</li>
                <li><span class="moeda">DOP</span><span class="pipe">|</span> Peso Dominicano</li>
                <li><span class="moeda">MXN</span><span class="pipe">|</span> Peso Mexicano</li>
                <li><span class="moeda">UYU</span><span class="pipe">|</span> Peso Uruguaio</li>
                <li><span class="moeda">ZAR</span><span class="pipe">|</span> Rand Sul-Africano</li>
                <li><span class="moeda">MYR</span><span class="pipe">|</span> Ringuite Malaio</li>
                <li><span class="moeda">QAR</span><span class="pipe">|</span> Rial Catarense</li>
                <li><span class="moeda">OMR</span><span class="pipe">|</span> Rial Omanense</li>
                <li><span class="moeda">SAR</span><span class="pipe">|</span> Rial Saudita</li>
                <li><span class="ponto-rs">...</span><span class="moeda">R$</span><span class="pipe">|</span> Real
                  Brasileiro</li>
                <li><span class="moeda">RUB</span><span class="pipe">|</span> Rublo Russo</li>
                <li><span class="moeda">INR</span><span class="pipe">|</span> Rupia Indiana</li>
                <li><span class="moeda">KZT</span><span class="pipe">|</span> Tengue Cazaque</li>
                <li><span class="ponto-libra">.....</span><span class="moeda">£</span><span class="pipe">|</span> Libra
                  Esterlina</li>
                <li><span class="moeda">KRW</span><span class="pipe">|</span> Won Sul-Coreano</li>
                <li><span class="moeda">JPY</span><span class="pipe">|</span> Yen Japonês</li>
                <li><span class="moeda">CNY</span><span class="pipe">|</span> Yuan Chinês</li>

                <li><span class="ponto-euro">.....</span><span class="moeda">€</span><span class="pipe">|</span> Euro
                </li>

              </ul>
            </div>
          </div>
        </div>
        </div>

        <div class="nav dropbtn-reservas">
          <li class="reservas dropbtn-reservas">
            <a href="#" id="dropdown-mybookings">
              <div class="txt">
                <img class="car-icon dropbtn-reservas" src="../views/imagens/nav-icons/car-icon.svg">
                <span class="dropbtn-reservas">Minhas Reservas</span>
              </div>
            </a>
          </li>
          <div class="dropdown-reservas-content" id="myDropdown-reservas">
            <div class="reservas-grid">
              <div class="login">
                <span id="seta-reservas"></span>
                <h1>Faça seu login via:</h1>
                <ul class="btns-login">
                  <button class="btnreserva btn-facebook"> <img class="facebook-reservas-icon"
                      src="../views/imagens/nav-icons/facebook.svg">Facebook</button>
                  <button class="btnreserva btn-google"><img class="google-reservas-icon"
                      src="../views/imagens/nav-icons/google-icon.svg">Fazer login com o Google</button>
                  <button class="btnreserva btn-apple"><img class="apple-reservas-icon"
                      src="../views/imagens/nav-icons/apple-icon.png">Apple</button>
                </ul>
                <h2>Ou com sua conta Rentcars:</h2>
                <ul class="inputs-login">
                  <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png">
                  <input type="text" placeholder="     E-mail" class="input-email"></input>
                  <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png">
                  <input type="text" placeholder="    Senha" class="input-senha"></input>
                  <button class="login-reserva"> Entrar</button>
                  <a href="#" id="dialogSenha_link" class="login-forgot-link">Esqueci minha senha</a>
                </ul>
              </div>
              <div class="visualizar-reserva">
                <h1>Se você não tem uma conta, você ainda pode visualizar sua reserva</h1>
                <ul class="inputs-login">
                  <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png">
                  <input type="text" placeholder="     E-mail" class="input-email"></input>
                  <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png">
                  <input type="text" placeholder="    Código da Reserva" class="input-senha"
                    id="codigo-reserva"></input>
                  <button class="login-reserva"> Entrar</button>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="nav dropbtn-acesse">
          <li class="acesso dropbtn-acesse">
            <a href="#" id="dropdown-offline">
              <div class="txt">
                <img class="perfil-icon dropbtn-acesse" src="../views/imagens/nav-icons/perfil-icon.svg">
                <span class="dropbtn-acesse"> Acesse&boxv;Crie sua Conta
                </span>
              </div>
            </a>
          </li>
          <div class="dropdown-acesse-content" id="myDropdown-acesse">
            <div class="reservas-grid">
              <div class="login">
                <span id="seta-acesse"></span>
                <h1>Faça seu login via:</h1>
                <ul class="btns-login">
                  <button class="btnreserva btn-facebook"> <img class="facebook-reservas-icon"
                      src="../views/imagens/nav-icons/facebook.svg">Facebook</button>
                  <button class="btnreserva btn-google"><img class="google-reservas-icon"
                      src="../views/imagens/nav-icons/google-icon.svg">Fazer login com o Google</button>
                  <button class="btnreserva btn-apple"><img class="apple-reservas-icon"
                      src="../views/imagens/nav-icons/apple-icon.png">Apple</button>
                </ul>
                <h2>Ou com sua conta Rentcars:</h2>
                <ul class="inputs-login">    
                  <form method="post" action="">
                  <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png">
                  <input type='email' placeholder="     E-mail" class="input-email" required>
                  <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png">
                  <input type="password" placeholder="    Senha" class="input-senha" required>
                  <button class="login-reserva" type="submit"> Entrar</button>
                  </form>
                  <a href="#" id="dialogSenha_link" class="login-forgot-link">Esqueci minha senha</a>
                </ul>
              </div>
              <div class="criarConta">
                <h1>Ainda não é cadastrado?</h1>
                <button class="criarNovaConta" onclick="document.location.href= '../controllers/cadastro.php'">Criar Nova
                  Conta</button> <img class="novaConta-icon" src="../views/imagens/main/add-usuario.png">
                <ul>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png"
                      class="verificadoNovaConta-icon"><span>Rápido e fácil reservar</span>
                  </div>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon">
                    <span>Descontos de até 30%</span>
                  </div>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon">
                    <span>Acesso a ofertas exclusivas</span>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="nav dropbtn-central">
          <li class="vendas dropbtn-central">
            <a>
              <div class="txt">
                <img class="headphone-icon dropbtn-central" src="../views/imagens/nav-icons/headphone.svg"> <span
                  class="rs dropbtn-central"> Central de Ajuda</span>
              </div>
            </a>
          </li>
        </div>
        <li class="vendas">
          <div class="dropdown-central-content" id="myDropdown-central">
            <span id="seta-central"></span>
            <h1>Suporte</h1>
            <div class="perguntas-container">
              <a href="#">Dúvidas Frequentes(FAQ)</a>
            </div>
            <div class="central-container">
              <a href="#">Central de Ajuda</a>
            </div>
          </div>
        </li>

        <div class="dropdown dropbtn" id="nav-menu">
          <li class="dropbtn">
            <a><img class="menu-icon dropbtn" src="../views/imagens/nav-icons/menu.svg"></a>
            <div class="dropdown-content" id="myDropdown">
              <span id="seta"></span>
              <div class="duvidas-container">
                <a href="#">Dúvidas Frequentes</a>
                <img alt="duvidas" class="duvidas-icon" src="../views/imagens/nav-icons/question-icon.png">
              </div>
              <div class="facebook-container">
                <a href="#">Facebook</a>
                <img alt="Facebook" class="facebook-icon" src="../views/imagens/nav-icons/facebook.svg">
              </div>
              <div class="google-container">
                <a href="#">Fazer login com o Google</a>
                <img alt="google" class="google-icon" src="../views/imagens/nav-icons/google-icon.svg">
              </div>
              <div class="email-container">
                <a href="#">Login com E-mail</a>
                <img alt="email" class="email-icon" src="../views/imagens/nav-icons/email-icon.png">
              </div>
              <div class="usuario-container">
                <a href="#">Criar Nova Conta</a>
                <img alt="usuario" class="usuario-icon" src="../views/imagens/nav-icons/usuario-icon.png">
              </div>
            </div>
          </li>
        </div>
      </ul>
    </nav>
  </header>

  <main class="register-columns">

    <div class="register-redes-grid">
      <div class="register-redes-title">
        <img src="../views/imagens/nav-icons/usuario-icon.png" class="usuario-icon" alt="usuário-icon">
        <h1>Acelere seu cadastro usando sua conta das redes sociais</h1>
      </div>
      <ul class="btns-login">
        <button class="btnreserva btn-facebook"> <img class="facebook-reservas-icon"
            src="../views/imagens/nav-icons/facebook.svg">Facebook</button>
        <button class="btnreserva btn-google"><img class="google-reservas-icon"
            src="../views/imagens/nav-icons/google-icon.svg">Fazer login com o Google</button>
        <button class="btnreserva btn-apple"><img class="apple-reservas-icon"
            src="../views/imagens/nav-icons/apple-icon.png">Apple</button>
      </ul>
      <h3> <img class="cadeado-black" src="../views/imagens/main/cadeado-black.svg"> Seus dados serão mantidos em sigilo
        e nada será publicado em sua timeline</h3>
    </div>


    <div class="register-grid">
      <div class="register-container">

        <form method="post"class="form-register" >
          <h1>Crie sua conta</h1>
          <h4>Dados pessoais</h4>
          <div class="form-flex">

            <div class="form-block">
              <label><span class="asterisco">*</span>Nome do locatário:</label>
              <input type="text" name="nome" placeholder="Nome do locatário" required>
            </div>

            <div class="form-block">
              <label> <span class="asterisco">*</span>Sobrenome:</label>
              <input type="text" name="sobrenome" placeholder="Sobrenome" required>
            </div>
          </div>

          <div class="form-flex">
            <div class="form-block ">
              <label><span class="asterisco">*</span> Selecione seu país de residência:</label>
              <select name="CodigoPais" id="CodigoPais" class="form-control valid" aria-required="true"
                aria-invalid="false" required>
                <option value="">Selecione...</option>
                <option value="3">
                  Afeganistão
                </option>
                <option value="4">
                  África do Sul
                </option>
                <option value="5">
                  Albânia
                </option>
                <option value="6">
                  Alemanha
                </option>
                <option value="7">
                  Andorra
                </option>
                <option value="8">
                  Angola
                </option>
                <option value="9">
                  Anguilla
                </option>
                <option value="11">
                  Antígua e Barbuda
                </option>
                <option value="13">
                  Arábia Saudita
                </option>
                <option value="14">
                  Argélia
                </option>
                <option value="15">
                  Argentina
                </option>
                <option value="16">
                  Armênia
                </option>
                <option value="17">
                  Aruba
                </option>
                <option value="18">
                  Austrália
                </option>
                <option value="19">
                  Áustria
                </option>
                <option value="20">
                  Azerbaijão
                </option>
                <option value="21">
                  Bahamas
                </option>
                <option value="22">
                  Bahrain
                </option>
                <option value="23">
                  Bangladexe
                </option>
                <option value="24">
                  Barbados
                </option>
                <option value="26">
                  Bélgica
                </option>
                <option value="27">
                  Belize
                </option>
                <option value="28">
                  Benin
                </option>
                <option value="30">
                  Bolívia
                </option>
                <option value="244">
                  Bonaire
                </option>
                <option value="31">
                  Bósnia-Herzegóvina
                </option>
                <option value="32">
                  Botswana
                </option>
                <option value="1" selected="">
                  Brasil
                </option>
                <option value="33">
                  Brunei
                </option>
                <option value="34">
                  Bulgária
                </option>
                <option value="35">
                  Burkina Fasso
                </option>
                <option value="36">
                  Burundi
                </option>
                <option value="37">
                  Butão
                </option>
                <option value="38">
                  Cabo Verde
                </option>
                <option value="39">
                  Camarões
                </option>
                <option value="">
                  Cambodja
                </option>
                <option value="40">
                  Camboja
                </option>
                <option value="41">
                  Canadá
                </option>
                <option value="190">
                  Catar
                </option>
                <option value="42">
                  Cazaquistão
                </option>
                <option value="43">
                  Chade
                </option>
                <option value="44">
                  Chile
                </option>
                <option value="45">
                  China
                </option>
                <option value="46">
                  Chipre
                </option>
                <option value="48">
                  Colômbia
                </option>
                <option value="51">
                  Coreia do Sul
                </option>
                <option value="53">
                  Costa Rica
                </option>
                <option value="52">
                  Costa do Marfim
                </option>
                <option value="54">
                  Croácia
                </option>
                <option value="55">
                  Cuba
                </option>
                <option value="245">
                  Curaçao
                </option>
                <option value="56">
                  Dinamarca
                </option>
                <option value="58">
                  Dominica
                </option>
                <option value="59">
                  Egito
                </option>
                <option value="60">
                  El Salvador
                </option>
                <option value="61">
                  Emirados Árabes Unidos
                </option>
                <option value="62">
                  Equador
                </option>
                <option value="63">
                  Eritreia
                </option>
                <option value="64">
                  Eslováquia
                </option>
                <option value="65">
                  Eslovênia
                </option>
                <option value="66">
                  Espanha
                </option>
                <option value="2">
                  Estados Unidos
                </option>
                <option value="67">
                  Estônia
                </option>
                <option value="68">
                  Etiópia
                </option>
                <option value="70">
                  Fiji
                </option>
                <option value="71">
                  Filipinas
                </option>
                <option value="72">
                  Finlândia
                </option>
                <option value="73">
                  França
                </option>
                <option value="74">
                  Gabão
                </option>
                <option value="75">
                  Gâmbia
                </option>
                <option value="76">
                  Gana
                </option>
                <option value="77">
                  Geórgia
                </option>
                <option value="78">
                  Gibraltar
                </option>
                <option value="80">
                  Granada
                </option>
                <option value="81">
                  Grécia
                </option>
                <option value="83">
                  Guadalupe
                </option>
                <option value="84">
                  Guam
                </option>
                <option value="85">
                  Guatemala
                </option>
                <option value="87">
                  Guiana
                </option>
                <option value="88">
                  Guiana Francesa
                </option>
                <option value="89">
                  Guiné
                </option>
                <option value="91">
                  Guiné-Bissau
                </option>
                <option value="90">
                  Guiné Equatorial
                </option>
                <option value="92">
                  Haiti
                </option>
                <option value="93">
                  Holanda
                </option>
                <option value="94">
                  Honduras
                </option>
                <option value="95">
                  Hong Kong
                </option>
                <option value="96">
                  Hungria
                </option>
                <option value="97">
                  Iêmen
                </option>
                <option value="102">
                  Ilha Reunião
                </option>
                <option value="104">
                  Ilhas Caiman
                </option>
                <option value="106">
                  Ilhas Comores
                </option>
                <option value="108">
                  Ilhas Faroe
                </option>
                <option value="112">
                  Ilhas Marianas do Norte
                </option>
                <option value="117">
                  Ilhas Salomão
                </option>
                <option value="116">
                  Ilhas Seychelles
                </option>
                <option value="120">
                  Ilhas Turks e Caicos
                </option>
                <option value="247">
                  Ilhas Virgens Britânicas
                </option>
                <option value="121">
                  Ilhas Virgens dos EUA
                </option>
                <option value="123">
                  Índia
                </option>
                <option value="124">
                  Indonésia
                </option>
                <option value="126">
                  Iraque
                </option>
                <option value="127">
                  Irlanda
                </option>
                <option value="128">
                  Islândia
                </option>
                <option value="129">
                  Israel
                </option>
                <option value="130">
                  Itália
                </option>
                <option value="131">
                  Jamaica
                </option>
                <option value="132">
                  Japão
                </option>
                <option value="57">
                  Jibuti
                </option>
                <option value="134">
                  Jordânia
                </option>
                <option value="251">
                  Kosovo
                </option>
                <option value="137">
                  Kuwait
                </option>
                <option value="140">
                  Lesoto
                </option>
                <option value="139">
                  Letônia
                </option>
                <option value="141">
                  Líbano
                </option>
                <option value="142">
                  Libéria
                </option>
                <option value="143">
                  Líbia
                </option>
                <option value="144">
                  Lichtenstein
                </option>
                <option value="145">
                  Lituânia
                </option>
                <option value="146">
                  Luxemburgo
                </option>
                <option value="148">
                  Macedônia
                </option>
                <option value="149">
                  Madagáscar
                </option>
                <option value="150">
                  Malásia
                </option>
                <option value="151">
                  Malauí
                </option>
                <option value="152">
                  Maldivas
                </option>
                <option value="153">
                  Mali
                </option>
                <option value="154">
                  Malta
                </option>
                <option value="155">
                  Marrocos
                </option>
                <option value="156">
                  Martinica
                </option>
                <option value="157">
                  Maurício
                </option>
                <option value="158">
                  Mauritânia
                </option>
                <option value="159">
                  Mayotte
                </option>
                <option value="160">
                  México
                </option>
                <option value="168">
                  Mianmar
                </option>
                <option value="163">
                  Moldávia
                </option>
                <option value="164">
                  Mónaco
                </option>
                <option value="165">
                  Mongólia
                </option>
                <option value="166">
                  Montenegro
                </option>
                <option value="169">
                  Namíbia
                </option>
                <option value="170">
                  Nauru
                </option>
                <option value="171">
                  Nepal
                </option>
                <option value="172">
                  Nicarágua
                </option>
                <option value="173">
                  Níger
                </option>
                <option value="174">
                  Nigéria
                </option>
                <option value="175">
                  Niue
                </option>
                <option value="176">
                  Noruega
                </option>
                <option value="177">
                  Nova Caledônia
                </option>
                <option value="178">
                  Nova Zelândia
                </option>
                <option value="179">
                  Omã
                </option>
                <option value="180">
                  Palau
                </option>
                <option value="225">
                  Palestina
                </option>
                <option value="181">
                  Panamá
                </option>
                <option value="182">
                  Papua-Nova Guiné
                </option>
                <option value="183">
                  Paquistão
                </option>
                <option value="184">
                  Paraguai
                </option>
                <option value="185">
                  Peru
                </option>
                <option value="186">
                  Polinésia Francesa
                </option>
                <option value="187">
                  Polônia
                </option>
                <option value="188">
                  Porto Rico
                </option>
                <option value="189">
                  Portugal
                </option>
                <option value="135">
                  Quênia
                </option>
                <option value="191">
                  Quirguistão
                </option>
                <option value="136">
                  Quiribati
                </option>
                <option value="147">
                  Região Administrativa Especial de Macau
                </option>
                <option value="79">
                  Reino Unido
                </option>
                <option value="192">
                  República Centro-Africana
                </option>
                <option value="194">
                  República Checa
                </option>
                <option value="206">
                  República Democrática de São Tomé e Príncipe
                </option>
                <option value="226">
                  República Democrática de Timor-Leste
                </option>
                <option value="252">
                  República Democrática do Congo
                </option>
                <option value="193">
                  República Dominicana
                </option>
                <option value="125">
                  República Islâmica do Irã
                </option>
                <option value="138">
                  República Popular Democrática do Laos
                </option>
                <option value="162">
                  República de Moçambique
                </option>
                <option value="49">
                  República do Congo
                </option>
                <option value="195">
                  Romênia
                </option>
                <option value="196">
                  Ruanda
                </option>
                <option value="197">
                  Saara Ocidental
                </option>
                <option value="199">
                  Samoa
                </option>
                <option value="200">
                  San Marino
                </option>
                <option value="202">
                  Santa Lúcia
                </option>
                <option value="203">
                  São Bartolomeu
                </option>
                <option value="204">
                  São Cristóvão e Névis
                </option>
                <option value="205">
                  São Martim
                </option>
                <option value="246">
                  São Martinho
                </option>
                <option value="198">
                  São Vicente e Granadinas
                </option>
                <option value="207">
                  Senegal
                </option>
                <option value="208">
                  Serra Leoa
                </option>
                <option value="209">
                  Sérvia
                </option>
                <option value="47">
                  Singapura
                </option>
                <option value="210">
                  Síria
                </option>
                <option value="211">
                  Somália
                </option>
                <option value="212">
                  Sri Lanka
                </option>
                <option value="214">
                  Suazilândia
                </option>
                <option value="215">
                  Sudão
                </option>
                <option value="255">
                  Sudão do Sul
                </option>
                <option value="216">
                  Suécia
                </option>
                <option value="217">
                  Suíça
                </option>
                <option value="218">
                  Suriname
                </option>
                <option value="220">
                  Tailândia
                </option>
                <option value="221">
                  Taiwan
                </option>
                <option value="219">
                  Tajiquistão
                </option>
                <option value="222">
                  Tanzânia
                </option>
                <option value="227">
                  Togo
                </option>
                <option value="228">
                  Tonga
                </option>
                <option value="250">
                  Tortola
                </option>
                <option value="229">
                  Trindade e Tobago
                </option>
                <option value="230">
                  Tunísia
                </option>
                <option value="231">
                  Turcomenistão
                </option>
                <option value="232">
                  Turquia
                </option>
                <option value="233">
                  Tuvalu
                </option>
                <option value="235">
                  Uganda
                </option>
                <option value="236">
                  Uruguai
                </option>
                <option value="237">
                  Uzbequistão
                </option>
                <option value="238">
                  Vanuatu
                </option>
                <option value="239">
                  Vaticano
                </option>
                <option value="240">
                  Venezuela
                </option>
                <option value="241">
                  Vietnã
                </option>
                <option value="242">
                  Zâmbia
                </option>
                <option value="243">
                  Zimbábue
                </option>
              </select>

            </div>

            <div class="form-block cpf">
              <label> <span class="asterisco">*</span>CPF:</label>
              <input type="number" name="cpf" required>
            </div>
          </div>

          <div class="form-flex">
            <div class="form-block">
              <label> <span class="asterisco">*</span>Data de Nascimento:</label>
              <input name="data-nascimento" placeholder="DD/MM/AAAA" type="date" required>
            </div>

            <div class="form-block">
              <label> <span class="asterisco">*</span>Celular:</label>
                  <input class="ddd-input" name="celular" type="tel" required>
              <label class="ddd-label">Ex.: (11) 96123-4567</label>
            </div>
          </div>
          <h4 class="register-dadosh4">Dados de acesso à Rentcars</h4>

          <div class="form-flex">

            <div class="form-block">
              <label> <span class="asterisco">*</span>E-mail:</label>
              <input name="email" type="email" required>
            </div>

            <div class="form-block">
              <label> <span class="asterisco">*</span>Confirme seu E-mail:</label>
              <input type="email" required>
            </div>
          </div>

          <div class="form-flex">
            <div class="form-block">
              <label> <span class="asterisco">*</span>Crie uma Senha de Acesso:</label>
              <input name="senha" type="password" required>
            </div>
            <div class="form-block">
              <label> <span class="asterisco">*</span>Confirme sua Senha de Acesso:</label>
              <input type="password" required>
            </div>
          </div>

          <div class="form-flex checkbox">
            <input type="checkbox" class="checkbox-register" required><label>Ao gerar uma reserva você concorda com a <a
                href="#">Política de Privacidade</a> da Rentcars</label>
          </div>
          <div class="form-flex checkbox">
            <input type="checkbox" class="checkbox-register"><label>Aceito receber todas as ofertas e promoções da
              Rentcars</label>
          </div>

          <div class="form-flex criar-conta">
            <button class="btn-register" type="submit">Criar Conta</button>
            <ul>
              <div class="verificado-flex-register">
                <img src="../views/imagens/main/verificado-novaConta.png"
                  class="verificadoNovaConta-icon-register"><span>Rápido e fácil reservar</span>
              </div>
              <div class="verificado-flex-register">
                <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon-register">
                <span>Descontos de até 30%</span>
              </div>
              <div class="verificado-flex-register">
                <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon-register">
                <span>Acesso a ofertas exclusivas</span>
              </div>
            </ul>
          </div>



        </form>

      </div>
    </div>

  </main>

  <footer v-bind:show-links="1" class="main-footer">
    <div class="container">
      <div class="nav-footer">
        <div class="footer-1pt">
          <ul class="ul-first-child">
            <h1>Rentcars</h1>
            <li><a href="https://www.rentcars.com/pt-br/melhorpreco">Melhor Preço Garantido</a></li>
            <li><a href="https://www.rentcars.com/pt-br/tarifas">Simulador de Tarifas</a></li>
            <li><a href="https://www.rentcars.com/pt-br/locadoras">Locadoras de Carros</a></li>
            <li><a href="https://www.rentcars.com/pt-br/localidades">Lojas de Atendimento</a></li>
            <li><a href="https://www.rentcars.com/pt-br/aeroportos">Aeroporto</a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/requisitos-para-alugar-veiculos">Requisitos para
                Locação</a></li>
            <li><a href="https://www.rentcars.com/pt-br/app">Aplicativo Rentcars</a></li>
            <li><a href="https://www.rentcars.com/pt-br/promocoes">Promoções</a></li>
            <li><a href="https://www.rentcars.com/pt-br/minha-carteira" rel="nofollow">Minha carteira</a></li>
            <li><a href="https://www.rentcars.com/pt-br/rewards">RentRewards</a></li>
            <li><a href="https://www.rentcars.com/pt-br/indique-amigos">Indique e Ganhe</a></li>
            <li><a href="https://www.rentcars.com/pt-br/cashback">Cashback</a></li>
            <li><a href="https://blog.rentcars.com/?utm_source=rentcars&utm_medium=rodape&utm_campaign=home"
                target="_blank" rel="noopener">Blog Rentcars</a></li>
            <li><a href="https://www.rentcars.com/pt-br/blackfriday">Black Friday</a></li>
            <li><a href="https://www.rentcars.com/pt-br/aluguel-mensal">Tarifa Mensal</a></li>
            <li><a
                href="https://assinatura.rentcars.com?utm_source=site&utm_medium=direct&utm_campaign=link_footer_desktop">Assinatura
                Anual</a></li>
            <li><a href="https://awards.rentcars.com/resultado/">Rentcars Customer Choice Awards</a></li>
          </ul>
        </div>

        <div class="footer-1pt">
          <ul class="ul-first-child" id="customeraccess">
            <h1>Acesso Cliente</h1>
            <li><a href="https://www.rentcars.com/pt-br/cliente/minhas-reservas" rel="nofollow">Consulte suas
                Reservas</a></li>
            <li><a href="https://www.rentcars.com/pt-br/cliente/minha-conta" rel="nofollow">Acesse sua Conta</a></li>
            <li><a href="https://www.rentcars.com/pt-br/cliente/cadastro" rel="nofollow">Cadastre-se</a></li>
          </ul>

          <ul class="ul-first-child">
            <h1>Atendimento ao Cliente</h1>
            <li><a href="https://www.rentcars.com/pt-br/faq" target="_blank" rel="noopener">Dúvidas Frequentes</a></li>
            <li class="quebra-linha">Internacionais </li>
            <li><a href="tel:+55 (41) 4042 1479" translate="no"><strong>+55 (41) 4042 1479</strong></a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/contato" title="Fale Conosco">Fale Conosco</a></li>
            <li><a
                href="/pt-br/lp/alteracao-cancelamento?utm_source=rentcars&utm_medium=home&utm_campaign=banneralteracao">Alteração
                e Cancelamentos</a></li>
          </ul>
        </div>

        <div class="footer-1pt" id="locadora-footer">
          <ul class="ul-first-child">
            <h1>Locadoras de veículos</h1>
            <li><a href="https://www.rentcars.com/pt-br/info/cadastro-de-locadora">Cadastre sua Locadora</a></li>
          </ul>
          <ul class="ul-first-child">
            <h1>Afiliados Rentcars</h1>
            <li><a href="http://affiliates.rentcars.com/pt-br/" target="_blank" rel="noopener">Faça parte do
                programa</a></li>
          </ul>
        </div>

        <div class="footer-1pt " id="sobre-nos-footer">
          <ul class="ul-first-child">
            <h1>Sobre nós</h1>
            <li><a href="https://www.rentcars.com/pt-br/info/sobre-nos">A Rentcars</a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/privacidade">Política de Privacidade</a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/cookies">Política de Cookies</a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/termos-e-condicoes">Termos e Condições</a></li>
            <li><a href="https://www.rentcars.com/pt-br/info/codigo-conduta">Código de Conduta</a></li>
            <li><a href="http://careers.rentcars.com" target="_blank" rel="noopener">Trabalhe Conosco</a></li>
          </ul>
        </div>
      </div>
      <div class="pag-container">
        <h1 class="h1-pag">Formas de Pagamento</h1>
        <div class="payment-methods-body">
          <div class="payment-methods-list">
            <div>
              <img loading="lazy" alt="Apple Pay" width="41" class="placeholder-image"
                src="../views/imagens/footer/icon-apple-pay.svg">
            </div>
            <div>
              <img loading="lazy" alt="Google Pay" width="44" class="placeholder-image"
                src="../views/imagens/footer/icon-google-pay.svg">
            </div>
            <div>
              <img loading="lazy" alt="PayPal" width="59" class="placeholder-image"
                src="../views/imagens/footer/icon-pay-pal.svg">
            </div>
            <div>
              <img loading="lazy" alt="Visa" class="placeholder-image" src="../views/imagens/footer/visa.svg">
            </div>
            <div>
              <img loading="lazy" alt="Mastercard" class="placeholder-image"
                src="../views/imagens/footer/mastercard.svg">
            </div>
            <div>
              <img loading="lazy" alt="Diners" class="placeholder-image" src="../views/imagens/footer/diners.svg">
            </div>
            <div>
              <img loading="lazy" alt="Elo" class="placeholder-image" src="../views/imagens/footer/elo.svg">
            </div>
            <div>
              <img loading="lazy" alt="American Express" class="placeholder-image"
                src="../views/imagens/footer/amex.svg">
            </div>
            <div>
              <img loading="lazy" alt="Boleto" class="placeholder-image" src="../views/imagens/footer/boleto.svg">
            </div>
            <div>
              <img loading="lazy" alt="Itaú" class="placeholder-image" src="../views/imagens/footer/itau.svg">
            </div>
            <div>
              <img loading="lazy" data-src="//static.rentcars.com/imagens/flags-payments/pix.svg" alt="PIX"
                class="placeholder-image" src="../views/imagens/footer/pix.svg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright-footer">
      <div class="copy">

        <div class="col-xs-12 col-sm-5 col-md-7 col-lg-6">
          <ul class="social-networks">
            <li data-gtm-event="social-network-footer">
              <a href="#" target="_blank" rel="noopener">
                <img alt="Facebook" class="icon-facebook" src="../views/imagens/nav-icons/facebook.svg">
              </a>
            </li>
            <li data-gtm-event="social-network-footer">
              <a href="#" target="_blank" rel="noopener">
                <img alt="Instagram" class="icon-instagram" src="../views/imagens/nav-icons/instagram.svg">
              </a>
            </li>
            <li data-gtm-event="social-network-footer">
              <a href="#" target="_blank" rel="noopener">
                <img alt="Twitter" class="icon-twitter" src="../views/imagens/nav-icons/twitter.svg">
              </a>
            </li>
            <li data-gtm-event="social-network-footer">
              <a href="#" target="_blank" rel="noopener">
                <img alt="Linkedin" class="icon-likedin" src="../views/imagens/nav-icons/linkedin.svg">
              </a>
            </li>
          </ul>
        </div>

        <img loading="lazy" class="rentcars-svg" src="../views/imagens/nav-icons/rentcars.svg"
          class="logo-rentcars-img img-responsive" alt="Rentcars">
        <p class="copyright-text">&copy; 2023 Rentcars. Todos os direitos reservados.</p>
        <div class="address">
          <address>
            Holanda: RENTCARS BV | Schiphol Boulevard 195, 1118BG, Schiphol, Netherlands, Registration No. 859404900.
            <br>
            Brasil: RENTCARS LTDA | R. Doutor Pedrosa 151, 12º - Centro, CEP 80420-120, Curitiba/Paraná, Brasil, CNPJ
            10.998.234/0001-23.
          </address>
        </div>
      </div>
    </div>

  </footer>

</body>
<script type="text/javascript" src="../views/script.js"></script>

</html>


