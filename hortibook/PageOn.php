<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon-hortibook-3.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>HortiBook - Home</title>
    <?php
        //include 'php/log.php';
        include 'php/funcao_auxiliar.php';
        
            session_start();
            $user_active =  $_SESSION['email'];
            $hora_inicio = $_SESSION['hora_inicio'];
            $hora_fim = $_SESSION['hora_fim'];
            echo $hora_inicio . "<br>" . $hora_fim . "<br>";
            if($user_active == "" || $user_active == false)
            {
                header('location:index.php');
            }
            for ($time_count = date("Y-m-d H:i:s"); $time_count < $hora_fim; $time_count++){ 
                if($time_count <= $hora_fim)
                {
                    session_unset();
                    header('location:index.php');
                }
                $time_count = date("Y-m-d H:i:s");
            }
        
    ?>
</head>
<body>

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
                <a class="nav-link link1" href="index.php#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link1" href="index.php#form-contat">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link1" href="help.php">Ajuda</a>
                </li>
            </ul>
            <div class="navbar-brand">
                <div class="btn-group dropleft">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="bi bi-person-lines-fill" width="2.5em" height="2.5em" color="white" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div class="dropdown-menu">
                        <h5 class="dropdown-item btn-anuncio"><?php echo "<h3 style='font-size: 15px;'>" . $user_active."</h3>"; ?></h5>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item btn-anuncio" href="#">Seus Contratos</a>
                        <form action="" method="POST">
                            <button class="dropdown-item btn-anuncio" name="sair_conta" id="sair_conta" type="submit">Sair da Conta</a>
                        </form>
                </div>
            </div>
        </div>
    </nav>
    <?php
        if(isset($_POST['sair_conta']) !== false)
        {
            session_unset();
            header('location:index.php');
        }
    ?>
    <div class="filter">
        <div>
            
        </div>
    </div>

    <div class="contracts table-responsive">
        <div class="overflow-auto">
            <table class="ListaClientes table table-striped table-sm" width="100%">
                <tr class="line">
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Tipo de Usuário</th>
                    <th>Tipo de Documento</th>
                    <th>Ramo</th>
                    <th>Cidade</th>
                    <th width="25%">Opções de Contato</th>
                </tr>

                <!-- SGA TOMATES E VERDURAS -->
                <tr>
                    <td><img src="img/logo-empresa-1.png" alt="" width="80" height="80"></td>
                    <td>SGA TOMATES E VERDURAS</td>
                    <td><span class="badge badge-secondary">USUÁRIO PADRÃO</span></td>
                    <td>CNPJ</td>
                    <td>Cultivo</td>
                    <td>Sorocaba-SP</td>
                    <td>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                                <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                    </svg>-->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                    <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                                </div>                                  
                            </div>
                        </div>
                    </td>
                    
                </tr>
                
                    <!-- COLHEITA DIVINA -->
                <tr>
                    <td><img src="img/logo-empresa-2.png" alt="" width="80" height="80"></td>
                    <td>COLHEITA DIVINA</td>
                    <td><span class="badge badge-secondary">USUÁRIO PADRÃO</span></td>
                    <td>CNPJ</td>
                    <td>Cultivo</td>
                    <td>Curitibaa-SP</td>
                    <td>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                                <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                    </svg>-->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                    <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                                </div>                                  
                            </div>
                        </div>
                    </td>
                    
                </tr>

                    <!-- JOSUÉ DA COSTA -->
                <tr>
                    <td><img src="img/sem-imagem.png" alt="" width="80" height="80"></td>
                    <td>JOSUÉ DA COSTA</td>
                    <td><span class="badge badge-secondary">USUÁRIO PADRÃO</span></td>
                    <td>MEI</td>
                    <td>Venda</td>
                    <td>Sorocaba-SP</td>
                    <td>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                                <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                    </svg>-->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                    <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                                </div>                                  
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- AMILTON PLANTIL E VENDA DE FRUTAS -->
                <tr>
                    <td><img src="img/logo-empresa-3.png" alt="" width="80" height="80"></td>
                    <td>AMILTON PLANTIL E VENDA DE FRUTAS</td>
                    <td><span class="badge badge-secondary">USUÁRIO PADRÃO</span></td>
                    <td>MEI</td>
                    <td>Venda e Cultivo</td>
                    <td>Araçoiaba da Serra-SP</td>
                    <td>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                                <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                    </svg>-->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                    <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                                </div>                                  
                            </div>
                        </div>
                    </td>
                </tr>

                <!-- HORTA COMUNITÁRIA JD BRASILÂNDIA -->
                <tr>
                    <td><img src="img/logo-empresa-4.png" alt="" width="80" height="80"></td>
                    <td>HORTA COMUNITÁRIA JD BRASILÂNDIA</td>
                    <td><span class="badge badge-warning" >BENEFICIENTE</span></td>
                    <td>MEI</td>
                    <td>Venda e Cultivo</td>
                    <td>Sorocaba-SP</td>
                    <td>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                                <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                    </svg>-->
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                    <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                    <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                                </div>                                  
                            </div>
                        </div>
                    </td>
                </tr>

               <!-- FAZENDA CÉU AZUL -->
               <tr>
                <td><img src="img/logo-empresa-5.png" alt="" width="80" height="80"></td>
                <td>FAZENDA CÉU AZUL</td>
                <td><span class="badge badge-info" >VIP</span></td>
                <td>CNPJ</td>
                <td>Venda e Cultivo</td>
                <td>Campinas-SP</td>
                <td>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                            <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                </svg>-->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                            </div>                                  
                        </div>
                    </div>
                </td>
            </tr>

            <!-- SUPERMERCADOS CORREIA -->
            <tr>
                <td><img src="img/logo-empresa-6.png" alt="" width="80" height="80"></td>
                <td>SUPERMERCADOS CORREIA</td>
                <td><span class="badge badge-info" >VIP</span></td>
                <td>CNPJ</td>
                <td>Venda</td>
                <td>Sorocaba-SP</td>
                <td>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                            <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                </svg>-->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                            </div>                                  
                        </div>
                    </div>
                </td>
            </tr>

            <!-- FAZENDA IPANEMA -->
            <tr>
                <td><img src="img/logo-empresa-7.png" alt="" width="80" height="80"></td>
                <td>FAZENDA IPANEMA</td>
                <td><span class="badge badge-info" >VIP</span></td>
                <td>CNPJ</td>
                <td>Venda</td>
                <td>Sorocaba-SP</td>
                <td>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-outline-primary" type="button">Fechar Contrato</button>
                            <button class="btn btn-outline-primary" type="button">Sobre a Empresa</button>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownCliente1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!--<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                </svg>-->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownCliente1">
                                <a class="dropdown-item btn-anuncio" href="#">Ocultar Empresa</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Doação</a>
                                <a class="dropdown-item btn-anuncio" href="#">Fazer uma Denuncia</a>
                                <a class="dropdown-item btn-anuncio" href="#">Relatar um Problema</a>
                            </div>                                  
                        </div>
                    </div>
                </td>
            </tr>
            </table>
        </div>
    </div>
    <br>


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
                        <a href="index.php#sobre">Sobre Nós</a>
                        </li>
                        <li>
                        <a href="index.php#form-contact">Contato</a>
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