<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 13:38
 */
require_once '../config.php';
require_once DBAPI;

include(SISTEMA_TEMPLATE);
$db = open_database();

?>

<h1>Configuração</h1>
<hr/>
<?php if ($db) : ?>
<div class="row">
  <div class="col-xs-6 col-sm-3 col-md-2"> <a href="disciplinas.php" class="btn btn-default">
    <div class="row">
      <div class="col-xs-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
      <div class="col-xs-12 text-center">
        <p>Disciplinas</p>
      </div>
    </div>
    </a> </div>
  <div class="col-xs-6 col-sm-3 col-md-2"> <a href="horas.php" class="btn btn-default">
    <div class="row">
      <div class="col-xs-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
      <div class="col-xs-12 text-center">
        <p>Horarios</p>
      </div>
    </div>
    </a> </div>
</div>
<?php else : ?>
<div class="alert alert-danger" role="alert">
  <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
</div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE); ?>
