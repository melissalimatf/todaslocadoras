<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../views/style.css">
  <title>Aluguel de carro com os melhores preços |Todas Locadoras</title>
</head>

<body class="body-index">
  <header class="header-index">
    <img class="logomarca" src="../views/imagens/nav-icons/rentcars.svg">
    <nav class="navbar">
      <ul class="menu">
        <div class="nav dropbtn-idiomas">
          <li>
            <a href="#"><span class="all-flags dropbtn-idiomas"> <div class="txt-flag">
            <img class="flag-br dropbtn-idiomas" src="../views/imagens/nav-icons/brazil.png"></div></a>
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

      <div class="nav dropbtn-moedas">
          <li  class="dropbtn-moedas">
            <a href="#"><span translate="translate" class="change-currency notranslate dropbtn-moedas"><div class="txt dropbtn-moedas" id="txt-rs">R$</span></div></a>
          </li>
        <div class="drop-moedas" id="myDropdown-moedas">
          <div class="dropdown-moedas-content ">
            <span id="seta-moedas"></span>
            <div class="moedas-mais-usadas">
              <h1>Moedas mais usadas</h1>
              <ul>
                <li><span class="ponto-rs">...</span><span class="moeda">R$</span><span class="pipe">|</span> Real Brasileiro</li>
                  <li><span class="moeda">US$</span><span class="pipe">|</span> US Dólar</li>
                  <li><span class="moeda">CLP</span><span class="pipe">|</span> Peso Chileno</li>
                  <li><span class="ponto-euro">.....</span><span class="moeda" > €</span><span class="pipe">|</span> Euro</li>
                  <li><span class="moeda">MXN</span><span class="pipe">|</span> Peso Mexicano</li>
                  <li><span class="moeda">CAD</span><span class="pipe">|</span> Dólar Canadense</li>
                  <li><span class="moeda">ARS</span><span class="pipe">|</span> Peso Argentino</li>
                  <li><span class="ponto-libra">.....</span><span class="moeda">£</span><span class="pipe">|</span> Libra Esterlina</li>
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
                  <li><span class="ponto-rs">...</span><span class="moeda">R$</span><span class="pipe">|</span> Real Brasileiro</li>
                  <li><span class="moeda">RUB</span><span class="pipe">|</span> Rublo Russo</li>
                  <li><span class="moeda">INR</span><span class="pipe">|</span> Rupia Indiana</li>
                  <li><span class="moeda">KZT</span><span class="pipe">|</span> Tengue Cazaque</li>
                  <li><span class="ponto-libra">.....</span><span class="moeda">£</span><span class="pipe">|</span> Libra Esterlina</li>
                  <li><span class="moeda">KRW</span><span class="pipe">|</span> Won Sul-Coreano</li>
                  <li><span class="moeda">JPY</span><span class="pipe">|</span> Yen Japonês</li>
                  <li><span class="moeda">CNY</span><span class="pipe">|</span> Yuan Chinês</li>
             
                  <li><span class="ponto-euro">.....</span><span class="moeda">€</span><span class="pipe">|</span> Euro</li>
             
              </ul>
            </div>
          </div>
        </div>
      </div>
    
      
       <div class="nav dropbtn-reservas">
          <li class="reservas dropbtn-reservas">
            <a href="#" id="dropdown-mybookings"> <div class="txt">
              <img class="car-icon dropbtn-reservas" src="../views/imagens/nav-icons/car-icon.svg" >
              <span class="dropbtn-reservas">Minhas Reservas</span></div> </a>
            </li>
        <div class="dropdown-reservas-content" id="myDropdown-reservas">
          <div class="reservas-grid">
          <div class="login">
            <span id="seta-reservas"></span>
            <h1>Faça seu login via:</h1>
            <ul class="btns-login">
              <button class="btnreserva btn-facebook"> <img class="facebook-reservas-icon" src="../views/imagens/nav-icons/facebook.svg" >Facebook</button>
              <button class="btnreserva btn-google"><img class="google-reservas-icon" src="../views/imagens/nav-icons/google-icon.svg" >Fazer login com o Google</button>
              <button class="btnreserva btn-apple"><img class="apple-reservas-icon" src="../views/imagens/nav-icons/apple-icon.png" >Apple</button>
            </ul>
            <h2>Ou com sua conta Rentcars:</h2>
            <ul class="inputs-login">
              <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png" >
              <input type="text" placeholder="     E-mail" class="input-email"></input>
              <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png" >
              <input type="text" placeholder="    Senha" class="input-senha"></input>
              <button class="login-reserva"> Entrar</button>
              <a href="#" id="dialogSenha_link" class="login-forgot-link">Esqueci minha senha</a>
           </ul>
         </div>
         <div class="visualizar-reserva">
          <h1>Se você não tem uma conta, você ainda pode visualizar sua reserva</h1>
          <ul class="inputs-login">
            <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png" >
            <input type="text" placeholder="     E-mail" class="input-email"></input>
            <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png" >
            <input type="text" placeholder="    Código da Reserva" class="input-senha" id="codigo-reserva"></input>
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
                <img class="perfil-icon dropbtn-acesse" src="../views/imagens/nav-icons/perfil-icon.svg" >
                <span class="dropbtn-acesse">  Acesse&boxv;Crie sua Conta
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
                  <button class="btnreserva btn-facebook"> <img class="facebook-reservas-icon" src="../views/imagens/nav-icons/facebook.svg" >Facebook</button>
                  <button class="btnreserva btn-google"><img class="google-reservas-icon" src="../views/imagens/nav-icons/google-icon.svg" >Fazer login com o Google</button>
                  <button class="btnreserva btn-apple"><img class="apple-reservas-icon" src="../views/imagens/nav-icons/apple-icon.png" >Apple</button>
                </ul>
                <h2>Ou com sua conta Rentcars:</h2>
                <ul class="inputs-login">
                  <form method="post" class="form-login" action="../controllers/login.php">
                    <img class="btn email-reserva-icon" src="../views/imagens/main/email-reserva-icon.png" >
                     <input type="email" name="email" placeholder="     E-mail" class="input-email">
                    <img class="btn cadeado-reserva-icon" src="../views/imagens/main/cadeado-icon.png" >
                     <input type="password" name="senha" placeholder="    Senha" class="input-senha">
                    <button class="login-reserva" type="submit" > Entrar</button>
                  </form>
                    <a href="#" id="dialogSenha_link" class="login-forgot-link">Esqueci minha senha</a>
               </ul>
             </div>
             <div class="criarConta">
              <h1>Ainda não é cadastrado?</h1>
                <button class="criarNovaConta" onclick="document.location.href= '../controllers/cadastro.php'">Criar Nova Conta</button> <img class="novaConta-icon" src="../views/imagens/main/add-usuario.png" >
                <ul>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon"><span>Rápido e fácil reservar</span>
                  </div>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon"> <span>Descontos de até 30%</span>
                  </div>
                  <div class="verificado-flex">
                    <img src="../views/imagens/main/verificado-novaConta.png" class="verificadoNovaConta-icon"> <span>Acesso a ofertas exclusivas</span>
                  </div>
                </ul>
             </div>
              </div>
            </div>
          </div>

          <div class="nav dropbtn-central">
            <li class="vendas dropbtn-central">
              <a><div class="txt">
               <img class="headphone-icon dropbtn-central" src="../views/imagens/nav-icons/headphone.svg" > <span class="rs dropbtn-central"> Central de Ajuda</span> 
              </div></a>
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
            <a><img class="menu-icon dropbtn" src="../views/imagens/nav-icons/menu.svg" ></a>
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

  <main>
    <section id="container-principal">
        <div class="img-container">
            <picture>
                <img src="../views/imagens/main/back-img.png" class="back-img" width="100%" alt="Banner">
            </picture>
        </div>
        <div class="overlay">
            <div class="container-banner">
                <h1 class="banner-title">Pesquise. Compare. Alugue.</h1>
                <h2 class="banner-subtitle">Aluguel de carros com os melhores preços</h2>
            </div>
            <div class="base-search">
                <form id="formPesquisa" name="formPesquisa" method="post" action="" autocomplete="nope" novalidate="novalidate">
                    <div class="form-group">
                            <div class="flex-search">
                                <div class="search-locals--base">
                                    <div class="get-car">
                                        <label for="SuggestPickup" translate="translate">Retirar o carro em</label>
                                       
                                        <input type="text" autocomplete="off" class="firstInput" id="location-input" placeholder="Informe uma cidade ou aeroporto" name="SuggestPickup" class="form-control ui-autocomplete-input" required>
                                      
                                    </div>
                                    <div class="return-car">
                                      <label for="SuggestPickup" translate="translate">Devolver o carro em</label>
                                      <input type="text" autocomplete="off" class="secondInput" id="location2-input" placeholder="Informe uma cidade ou aeroporto" name="SuggestPickup" class="form-control ui-autocomplete-input" required>
                                    </div> 
                                      
                                </div>
                                <div class="data-container">
                                  <div class="data-get">
                                    <label >Data e hora de retirada</label>
                                    <input type="datetime-local" class="firstInput-dt"class="form-control" style="text-align: center;" name="pick_up_date" autocomplete="off" placeholder="DD/MM/YY" required="">  
                                  </div> 
                                    <div class="data-return">
                                      <label>Data e hora de devolução</label>
                                      <input type="datetime-local" class="secondInput-dt" class="form-control" style="text-align: center;" name="pick_up_date" autocomplete="off" placeholder="DD/MM/YY" required="">
                                    </div>
                                </div>
                                <button class="btn-pesquisa">Pesquisar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="container-beneficios">
                  <ul class="list-beneficios">
                    <li><img src="../views/imagens/main/verificado.svg" class="verificado-icon">
                      Melhor preço garantido
                    </li>
                    <li><img src="../views/imagens/main/verificado.svg" class="verificado-icon"> 
                      Cashback no aluguel de carros
                     </li> 
                     <li><img src="../views/imagens/main/verificado.svg" class="verificado-icon"> 
                      Parcelamento em até 12x
                     </li> 
                     <li><img src="../views/imagens/main/verificado.svg" class="verificado-icon"> 
                         Pague em reais sem IOF
                      </li>
                  </ul>
                </div>
            </div>
            
          </div>
        </div>
    </section>

    <div class="stars-container">
     
      <div id="trust-score" class="tp-widget-trustscore">Excelente</div>
      <img src="../views/imagens/main/stars.svg" class="stars">
      <div id="tp-widget-rating" class="tp-widget-rating">
          <strong>106.038</strong> avaliações na
      </div>
      <div class="trustpilot-container">
          <div 
              data-locale="pt-BR"
              data-template-id="5419b6ffb0d04a076446a9af"
              data-businessunit-id="54646cf100006400057b8202"
              data-style-height="20px"
              data-style-width="100%"
              data-theme="light"
              data-text-color="#13100D"
              data-tags="widget-home-pt-br"
              data-stars="5"
              class="trustpilot-widget"
              style="position: relative;">
              <iframe title="Customer reviews powered by Trustpilot"
                  loading="auto"
                  src="https://widget.trustpilot.com/trustboxes/5419b6ffb0d04a076446a9af/index.html?templateId=5419b6ffb0d04a076446a9af&amp;businessunitId=54646cf100006400057b8202#locale=pt-BR&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light&amp;textColor=%2313100D&amp;tags=widget-home-pt-br&amp;stars=5"
                  style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;">
              </iframe>
          </div>
        </div>
     </div>

  <div class="section">

    <section id="rc-rentals-list">
      <div class="rc-rentals-list-container">
      <h2 class="rc-title">Compare os melhores preços em mais de 200 locadoras de veículos</h2>
       <ul class="rental-logos">
        <li id="logo_movida"><a href="#"><img src="../views/imagens/locadoras/movida.png" alt="Movida Rent a Car" loading="lazy"></a></li>
        <li id="logo_unidas"><a href="#"><img src="../views/imagens/locadoras/unidas.png" alt="Unidas Rent a Car" loading="lazy"></a></li>
        <li id="logo_foco"><a href="#"><img src="../views/imagens/locadoras/foco.png" alt="Foco Rent a Car" loading="lazy"></a></li>
        <li id="logo_alamo"><a href="#"><img src="../views/imagens/locadoras/alamo.png" alt="Alamo Rent a Car" loading="lazy"></a></li>
        <li id="logo_enterprise"><a href="#"><img src="../views/imagens/locadoras/enterprise.png" alt="Enterprise Rent a Car" loading="lazy"></a></li>
        <li id="logo_europcar"><a href="#"><img src="../views/imagens/locadoras/europcar.png" alt="Europcar Rent a Car" loading="lazy"></a></li>
        <li id="logo_national"><a href="#"><img src="../views/imagens/locadoras/national.png" alt="National Rent a Car" loading="lazy"></a></li>
        <li id="logo_asa"><a href="#"><img src="../views/imagens/locadoras/asa.png" alt="ASA Rent a Car" loading="lazy"></a></li>
        <li id="logo_topo"><a href="#"><img src="../views/imagens/locadoras/topo.png" alt="Topo Rent a Car" loading="lazy"></a></li>
        <li id="logo_alternativacar"><a href="#"><img src="../views/imagens/locadoras/alternativacar.png" alt="AlternativaCar Rent a Car" loading="lazy"></a></li>
        <li id="logo_city-car"><a href="#"><img src="../views/imagens/locadoras/city-car.png" alt="City Car" loading="lazy"></a></li>
        <li id="logo_sucesso"><a href="#"><img src="../views/imagens/locadoras/sucesso.png" alt="Sucesso" loading="lazy"></a></li>
        <li id="logo_locarx"><a href="#"><img src="../views/imagens/locadoras/locarx.png" alt="LocarX" loading="lazy"></a></li>
        <li id="logo_atua"><a href="#"><img src="../views/imagens/locadoras/atua.png" alt="Atua" loading="lazy"></a></li>
        <li id="logo_movami"><a href="#"><img src="../views/imagens/locadoras/movami.png" alt="Movami" loading="lazy"></a></li>
        <li id="logo_gold"><a href="#"><img src="../views/imagens/locadoras/gold.png" alt="Gold" loading="lazy"></a></li>
        <li id="logo_localiza"><a href="#"><img src="../views/imagens/locadoras/localiza.png" alt="Localiza" loading="lazy"></a></li>
        <li id="logo_v1"><a href="#"><img src="../views/imagens/locadoras/v1.png" alt="V1" loading="lazy"></a></li>
        <li id="logo_3r"><a href="#"><img src="../views/imagens/locadoras/3r.png" alt="3R" loading="lazy"></a></li>
        <li id="logo_vip-service"><a href="#"><img src="../views/imagens/locadoras/vip.png" alt="Vip Service" loading="lazy"></a></li>
      </ul>
     </div>
   </section>

   <section class="carousel-section">
    <div class="carousel-container">

      <div class="carousel">
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-af1dd69601b71d28d6951ff0c63a4801.png" class="display-image-image" alt="Imagem 1">
        </div>
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-e6927abc81bfb9b927343ad1e91f45fb.png" data-gtm-ecomm="banner-superior" alt="Imagem 2">
        </div>
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-a4cab0b5736b686106230165ce49d9b6.png" alt="Imagem 3">
        </div>
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-af1dd69601b71d28d6951ff0c63a4801.png" alt="Imagem 4">
        </div>
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-e6927abc81bfb9b927343ad1e91f45fb.png" alt="Imagem 5">
        </div>
        <div class="slide">
          <img loading="lazy" src="https://static.rentcars.com/landing-page/aws-s3-af1dd69601b71d28d6951ff0c63a4801.png" alt="Imagem 6">
        </div>
      </div>
    </div>
    <div class="arrow">
      <span class="prev">
       <img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="arrow-icon"></span>
      <span class="next">
       <img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="arrow-icon"></span>
    </div>
  </section>

  <section class="benefits-section" id="rc-benefits">
    <div class="benefits-container">
      <div class="container">
        <h2 class="section-title">Vantagens de alugar com a Rentcars</h2>
  
        <table class="benefits-table">
          <tbody class="d-flex">
            <tr class="d-flex flex-column">
              <td class="benefit-icon">
                <span class="background-icon"><img loading="lazy" class="svg-icon" src="../views/imagens/main/fa-dollar-sign.svg" alt="Melhor preço: até 30% OFF"></span>
              </td>
              <td>
                <h3>Melhor preço: até 30% OFF</h3>
                <p>
                  Encontrou uma tarifa menor depois de ter reservado com a Rentcars? Nós reembolsamos a diferença! <br>
                  <a href="#" class="learn-more-link" target="_blank">Saiba mais</a>
                </p>
              </td>
            </tr>
  
            <tr class="d-flex flex-column">
              <td class="benefit-icon">
                <span class="background-icon"><img loading="lazy" class="svg-icon" src="../views/imagens/main/fa-credit-card.svg" alt="Reservas com até 10% de cashback"></span>
              </td>
              <td>
                <h3>Reservas com até 10% de cashback</h3>
                <p>
                  Alugue um carro parcelando em até 12x no cartão de crédito, via PIX ou boleto. Ainda ganhe Cashback de até 10%! <br>
                  <a href="#" class="learn-more-link" target="_blank">Saiba mais</a>
                </p>
              </td>
            </tr>
  
            <tr class="d-flex flex-column">
              <td class="benefit-icon">
                <span class="background-icon"><img loading="lazy" class="svg-icon" src="../views/imagens/main/fa-coins.svg" alt="Compare os melhores preços de mais de 160 países"></span>
              </td>
              <td>
                <h3>Compare os melhores preços <span class="responsivo-span">de mais de 160 países</span></h3>
                <p>Esqueça pagamento em dólar ou outra moeda: para reservas internacionais feitas no Brasil, pague em reais e economize o IOF de 5,38%.</p>
              </td>
            </tr>
  
            <tr class="d-flex flex-column">
              <td class="benefit-icon">
                <span class="background-icon"><img loading="lazy" class="svg-icon" src="../views/imagens/main/fa-car.svg" alt="Aluguel de carro conveniente e fácil"></span>
              </td>
              <td>
                <h3>Aluguel de carro conveniente e fácil</h3>
                <p>Compare preços de mais de 200 locadoras pelo mundo em um só lugar, tenha o melhor atendimento e desfrute de promoções exclusivas!</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section id="rc-faq">
    <div class="rc-faq" itemscope="itemscope" itemtype="https://schema.org/FAQPage">
      <h2 class="rc-section-title">Perguntas e respostas rápidas sobre a locação de veículos</h2>
      <div class="faq-content">
        <div class="toggle-container">
          <div class="toggle-button">
            <h3>Como comparar preços de aluguel de carros?</h3>
            <span class="arrow-faq"><img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="left"></span>
          </div>
          <div class="toggle-content">
            <p>Para pesquisar pelos melhores preços, basta inserir o local onde você deseja retirar o carro (pode ser uma cidade ou aeroporto), a data e o horário de retirada e devolução. Também é possível retirar o carro em um local e devolvê-lo em outro, basta selecionar a opção “Devolver em outra cidade”. Depois de clicar em “Pesquisar”, listamos as melhores ofertas de aluguel de carros e você pode filtrar pela sua locadora de preferência, categoria de carro desejada, intervalo de preços, entre outros.</p>
          </div>
        </div>
  
        <div class="toggle-container">
          <div class="toggle-button">
            <h3>Vale a pena alugar na Rentcars?</h3>
            <span class="arrow-faq"><img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="left"></span>
          </div>
          <div class="toggle-content">
            <p>Sim! Porque você compara preços entre mais de 200 locadoras pelo mundo em um só lugar! Além disso, nosso atendimento funciona 7 dias da semana por telefone, chat ou WhatsApp, e com as melhores pontuações no Reclame Aqui e Trustpilot. Ao longo do ano, você aproveita promoções exclusivas, pode pagar em até 12x no cartão, PIX ou boleto, e ganha Cashback (verifique condições). Sem dúvidas, a Rentcars é o jeito mais fácil de alugar carro!</p>
          </div>
        </div>
  
        <div class="toggle-container">
          <div class="toggle-button">
            <h3>Quais são os requisitos mínimos para o aluguel de carros?</h3>
            <span class="arrow-faq"><img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="left"></span>
          </div>
          <div class="toggle-content">
            <p>Existem algumas regras diferentes para aluguel de carros que dependem da região que você realizar sua locação. No Brasil, o locatário precisa ter 21 anos, Carteira Nacional de Habilitação (CNH) válida e emitida há mais de 2 anos (CNH definitiva) e cartão de crédito com limite suficiente para o bloqueio caução, também chamado de pré-autorização. Já no exterior, além da CNH, é necessário apresentar o passaporte e, em alguns países, a Permissão Internacional para Dirigir (PID). O cartão de crédito para caução precisa ser internacional.</p>
          </div>
        </div>
  
        <div class="toggle-container">
          <div class="toggle-button">
            <h3>Como funciona o caução no aluguel de carros?</h3>
            <span class="arrow-faq"><img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="left"></span>
          </div>
          <div class="toggle-content">
            <p>O bloqueio caução ou pré-autorização é um valor retido no cartão de crédito do locatário para a segurança da locadora. Esta quantia, que é determinada pela própria locadora, não é cobrada como uma compra comum, mas sim bloqueada do limite do cartão de crédito. Essa é uma exigência das locadoras, que fazem o bloqueio no momento da retirada do veículo alugado. Mas pode ficar tranquilo! O valor é desbloqueado após a vistoria e entrega do carro nas mesmas condições de retirada.</p>
          </div>
        </div>
  
        <div class="toggle-container">
          <div class="toggle-button">
            <h3>Por que somos a melhor opção para aluguel de carros no exterior?</h3>
            <span class="arrow-faq"><img src="../views/imagens/main/icon-arrow-right.svg" alt="" class="left"></span>
          </div>
          <div class="toggle-content">
            <p>Além de já sair do Brasil com a reserva do carro garantida, você tem a opção de fazer o pagamento do aluguel em reais, com cartão de crédito ou boleto e sem IOF — o que já significa uma economia de 5,38%! E tem mais: te damos todo o suporte necessário, com atendimento personalizado e em português independentemente de onde você estiver. Descubra o mundo e conte com a gente!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="rc-apps-newsletter">
    <div class="container">
      <div class="rc-newsletter">
        <div class="rc-newsletter__wrapper">
          <div class="rc-newsletter__wrapper-text">
            <h2 class="rc-newsletter__title">Receba ofertas e descontos</h2>
            <p>Cadastre seu e-mail para receber promoções exclusivas da Rentcars e os melhores descontos do ano!</p>
          </div>
          <form class="formNewsFooter" id="formNewsFooter" name="formNewsFooter" method="post">
            <div class="d-flex-oferta">
              <input id="Nome" class="nome-newsletter form-control" name="Nome" type="text" placeholder="Nome" required>
              <input id="Email" name="Email" class="email-newsletter form-control" type="email" placeholder="E-mail" required>
              <button class="rc-newsletter__btn" type="submit">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>    
    </div>
  </section>
</div>  

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
                  <li><a href="https://www.rentcars.com/pt-br/info/requisitos-para-alugar-veiculos">Requisitos para Locação</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/app">Aplicativo Rentcars</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/promocoes">Promoções</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/minha-carteira" rel="nofollow">Minha carteira</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/rewards">RentRewards</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/indique-amigos">Indique e Ganhe</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/cashback">Cashback</a></li>
                  <li><a href="https://blog.rentcars.com/?utm_source=rentcars&utm_medium=rodape&utm_campaign=home" target="_blank" rel="noopener">Blog Rentcars</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/blackfriday">Black Friday</a></li>
                  <li><a href="https://www.rentcars.com/pt-br/aluguel-mensal">Tarifa Mensal</a></li>
                  <li><a href="https://assinatura.rentcars.com?utm_source=site&utm_medium=direct&utm_campaign=link_footer_desktop">Assinatura Anual</a></li>
                  <li><a href="https://awards.rentcars.com/resultado/">Rentcars Customer Choice Awards</a></li>
              </ul>
          </div>

          <div class="footer-1pt">
            <ul class="ul-first-child" id="customeraccess">
                <h1>Acesso Cliente</h1>
                <li><a href="https://www.rentcars.com/pt-br/cliente/minhas-reservas" rel="nofollow">Consulte suas Reservas</a></li>
                <li><a href="https://www.rentcars.com/pt-br/cliente/minha-conta" rel="nofollow">Acesse sua Conta</a></li>
                <li><a href="https://www.rentcars.com/pt-br/cliente/cadastro" rel="nofollow">Cadastre-se</a></li>
            </ul>
          
            <ul class="ul-first-child">
              <h1>Atendimento ao Cliente</h1>
                <li><a href="https://www.rentcars.com/pt-br/faq" target="_blank" rel="noopener">Dúvidas Frequentes</a></li>
                <li class="quebra-linha">Internacionais </li> <li><a href="tel:+55 (41) 4042 1479" translate="no"><strong>+55 (41) 4042 1479</strong></a></li>
                <li><a href="https://www.rentcars.com/pt-br/info/contato" title="Fale Conosco">Fale Conosco</a></li>
                <li><a href="/pt-br/lp/alteracao-cancelamento?utm_source=rentcars&utm_medium=home&utm_campaign=banneralteracao">Alteração e Cancelamentos</a></li>
            </ul>
          </div>

        <div class="footer-1pt" id="locadora-footer">
          <ul class="ul-first-child">
              <h1>Locadoras de veículos</h1>
              <li><a href="https://www.rentcars.com/pt-br/info/cadastro-de-locadora">Cadastre sua Locadora</a></li>
          </ul>
          <ul class="ul-first-child">
              <h1>Afiliados Rentcars</h1>
              <li><a href="http://affiliates.rentcars.com/pt-br/" target="_blank" rel="noopener">Faça parte do programa</a></li>
          </ul>
      </div>

      <div class="footer-1pt "  id="sobre-nos-footer">
        <ul class="ul-first-child" >
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
                <img loading="lazy"alt="Apple Pay" width="41" class="placeholder-image" src="../views/imagens/footer/icon-apple-pay.svg">
            </div>
            <div>
                <img loading="lazy" alt="Google Pay" width="44" class="placeholder-image" src="../views/imagens/footer/icon-google-pay.svg">
            </div>
            <div>
                <img loading="lazy" alt="PayPal" width="59" class="placeholder-image" src="../views/imagens/footer/icon-pay-pal.svg">
            </div>
            <div>
                <img loading="lazy" alt="Visa" class="placeholder-image" src="../views/imagens/footer/visa.svg">
            </div>
            <div>
                <img loading="lazy" alt="Mastercard" class="placeholder-image" src="../views/imagens/footer/mastercard.svg">
            </div>
            <div>
                <img loading="lazy" alt="Diners" class="placeholder-image" src="../views/imagens/footer/diners.svg">
            </div>
            <div>
                <img loading="lazy" alt="Elo" class="placeholder-image" src="../views/imagens/footer/elo.svg">
            </div>
            <div>
                <img loading="lazy" alt="American Express" class="placeholder-image" src="../views/imagens/footer/amex.svg">
            </div>
            <div>
                <img loading="lazy" alt="Boleto" class="placeholder-image" src="../views/imagens/footer/boleto.svg">
            </div>
            <div>
                <img loading="lazy" alt="Itaú" class="placeholder-image" src="../views/imagens/footer/itau.svg">
            </div>
            <div>
                <img loading="lazy" data-src="//static.rentcars.com/imagens/flags-payments/pix.svg" alt="PIX" class="placeholder-image" src="../views/imagens/footer/pix.svg">
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
                <img alt="Twitter" class="icon-twitter"
                src="../views/imagens/nav-icons/twitter.svg">
              </a>
          </li>
          <li data-gtm-event="social-network-footer">
              <a href="#" target="_blank" rel="noopener">
                <img alt="Linkedin" class="icon-likedin" src="../views/imagens/nav-icons/linkedin.svg">
              </a>
          </li>
      </ul>
  </div>

    <img loading="lazy" class="rentcars-svg" src="../views/imagens/nav-icons/rentcars.svg" class="logo-rentcars-img img-responsive" alt="Rentcars">
      <p class="copyright-text">&copy; 2023 Rentcars. Todos os direitos reservados.</p>
      <div class="address">
          <address>
              Holanda: RENTCARS BV | Schiphol Boulevard 195, 1118BG, Schiphol, Netherlands, Registration No. 859404900. <br>
              Brasil: RENTCARS LTDA | R. Doutor Pedrosa 151, 12º - Centro, CEP 80420-120, Curitiba/Paraná, Brasil, CNPJ 10.998.234/0001-23.
          </address>
      </div>
  </div>
</div>

</footer>
 
</main>

</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZOiQe6s-ITzrgKZ25fBAY65u4VFNE5bI&libraries=places,marker&callback=initMap&solution_channel=GMP_QB_addressselection_v2_cA" async defer></script>
<script type="text/javascript" src="../views/script.js"></script>
</html>


