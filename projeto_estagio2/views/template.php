<?Php
if(!empty($_GET['id'])){
     $id= $_GET['id'];
    }

    ?>
    
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>S O S Animal!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bs/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bs/css/style.css">
    


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/bs/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/script2.js"></script>
    


</script>

    <style>
    div.col.b{
    width: 00px;
     height: 550px;
     background-repeat: no-repeat;
     margin-top: 30px;
     margin-left: 100px;
     
  }
  .formulario{
    position: absolute;
    margin-left: 580px;
    display:none;
   
  }
  .formul_doacao{
    position: absolute;
    margin-left: 580px;
    display:none;

  }

  .button{
    display:;
    
  
  }
 
</style>
<style>
  .icone:hover{
            width: 260px!important;
            height: 260px!important;
            position: relative!important;

           }
           .icone2:hover{
            width:190px!important;
            height: 230px!important;
            position: relative!important;

           }
</style>
  </head>
  <body class="bg-light" onload="slide1()">
    <nav class="navbar navbar-expand-md fixed-top" style="background-color: purple;box-shadow: 3px 3px 3px rgba(0,0,0,0.3);text-shadow: 3px 3px 3px rgba(0,0,0,0.3);" role="navgation">
      <a class="navbar-brand" href="">
        <img class="img-fluid" src="assets/images/bootstrap-icons/track.svg" width="30px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-white"  href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Adoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Desaparecidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="menu">menu</a>
          </li>
        </ul>
        
         <a href="cadusuario">
          <button type="button" class="btn btn-outline-warning border-warning" style="width: 14rem;box-shadow: 3px 3px 3px rgba(0,0,0,0.3);text-shadow: 3px 3px 3px rgba(0,0,0,0.3);">
            CADASTRE-SE!
          </button>
          </a>
          <script> 
            $(document).ready(function(){
              $("#login").mouseenter(function(){
                $("#login").animate({width: '50px'});
              });
              $("#login").mouseleave(function(){
                $("#login").animate({width: '40px'});
              });
            });
          </script>
           <div class="dropdown md-3" style = "margin-right: 50px; margin-left: 20px;" >
            <img src="assets/images/login1.png" id="login" style = "height: 50px;"title="Login"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <div class="dropdown-menu  " aria-labelledby="dropdownMenuButton" style = "min-width: 0rem;">
  
  <a class="dropdown-item" href="login">Login</a>
  <a class="dropdown-item" href="#">Sair</a>
  
  </div>
            </div>
    </nav>
  
   <?php $this->loadViewInTemplate($viewName, $viewData); ?>

  <footer class="footer">
          <ul class="nav justify-content-center" style="background-color: purple;">
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="img-fluid" src="assets/images/brands/facebook.svg" width="25px"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="img-fluid" src="assets/images/brands/twitter.svg" width="25px"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="img-fluid" src="assets/images/brands/youtube.svg" width="25px"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img class="img-fluid" src="assets/images/brands/instagram.svg" width="25px"></a>
            </li>
        </ul>
        <ol class="nav justify-content-center" style="background-color: purple;">
          <li class="nav-item mr-sm-3"><a href="#" class="text-warning"><b>♦ Política de privacidade</b></a></li>
          <li class="nav-item mr-sm-3"><a href="#" class="text-warning"><b>♦ Quem somos</b></a></li>
          <li class="nav-item mr-sm-3"><a href="#" class="text-warning"><b>♦ Contato</b></a></li>
        </ol>
        <ul class="nav justify-content-center text-white" style="background-color: purple;">
          <li class="nav-item" style="text-shadow: 3px 3px 3px rgba(0,0,0,0.3); margin-bottom: 28px;">S O SOS Animal - © Todos os direitos reservados.</li>
        </ul>
   </footer>
  </body>
</html>