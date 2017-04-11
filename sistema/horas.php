<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 13:38
 */

require_once('../functions.php');
horas();
?>
<?php include(SISTEMA_TEMPLATE); ?>

<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Horarios de Aula</h2>
    </div>
    <div class="col-sm-6 text-right h2"> <a class="btn btn-primary" href="add_hora.php"><i class="fa fa-plus"></i> Novo horario de aula </a> <a class="btn btn-default" href="horas.php"><i class="fa fa-refresh"></i> Atualizar</a> <a href="<?php echo BASEURL; ?>sistema/index.php" class="btn btn-default">Cancelar</a></div>
  </div>
</header>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
  <?php echo $_SESSION['message']; ?> </div>
<?php clear_messages(); ?>
<?php endif; ?>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th class="h3-responsive">Horario</th>
      <th class="h3-responsive">Op&ccedil;&otilde;es</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($horas) : ?>
    <?php foreach ($horas as $row) : ?>
    <tr>
      <td class="h3-responsive"><?php echo $row['horario']; ?></td>
      <td class="actions"><a href="edit_hora.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"> <i class="fa fa-pencil"></i> Editar</a> <a href="delete_hora.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Voce tem certeza?')" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Excluir </a></td>
    </tr>
    <?php endforeach; ?>
    <?php else : ?>
    <tr>
      <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php include(FOOTER_TEMPLATE); ?>
