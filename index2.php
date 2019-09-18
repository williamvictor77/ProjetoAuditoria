
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canto Maneiro</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<style type="text/css">
    #botao-VerTodos{
        color: black;
    }
    #myNavbar{
        transition: 1s;
        color: black;
    }
   
</style>
  </head>
  <body>
   
   
   


<nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="botaoNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><b>Canto Maneiro</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li> <a href="index2.php">Home</a> </li>
            <li> <a href="perfil.html">Minha conta</a> </li>
            <li> <a href="sobre_nos.html">Sobre</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastro.html"> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1" style="height: 136px;">
                        <i class="glyphicon glyphicon-log-in"></i>
                        <a href="cadastro.html"><p style="color: white">Cadastre-se!</p></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <a href="cadastro-imovel.html" style="color: white"><p>Cadastre seu imovel</p></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <a href="filtro.html"><p style="color: white;">pesquisar imóveis</p></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Nossos serviços</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><b>Ache um canto perto de você!</b></h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/belem-icoaraci.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver Imóveis</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Icoaraci</a></h2>
                                
                                <div class="product-carousel-price">
                                    A partir de <ins>$700.00</ins> <del>$900.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/belem-marco.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver Imóveis</a>
                                    </div>
                                </div>
                                
                                <h2>Marco</h2>
                                <div class="product-carousel-price">
                                   A partir de <ins>$899.00</ins> <del>$999.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img style="height: 142px;" src="img/belem-nazare.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver Imóveis</a>
                                    </div>
                                </div>
                                
                                <h2>Nazaré</h2>

                                <div class="product-carousel-price">
                                  A partir de <ins>$400.00</ins> <del>$425.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img style="height: 142px;" src="img/belem-batistaCampos.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver Imóveis</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Batista Campos</a></h2>

                                <div class="product-carousel-price">
                                    A partir de <ins>$200.00</ins> <del>$225.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/belem-saoBraz.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver Imóveis</a>
                                    </div>
                                </div>
                                
                                <h2>São Braz</h2>

                                <div class="product-carousel-price">
                                    A partir de <ins>$1200.00</ins> <del>$1355.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img style="height: 142px;" src="img/belem-doca.jpg" alt="">
                                    <div class="product-hover">
                                        
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Ver imóveis</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Doca</a></h2>

                                <div class="product-carousel-price">
                                    A partir de <ins>$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
  
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Top Cantinhos</b></h2>
                        <a href="" class="wid-view-more" id="botao-VerTodos"><b>Ver todos</b></a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/casa1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Casa Pedreira</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$450.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/casa2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Casa Marambaia 3 quartos</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$900.00</ins> <del>$1200.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/casa4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Casa Bairro de Nazaré</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1000.00</ins> <del>$1125.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h4 class="product-wid-title"><b>Recentes</b></h4>
                        <a href="" class="wid-view-more" id="botao-VerTodos"><b>Ver todos</b></a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet01.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">kitnet São Braz 02 quartos</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet02.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">kitnet Batista campos 01 quarto.</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet03.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apartamento Senador Lemos</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><b>Top Novidades</b></h2>
                        <a href="" class="wid-view-more" id="botao-VerTodos"><b>Ver todos</b></a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet06.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">apartamento condominio rio douro</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet05.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apartamento Senador Lemos</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/kitnet04.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apartamento Doca</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>Canto Maneiro</span></h2>
                        <p align="justify"></p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href="#">Minha conta</a></li>
                            
                            <li><a href="#">Lista de Desejos</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="#">Home</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href="#">Kit Net</a></li>
                            <li><a href="#">Casas</a></li>
                            <li><a href="#">apartamentos</a></li>
                            <li><a href="#">Fazendas</a></li>
                            <li><a href="#">Nossas vilas</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Receba nossas novidades!</h2>
                        <p>Informe seu email para manter-se atualizado sobre nossas novidades!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Informe seu e-mail">
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2k18 Feelgood Commerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">azimut3.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>

