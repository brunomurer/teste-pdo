<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 11:51
 */

require_once ('functions.php');

include(HEADER_TEMPLATE);

$db = open_database();
index();

?>
<?php if ($alerta > 0) :?> 
<?php foreach ($alerta as $row) :?> 

<div class="alert alert-warning" role="alert">
<h3 class=text-center"> Voce tem trabalho para entregar dia <?php echo $row['data']; ?></h3>
</div>
<?php endforeach; ?>
<?php endif; ?>

<h2>Escolha uma das opções</h2>
<hr/>
<?php if ($db) : ?>
    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2"> <a href="horarios" class="btn btn-default">
                <div class="row">
                    <div class="col-xs-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
                    <div class="col-xs-12 text-center">
                        <p>Horarios</p>
                    </div>
                </div>
            </a> </div>
        <div class="col-xs-6 col-sm-3 col-md-2"> <a href="trabalhos" class="btn btn-default">
                <div class="row">
                    <div class="col-xs-12 text-center"> <i class="fa fa-user fa-5x"></i> </div>
                    <div class="col-xs-12 text-center">
                        <p>Trabalhos</p>
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
