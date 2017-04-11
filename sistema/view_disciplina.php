<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:30
 */

require_once('../functions.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $disciplinas['id']; ?></h2>
<hr>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<h2>  Disciplina</h2>
 <h3><?php echo $disciplinas['disciplina']; ?></h3>
 <h2> Periodo:</h2>
<h3>  <?php echo $disciplinas['periodo']; ?> </h3>
<h2>  Situa&ccedil;&atilde;o:</h2>
<h3>  <?php echo $disciplinas['situacao']; ?></h3>

<div id="actions" class="row">
  <div class="col-md-12"> <a href="edit.php?id=<?php echo $disciplinas['id']; ?>" class="btn btn-primary">Editar</a> <a href="index.php" class="btn btn-default">Voltar</a> </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>
