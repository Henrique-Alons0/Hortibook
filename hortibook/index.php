<!DOCTYPE html>
<html lang="Pt-Br">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon-hortibook-3.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/funcs.js"></script>
    <title>HortiBook - Welcome</title>
    <?php
        require 'php/funcao_auxiliar.php';
    ?>
</head>
<body class="body-pg-1" onload="section()">
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg bg-dark navsuperior">
        <a class="navbar-brand logo" href="index.php">
            <img src="img/logo-hortibook-4.png" class="d-inline-block align-top logo-hortibook" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <svg class="bi bi-list" width="2em" height="2em" color="white" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 013 11h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm0-4A.5.5 0 013 3h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
            </svg>              
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link link1" href="index.php">Início <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link link1" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link1" href="#form-contat">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link1" href="help.php">Ajuda</a>
            </li>
          </ul>
          <form class="navbar-form form-inline my-2 my-lg-0" method="POST" action="php/log.php">
            <div class="form-group">
                <input type="text" class="form-control email-log mr-sm-2" name="email_log" id="email_log" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control senha-log mr-sm-2" name="senha_log" id="senha_log" placeholder="Senha">
            </div>
            <button type="submit" id="Botao_Entrada" name="Botao_Entrada" class="btn btn-outline-primary my-2 my-sm-0">Entrar</button>
          </form>
        </div>
      </nav>
    <!--<nav class="navbar navbar bg-dark navsuperior">
        
            <form class="navbar-form form-inline" role="search">
                    <input type="text" class="form-control email-log mr-sm-2" name="email-log" placeholder="E-mail">
                    <input type="password" class="form-control senha-log mr-sm-2" name="senha-log" placeholder="Senha">
                <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Entrar</button>
            </form>
    </nav>-->
    
    
    <div class="ofusca">
        <!-- Conteúdo Central da Página -->
        <div class="conteudo">    
            <br>
            <br>    

            <!-- Divisão Esquerda Body -->
            <div class="DivEsBody">
                <h1 id="sobre">Quais os benefícios?</h1>
                <div class="marketing">
                    <p class="marketing-text">Você é Feirante, Mercador?<br>
                    Ja imaginou transformar seu material orgânico descartavel em em frutas, legumes e verduras saudaveis e perfeitas para venda? <a class="link-formato" href="help.php#help-sobre-nos"><u>Clique para ver mais...</u></a></p>
                    <div class="marketing-img">
                        <img class="rounded img1" src="img/oganico-logo-reciclagem.png" alt="">
                        <img class="rounded img3" src="img/beneficios.png" alt="">
                        <img class="rounded img3" src="img/horta-organica.png" alt="">
                        <img class="rounded img3" src="img/horta.png" alt="" style="margin-left: 10%;">                
                    </div>        
                </div>
            </div>

            <!-- Divisão Direita Body -->
            <div class="DivDiBody">
                <div class="form_log_cad">    
                    <h1>Cadastre-se já
                        <a class="sem-formato" href="help.php#help-cadastro">
                        <svg class="bi bi-question-circle" width="0.38em" height="0.38em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                            <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                        </a>
                    </h1>
                    <form class="" method="POST" action="">
                        <!-- <p>Selecione o tipo de atuação de sua empresa:</p>
                        <div class="form-group form-check check1">
                            <input class="form-check-input" type="checkbox" id="Vendas" name="Vendas"
                                checked>
                            <label class="form-check-label" for="Vendas" value="1">Vendas</label>
                        </div>
                        
                        <div class="form-group form-check check2">
                            <input class="form-check-input" type="checkbox" id="Cultivo" name="Cultivo">
                            <label class="form-check-label" for="Cultivo" value="2">Cultivo</label>
                        </div> -->
                        <div class="form-group">
                            <input name="nome_Usuario" id="nome_Usuario" class="form-control nome input-type3" type="text" placeholder="Nome(Empresarial/Pessoal)" required>
                        </div>
                        <div class="form-group">
                            <input name="data_Nasc" id="data_Nasc" type="date" class="form-control" placeholder="Data de Nascimento" required> 
                        </div>
                        <div class="form-group">
                            <input name="cpf" id="cpf" class="form-control documento input-type3" placeholder="Digite o numero do seu documento" type="text" required> 
                        </div>
                        <div class="form-group">
                            <input name="email" id="email" class="form-control email input-type3" placeholder="Digite um email de contato" type="email" required>
                        </div>
                        <div class="form-group">
                            <input name="celular_telefone" id="celular_telefone" class="form-control celular input-type3" placeholder="Digite um número de contato" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="logradouro" id="logradouro" class="form-control endereco input-type3" placeholder="Digite o logradouro" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="numero_Resid" id="numero_Resid" class="form-control endereco input-type3" placeholder="Digite o numero de sua residência" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="complemento" id="complemento" class="form-control endereco input-type3" placeholder="Digite o complemento(Se houver)" type="text">
                        </div>
                        <div class="form-group">
                            <input name="cep" id="cep" class="form-control endereco input-type3" placeholder="Digite o cep" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="cidade" id="cidade" class="form-control endereco input-type3" placeholder="Digite a Cidade" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="estado" id="estado" class="form-control endereco input-type3" placeholder="Digite seu estado" type="text" required>
                        </div>
                        <div class="form-group">
                            <input name="senha" id="senha" class="form-control senha input-type3" placeholder="Escolha uma Senha" type="password" required>
                        </div>
                        <div class="form-group">
                            <input name="confirm_Senha" id="confirm_Senha" class="form-control senha-confirm input-type3" placeholder="Confirme sua Senha" type="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="start_Now" id="start_Now">Comece Agora</button>
                    </form>
                </div>
            </div>
            <?php
                if(isset($_POST['start_Now']) !== false)
                {
                    require 'php/cad.php';
                }
            ?>
            <br>
            <br>
            <br>
            <br>

            <div id="form-contat" class="form-contat">
                <h1>Contato 
                    <a class="sem-formato" href="help.php#help-contato">
                        <svg class="bi bi-question-circle" width="0.38em" height="0.38em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                            <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                    </a>
                </h1>
                <form class="formulario-contato">
                    <div class="form-group">
                        <label for="nome-contato">Nome:</label>
                        <input id="nome-contato" class="form-control input-type1" name="nome-contato" placeholder="Digite seu Nome..." type="text" required>
                        <label for="email-contato">E-mail:</label>
                        <input  id="email-contato" class="form-control input-type1" name="email-contato" placeholder="Digite seu E-mail..." type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="mensagem-contato">Mensagem:</label>
                        <textarea id="mensagem-contato" class="form-control input-type2" name="mensagem-contato" placeholder="Digite aqui Sua mensagem..." rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
            </div>

            <div class="info-empresa">
                <h1>Dados da Empresa</h1>
                <table class="table-dados">
                    <tr>
                        <th>Endereço:</th>
                        <td>Rua Lauro Rollim, 400</td>
                        <td>
                            <a href="https://www.google.com/search?q=lauro+rolim+400&rlz=1C1GCEU_pt-BRBR879BR879&oq=lauro+&aqs=chrome.1.69i57j35i39j46l3j0j46l2.3093j0j7&sourceid=chrome&ie=UTF-8" target="_blanc">
                                <button type="button" class="btn btn-secondary btn-dados" data-toggle="modal" data-target="#modalExemplo">
                                <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
</svg>
                            </button></a>
                        </td>
                    </tr>
                    <tr>
                        <th>E-mail:</th>
                        <td>hortibookadmrh@gmail.com</td>
                        <td>
                            <a href="https://mail.google.com/mail/u/0/#inbox?compose=PNRMKbkZDgGwbKMkbHkcfHrMsrBsPNxmbRgqTkjprPbKRMcKlPWkrLrcvsNpHzhMhpMBRKjZpMWvhbV" target="_blanc">
                                <button type="button" class="btn btn-secondary btn-dados">
                                    <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
</svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Razão Social:</th>
                        <td>HortiBook</td>
                        <td>
                            <button type="button" class="btn btn-secondary btn-dados" data-toggle="modal" data-target="#modalExemplo3">
                                <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
</svg>
                            </button>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Razão Social</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>HortiBook</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-dados" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Telefone(1):</th>
                        <td>(15) 99789-2053</td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5515997892053&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20*HortiBook*" target="_blanc">
                                <button type="button" class="btn btn-secondary btn-dados">
                                    <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
</svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Telefone(2):</th>
                        <td>(15) 3243-2558</td>
                        <td>
                            <a href="https://api.whatsapp.com/send?phone=5515997892053&text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20*HortiBook*" target="_blanc">
                                <button type="button" class="btn btn-secondary btn-dados">
                                    <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>


        </div>

        

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- Footer -->
    <footer class="page-footer absolute-bottom font-small white pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
        
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
        
                    <!-- Content -->
                    <h5 class="text-uppercase">Rodapé HortiBook</h5>
                    <p>Com HortiBook o Cultivo e a Comercialização fica fácil!</p>

                    <img src="img/anvisa.png" alt="" width="250" height="150">
                            
                </div>
                <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Site</h5>
            
                    <ul class="list-unstyled">
                        <li>
                        <a href="#sobre">Sobre Nós</a>
                        </li>
                        <li>
                        <a href="#form-contact">Contato</a>
                        </li>
                        <li>
                        <a href="PageOn.php">Contratos</a>
                        </li>
                        <li>
                        <a href="PageOn.php">Negócios Disponíveis</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    <!-- Links -->
                    <h5 class="text-uppercase">Patrocinadores</h5>
                    <ul class="list-unstyled">
                        <li>
                        <a href="https://www.unip.br/" target="_blanc">Unip - Sorocaba</a>
                        </li>
                        <li>
                        <a href="http://www.radiouau.com/" target="_blanc">Radio UAU</a>
                        </li>
                        <li>
                        <a href="https://getbootstrap.com.br/" target="_blanc">Equipe Bootstrap</a>
                        </li>
                        <li>
                        <a href="https://www.facebook.com/pg/alonsoartsemarketing/posts/" target="_blanc">Alonso Art's</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> EquipeensinoUnip</a>
        </div>
        <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>