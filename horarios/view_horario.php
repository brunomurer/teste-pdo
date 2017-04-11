<?php

require_once('../functions.php');

?>
<?php include(HEADER_TEMPLATE); ?>
<?php

$disciplina = $_GET['disciplina'];

view_horario($disciplina);

?>

<table class="table table-hover">
    <thead>
    <tr>
        <th class="h3-responsive">Dia da Semana</th>
        <th class="h3-responsive">Horario</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($horario as $value)    { ?>
    <tr>
        <td class="h3-responsive"><?php echo $value['dia_semana']; ?></td>
        <td class="h3-responsive"><?php echo $value['horario']; ?></td>
        <?php } ?>
    </tr>
    </tbody>
</table>
<?php include(FOOTER_TEMPLATE); ?>
