<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:09
 */

require_once('../functions.php');
edit_disciplina();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar disciplina</h2>
<form action="edit_disciplina.php?id=<?php echo $disciplinas['id']; ?>" method="post">
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="disciplinas">Disciplina</label>
      <input type="text" class="form-control" name="disciplinas[disciplina]" value="<?php echo $disciplinas['disciplina']; ?>" required>
<span class="help-block">ATEN&Ccedil;&Atilde;O: Nomes com no maximo 30 caracteres</span>
    </div>
    <div class="form-group col-md-4">
      <label for="periodo">Periodo</label>
      <select class="selectpicker" data-style="btn-primary" name="disciplinas['periodo']" required>
      <option value="<?php echo $disciplinas['periodo']; ?>" selected><?php echo $disciplinas['periodo']; ?></option>
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
      <option value=" <?php echo $disciplinas['situacao']; ?>" selected> <?php echo $disciplinas['situacao']; ?></option>
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
