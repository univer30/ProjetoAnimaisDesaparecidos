
<diV class="container" style=" margin-right: 160px; width: 3000px;margin-top:70px;">
<div class="row">
    <div class="col b">  
    <img src="assets/images/gato3.jfif" style="width: 500px;"> 
	</div>
	
    <div class="col" style="margin-left: 140px; margin-left:100p">


	<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="home">Anterior</a></li>
    <li class="page-item active"><a class="page-link" href="cadusuario">1</a></li>
    <li class="page-item"><a class="page-link" href="cadend">2</a></li>
    <li class="page-item"><a class="page-link" href="cadLogin">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Avançar</a></li>
  </ul>
 

<img src="assets/images/img14.png"  id="imagem"  style="width:80px;margin-left: 100px;">
<form method="POST" enctype="multipart/form-data" >

<div class="form-group">
    <input type="file"  id="imagem" name = "imagem"  onchange="previwImagem()">
  </div>

  <div class="form-group">
    <label>Nome completo<strong class="text-danger">*</strong> </label>
    <input type="text"  class="form-control"  id="inputNome" name = "inputNome"  style="  height: 27px; width:297px;">
    
  </div>
  <div class="form-group">
    <label>Email<strong class="text-danger">*</strong> </label>
    <input type="emmail"  class="form-control"    id="inputemail" name = "inputemail" style="  height: 27px;width:297px;">
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
  <label for="inputnum">CPF<strong class="text-danger ">*</strong></label>
      <input type="text" class="form-control"  id="inputcpf" name= "inputcpf"style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-6">
<label>Data nascimento<strong class="text-danger">*</strong></label>
  <input class="form-control" name="inputdatanasc"   type="text" id="inputdatanasc" size="40"style="  height: 27px; width:157px;">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
       
    <label >Telefone<strong class="text-danger">*</strong></label>
      <input type="text" class="form-control"   id="inputtelefone" name= "inputtelefone"style=" height: 27px; width:137px;"> 
</div>
<div class="form-group col-md-6">
<label>Celular<strong class="text-danger">*</strong></label>
        <input class="form-control " name="inputcelular" type="text" id="inputcelular" size="40"style="  height: 27px; width:157px;">
</div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label >Sexo<strong class="text-danger">*</strong></label>
      <select type="select" class="form-control"  id="inputsexo" name = "inputsexo" style="  height: 32px; width:137px;">
      <option selected></option>
      <option>Masculino</option>
      <option>Feminino</option>
      <option>Outros</option>
      </select>
	</div>

	<div class="form-group col-md-6">
      <label>Estado civil<strong class="text-danger">*</strong></label>
      <select type="select" class="form-control" id="inputcivil"  name = "inputcivil"style="  height: 32px; width:157px;">
      <option selected></option>
      <option>Solteiro(a)</option>
      <option>Casado(a)</option>
      <option>Divôrciado(a)</option>
	  </select>
	  </div>
</div>
<a href="home">
<button type="button" class="btn btn-primary">Voltar</button>
</a>
<button type="Subimit" class="btn btn-primary">Salvar</button>
</form>
    </div>
  </div>
</div>
 