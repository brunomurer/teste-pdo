<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:05
 */

require_once('../functions.php');
add_disciplina();

?>
<?php include(SISTEMA_TEMPLATE); ?>

<h2>Nova disciplina</h2>
<form class="form-horizontal" action="add_disciplina.php" method="post">
  <!-- area de campos do form -->
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="disciplina">Disciplina</label>
      <input type="text" class="form-control" name="disciplinas['disciplina']" required>
<span class="help-block">ATEN&Ccedil;&Atilde;O: Nomes com no maximo 30 caracteres</span>
    </div>
    <div class="form-group col-md-4">
      <label for="periodo">Periodo</label>
      <select class="selectpicker" data-style="btn-primary" name="disciplinas['periodo']" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="situacao">Situa&ccedil;&atilde;o</label>
      <select class="selectpicker" data-style="btn-primary" name="disciplinas['situacao']" required>
        <option value="Cursando">Cursando</option>
        <option value="Trancado">Trancado</option>
      </select>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="disciplinas.php" class="btn btn-default">Cancelar</a> </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
