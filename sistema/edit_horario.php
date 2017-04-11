<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:09
 */

require_once('../functions.php');
edit_horario();
disciplinas();

?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar Horario de aula</h2>
<form action="edit_horario.php?id=<?php echo $horarios['id']; ?>" method="post">
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="disciplina"> Disciplina </label>
      <select class="selectpicker" data-style="btn-primary" name="horarios['disciplina']">
        <option value="<?php echo $horarios['disciplina']; ?>" selected><?php echo $horarios['disciplina']; ?></option>
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
      <label for="dia_semana"> Dia da semana </label>
      <select class="selectpicker" data-style="btn-primary" name="horarios['dia_semana']"  value="<?php echo $horarios['dia_semana']; ?>">
        <option value="segunda-feira">segunda-feira</option>
        <option value="terça-feira">terça-feira</option>
        <option value="quarta-feira">quarta-feira</option>
        <option value="quinta-feira">quinta-feira</option>
        <option value="sexta-feira">sexta-feira</option>
        <option value="sábado">sábado</option>
        <option value="domingo">domingo</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="horario"> Horario </label>
      <select class="selectpicker" data-style="btn-primary" name="horarios['horario']" >
        <option value="<?php echo $horarios['horario']; ?>" selected><?php echo $horarios['horario']; ?></option>
        <?php if ($horarios) : ?>
        <?php foreach ($horarios as $row) : ?>
        <option value="<?php echo $row['horario']; ?>" selected><?php echo $row['horario']; ?></option>
        <?php endforeach; ?>
        <?php else : ?>
        <option value="">Nenhum registro encontrado.</option>
        <?php endif; ?>
      </select>
    </div>
  </div>
  <div class="row"> </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary"> Salvar </button>
      <a href="index.php" class="btn btn-default">Cancelar</a> </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
