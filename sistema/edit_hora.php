<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:09
 */

require_once('../functions.php');
edit_hora();
?>
<?php include(SISTEMA_TEMPLATE); ?>

<h2>Alterar Horario</h2>
<form action="edit_hora.php?id=<?php echo $hora['id']; ?>" method="post">
  <hr/>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="horas">Horario</label>
      <input type="text" class="form-control" pattern="[0-9]{2}:[0-9]{2} [0-9]{2}:[0-9]{2}" name="horas['horario']"  value="<?php echo $horas['horario']; ?>" required>
      <span class="help-block">ATENÇÃO: Use o formato xx:xx xx:xx</span>
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="horas.php" class="btn btn-default">Cancelar</a> </div>
  </div>
</form>
<?php include(FOOTER_TEMPLATE); ?>
