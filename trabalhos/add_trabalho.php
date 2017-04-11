<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:05
 */

require_once('../functions.php');
add_trabalho();
disciplinas();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Novo trabalho para entregar</h2>
<form action="add_trabalho.php" method="post">
  <!-- area de campos do form -->
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="disciplina"> Disciplina</label>
      <select class="selectpicker" data-style="btn-primary" name="trabalhos['disciplina']" required>
        <?php if ($disciplinas) : ?>
        <?php foreach ($disciplinas as $row) : ?>
        <option value="<?php echo $row['disciplina']; ?>"><?php echo $row['disciplina']; ?></option>
        <?php endforeach; ?>
        <?php else : ?>
        <option> Nenhum registro encontrado. </option>
        <?php endif; ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="horario">Data de entrega </label>
      <input class="form-control" type="text" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" name="trabalhos['data']" required>
      <span class="help-block">ATENÇÃO: Use o formato xx/xx/xxxx</span>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="trabalhos/index.php" class="btn btn-default">Cancelar</a> </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
