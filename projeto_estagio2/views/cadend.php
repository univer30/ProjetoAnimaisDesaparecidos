<diV class="container" style=" margin-right: 160px; width: 3000px; margin-top: 40px;">
<div class="row">
    <div class="col b">  
    <img src="assets/images/filhote3.png" style="width: 500px;  height: 450px;"> 
    </div>
    <div class="col" style="margin-left: 140px; margin-top:32px">
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="cadusuario">Anterior</a></li>
    <li class="page-item "><a class="page-link" href="cadusuario">1</a></li>
    <li class="page-item active"><a class="page-link" href="cadend">2</a></li>
    <li class="page-item"><a class="page-link" href="cadlogin">3</a></li>
    <li class="page-item"><a class="page-link" href="cadlogin">Avançar</a></li>
  </ul>
</nav>
<?php //echo $situacao;?>

<form method="POST">

<div class="form-group">
<label>CEP:<strong class="text-danger">*</strong></label>
 <input name="cep" class="form-control" type="text" id="cep"  size="10" maxlength="9" onblur="pesquisacep(this.value);" style="height: 24px;width:113px;" >
 <label>CEP Auto busca</label>
   </div>
   <div class="form-group">
      <label>Endereço<strong class="text-danger">*</strong> </label>
        <input class="form-control" name="rua" type="text" id="rua" size="60"  style="  height: 24px; width:283px;" /><br />
        </div>
        <div class="form-row">
    <div class="form-group col-md-4">  
    <label for="inputnum">Nº<strong class="text-danger">*</strong></label>
      <input type="text" class="form-control"  id="inputnum" name= "inputnum" style=" height: 24px; width:130px;"> 
</div>
<div class="form-group col-md-6">
        <label>Bairro<strong class="text-danger">*</strong></label>
        <input class="form-control" name="bairro"  type="text" id="bairro" size="40" style=" height: 24px; width:180px;">
        </div>
           </div>
           <div class="form-row">
    <div class="form-group col-md-4">  
        <label>Cidade<strong class="text-danger">*</strong></label>
        <input class="form-control" name="cidade"  type="text" id="cidade" size="40" style=" height: 24px; width:130px;">
        </div>
        <div class="form-group col-md-4">
        <label>Estado<strong class="text-danger">*</strong></label>
        <input  class="form-control" name="uf" type="text"  id="uf" size="2" style=" height: 24px; width:130px;">
        </div>
        </div>
        <div class="form-row">
    <div class="form-group col-md-4">
    <label>IBGE<strong class="text-danger">*</strong></label>
        <input class="form-control" name="ibge" type="text" id="ibge" size="8"  style=" height: 24px; width:130px;">
        </div>

        <div class="form-group col-md-4">
        <label>Referência</label>
        <input  class="form-control" name="referencia" type="text" id="referencia"  size="2" style=" height: 24px; width:130px;">
        </div>
        </div>
        <a href="cadusuario">
        <button type="button" class="btn btn-primary">Voltar</button>
        </a>
        <button type="Subimit" class="btn btn-primary">Salvar</button>
      </form>
      </div>
      </div>
      </div>