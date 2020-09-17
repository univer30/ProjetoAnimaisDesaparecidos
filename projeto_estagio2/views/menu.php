<?php
$id=1000;
$style="150px";

if(isset($_POST["voltar2"])){

  
}


if(!empty($_GET['id'])){
$id= $_GET['id'];
}

if($id==2 || $id==3){
$style="600px;";
}

?>
<diV  style="margin-top:50px; background-color: #EBE6E6; height: 600px;">
<h3 class="text-center" style="margin-top: 90px;"> Menu </h3>
<br>
   <div class="row">
      <div class="col">
         <div class="container">
       <div class="accordion " id="accordionExample" style="width: 300px;">
          <div class="card">
    <div class="card-header" style="background-color: purple;box-shadow: 3px 3px 3px rgba(0,0,0,0.3);text-shadow:" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
         Perfil
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       <a  href="#"> Alterar</a><br><br>
       <a  href="#"> Consultar</a>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="background-color: purple;box-shadow: 3px 3px 3px rgba(0,0,0,0.3);text-shadow:" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link text-light " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Configurações
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <a  href="consultardoacao"> Consultar doação</a><br><br>
      <a  href="consultaanimais"> Consultar Animal</a><br><br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" style="background-color: purple;box-shadow: 3px 3px 3px rgba(0,0,0,0.3);text-shadow:" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-light" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Entre em contato
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <a  href="#">Contato</a><br><br>
      <a  href="#">Avaliar nosso site</a><br><br>
      </div>
    </div>
  </div>
</div>
   </div>
     </div>
     <div class="formul_doacao" id="formul_doacao">
     <div class=" container  bg-white " style="width: 370px; height: 480px;" >
    
    <h5 class="text-center">Cadastrar doação</h5>
    <form action="POST">
    <div class="form-group">
    <label>Data<strong class="text-danger">*</strong> </label>
    <input type="date"  class="form-control"    id="inputemail" name = "inputemail" style="  height: 27px;width:340px;">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
  <label for="inputquant">Quantidade<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputquant" name= "inputquant" style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-4">
<label>titulo<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputtitulo"   type="text" id="inputtitulo" size="40"style="  height: 27px; width:157px;">
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
  <label for="inputnum">Email proprietário<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputemail" name= "inputemail"style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-4">
<label> Telefone prop<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputtelefone"   type="text" id="inputtelefone" size="40"style="  height: 27px; width:157px;">
</div>
</div>

    <div class="form-group" >
  <label for="inputnum">Status<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputstatus" name= "inputstatus"style=" height: 27px; width:330px;"> 
</div>
<div class="form-group">
<label>Descrição<strong class="text-danger">*</strong></label>
  <Textarea class="form-control" name="inputdatanasc"   type="text" id="inputdatanasc" size="50"style="  height: 60px; width:330px;"></Textarea>
</div>

<a  href="menu">
<button type="button" class="btn btn-primary"  onclick="voltar()">Voltar</button>
</a>
<button type="button" class="btn btn-primary" onclick="formulario()">Salvar</button>
</form>
    </div>
    </div>
<!--Formulario de cadastro de anaimais--->

    <div class="formulario" id="formul">
     <div class=" container bg-white  " style="width: 370px; height: 400px; " >
    
    <h5 class="text-center"> Cadastrar Animal</h5>
    <form action="POST">
    <div class="form-group">
    <label>Nome<strong class="text-danger">*</strong> </label>
    <input type="text"  class="form-control"    id="inputemail" name = "inputemail" style="  height: 27px;width:340px;">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
  <label for="inputnum">Raça<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputcpf" name= "inputcpf" style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-4">
<label>Especie<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputdatanasc"   type="text" id="inputdatanasc" size="40"style="  height: 27px; width:157px;">
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
  <label for="inputnum">Idade<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputcpf" name= "inputcpf"style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-4">
<label>Peso<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputdatanasc"   type="text" id="inputdatanasc" size="40"style="  height: 27px; width:157px;">
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
  <label for="inputnum">Cor<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputcpf" name= "inputcpf"style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-4">
<label>Sexo<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputdatanasc"   type="text" id="inputdatanasc" size="40"style="  height: 27px; width:157px;">
</div>
</div>
<a  href="menu">
<button type="button"  class="btn btn-primary" onclick="voltar2()">Voltar</button>
</a>

<button type="button" class="btn btn-primary" >Salvar</button>

</form>
    </div>
    </div>

    <!-----Chama formulário----->
    <div class="button" id="but">
<div class="col">
   <div class="row">
     <div class="col" >  
       <a href="menu?id=3"><img class="icone"src="assets/images/adocao.png" height="190" style="margin-top: 90px;"></a>
    <p style="margin-left: 30px;"><strong>Cadastrar adoção</strong></p>
</div>
    <div class="col" style="margin-left:90px;">  
       <a href="menu?id=2"><img class="icone2" src="assets/images/animal.png" height="190" style="margin-top: 90px;"></a>
        <p><strong>Cadastar animal</strong></p>
</div>
  </div>
     </div>
     </div>
     
<div class="col" style="margin-left: <?php echo $style?>" >
<div class="container border border-dark" id="main" style="width: 380px; height: 500px; background-color: purple;box-shadow: 3px 3px 3px rgba(0,0,0,0.3)" >

<img src="assets/images/cao1.jpg" id="banner" style="width: 350px; margin-top: 10px; height:475px;">
</div>
   </div>
     </div>
        </diV>
      

    <?php
    if($id==2){
      ?>
      <script>
  $(document).ready(function(){
  
   document.getElementById('but').style.display="none";
   document.getElementById('formul').style.display="block";
    
});

function formulario(){
  document.getElementById('but').style.display="block";
   document.getElementById('formul').style.display="none";
}

function voltar(){
  document.getElementById('but').style.display="block";
   document.getElementById('formul').style.display="none";
   document.getElementById('formul_doacao').style.display="none";

   alert("voltar");
}

  </script>
  <?php
    }
?>

<?php

if($id==3){
  ?>
<script>
$(document).ready(function(){
  
  document.getElementById('but').style.display="none";
  document.getElementById('formul').style.display="none";
  document.getElementById('formul_doacao').style.display="block";
});

</script>
<?php
}
  ?>  

<script>
function voltar2(){
document.getElementById('but').style.display="block";
 document.getElementById('formul').style.display="none";
 document.getElementById('formul_doacao').style.display="none";
}

function voltar(){
document.getElementById('but').style.display="block";
 document.getElementById('formul').style.display="none";
 document.getElementById('formul_doacao').style.display="none";
}
   </script>

  
