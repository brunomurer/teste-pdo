<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 13:38
 */

require_once('../functions.php');
disciplinas();
?>
<?php include(HEADER_TEMPLATE); ?>

<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Horarios de aula</h2>
    </div>
 <div class="col-sm-6 text-right h2"><a class="btn btn-primary" href="add_horario.php"> <i class="fa fa-plus"></i> Novo horario de aula </a> <a class="btn btn-default" href="index.php"> <i class="fa fa-refresh"></i> Atualizar</a> </div>
  </div>
</header>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span                aria-hidden="true">&times;</span></button>
  <?php echo $_SESSION['message']; ?> </div>
<?php clear_messages(); ?>
<?php endif; ?>
<hr>
<div class="row">
  <?php if ($disciplinas) : ?>
  <?php foreach ($disciplinas as $row) : ?>
  <div class="col-xs-6 col-sm-3 col-md-2">
    <div class="thumbnail">
      <div class="row">
        <div class="col-xs-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
        <div class="col-xs-12 text-center">
          <p><?php echo $row['disciplina']; ?></p>
          <p><?php echo $row['periodo']; ?> &deg; Periodo</p>
          <p class="actions"> <a href="view_horario.php?disciplina=<?php echo $row['disciplina']; ?>" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> Visualizar</a></p>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <?php else : ?>
  <p>Nenhum registro encontrado.</p>
  <?php endif; ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>
