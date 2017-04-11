<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:05
 */

require_once('../functions.php');
add_horario();
disciplinas();
horas();
?>
<?php include(SISTEMA_TEMPLATE); ?>

<h2>Novo Horario de Aula</h2>
<form action="add_horario.php" method="post">
  <!-- area de campos do form -->
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="disciplina"> Disciplina </label>
      <select class="selectpicker" data-style="btn-primary" name="horarios['disciplina']">
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
      <select class="selectpicker" data-style="btn-primary" name="horarios['dia_semana']">
        <option value="Segunda-feira">segunda-feira</option>
        <option value="Terça-feira">terça-feira</option>
        <option value="quarta-feira">quarta-feira</option>
        <option value="Quinta-feira">quinta-feira</option>
        <option value="Sexta-feira">sexta-feira</option>
        <option value="Sábado">sábado</option>
        <option value="domingo">domingo</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="horario"> Horario </label>
      <select class="selectpicker" data-style="btn-primary" name="horarios['horario']">
        <?php if ($horas) : ?>
        <?php foreach ($horas as $row) : ?>
        <option value="<?php echo $row['horario']; ?>"><?php echo $row['horario']; ?></option>
        <?php endforeach; ?>
        <?php else : ?>
        <option>Nenhum registro encontrado.</option>
        <?php endif; ?>
      </select>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary"> Salvar </button>
      <a href="index.php" class="btn btn-default">Cancelar</a> </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
