<?php
include_once("header.php");
?>

  <div class="container">
 <form class="row g-3" action="../controler/inserircadastro.php" method="Get">

  <div class="col-md-6">
  <label for="inputName" class="form-label">Nome</label>
    <input type="text" name="nomeusu" class="form-control"  id="inputname" aria-label="First name">
  </div>
  <div class="col-5">
    <label for="inputcpf" class="form-label">CPF</label>
    <input type="text" name="cpfusu" class="form-control" id="inputcpf"  placeholder="333.333.333-33">
  </div>

  <div class="col-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" name="emailusu" class="form-control" id="inputemail">
  </div>
  <div class="col-5">
    <label for="inputFone" class="form-label">Telefone</label>
    <input type="text" name="foneusu" class="form-control" id="inputFone"  placeholder="(11) 99999-9999">
  </div>
  <div class="col-3">
    <label for="inputcep" class="form-label">CEP</label>
    <input type="text" name="cepusu" class="form-control" id="inputcep" placeholder="01234-567">
  </div>
  <div class="col-3">
    <label for="inputnum" class="form-label">Número da residência</label>
    <input type="text" name="numusu" class="form-control" id="inputnum">
  </div>
  <div class="col-5">
    <label for="inputcomple" class="form-label">Complemento</label>
    <input type="text" name="compleusu" class="form-control" id="inputcomple">
  </div>
 

  <div class="col-md-4">
    <label for="inputState" class="form-label">Tipo de Usuário</label>
    <select id="inputState" name="tipousu" class="form-select">
      <option selected>Escolha...</option>
      <option value="1">Funcionário</option>
      <option value="2">Cliente</option>
      
    </select>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Li e aceito os termos de uso
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</div>


<?php
include_once("footer.php");