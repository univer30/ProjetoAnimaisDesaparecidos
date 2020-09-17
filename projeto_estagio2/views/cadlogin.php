<diV class="container" style=" margin-right: 160px; width: 3000px; margin-top: 60px;">
<div class="row">
    <div class="col b"> 
        <img src="assets/images/cachorro.jpg"> 
    </div>
    <div class="col" style="margin-left: 140px; margin-top:32px">

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="cadend">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="cadusuario">1</a></li>
    <li class="page-item"><a class="page-link" href="cadend">2</a></li>
    <li class="page-item active"><a class="page-link" href="cadlogin">3</a></li>
    <li class="page-item disabled"><a class="page-link" href="#">Avançar</a></li>
  </ul>
</nav>
<?php //echo $situacao;?>
<form method="POST">

 
<div class="form-group col-md-4">
       
       <label >Usuário<strong class="text-danger">*</strong></label>
         <input type="text" class="form-control" id="inputusuario" name= "inputusuario"style="  height: 24px; width:130px;"> 
   </div>
   
    <div class="form-group col-md-4">
    <label >Senha<strong class="text-danger">*</strong></label>
      <input type="password" maxlength="7" class="form-control" id="inputsenha" name= "inputsenha"style="  height: 24px; width:130px;"> 
</div>

<div class="form-group col-md-6">
<label>Confirmar senha<strong class="text-danger"id="texto">*</strong></label>
        <input class="form-control  " name="inputcofsenha" maxlength="7" type="password" id="inputconfsenha" size="40"style="  height: 24px; width:135px;">
       
</div>
<div class="g-recaptcha" style="margin-left: 30px;" data-sitekey="6LdyzrQZAAAAAFyw3lyEJxqMk0YerxayMazpkcIZ">
  </div>
<p>Ao finalizar você estará aceitando o <a href = "contrato.php" >termo do contrato </a></p><br>
<a  href="cadend">
<button type="button" class="btn btn-primary">Voltar</button>
</a>
        <button type="Subimit" class="btn btn-primary">Salvar</button>
      </form>
      </div>
</div>
</div>