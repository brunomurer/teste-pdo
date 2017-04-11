<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 13:20
 */

require_once('config.php');
require_once(DBAPI);

$horarios = null;
$horario = null;

$disciplinas = null;
$disciplina = null;

$horas = null;
$hora = null;

$trabalhos = null;
$trabalho = null;

$horario_view = null;

$day = null;
$dday = null;

$alerta = null;


function index()
{
    global $day;
    global $dday;
    global $alerta;

// descobre a data atual
    $hoje = time();

// adiciona 3  dias

    $day = strtotime(date("Y/m/d", $hoje) . " +3 day");
    $dday = date("d/m/Y", $day);
    $alerta = find_horario($dday);

    return $alerta;
}

function horarios()
{
    global $horarios;
    $horarios = find_all('horarios');
}

function add_horario()
{
    if (!empty($_POST['horarios'])) {

        $horarios = $_POST['horarios'];

        save('horarios', $horarios);
        header('location: index.php');
    }
}

function edit_horario()
{

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['horarios'])) {
            $horarios = $_POST['horarios'];

            update('horarios', $id, $horarios);
            header('location: index.php');
        } else {
            global $horarios;
            $horarios = find('horarios', $id);
        }
    } else {
        header('location: index.php');
    }
}

function delete_horario($id = null)
{
    global $horario;
    $horario = remove('horarios', $id);
    header('location: index.php');
}

function disciplinas()
{
    global $disciplinas;
    $disciplinas = find_all('disciplinas');
}

function add_disciplina()
{

    if (!empty($_POST['disciplinas'])) {
        $disciplinas = $_POST['disciplinas'];

        save('disciplinas', $disciplinas);
        header('location: index.php');
    }
}

function edit_disciplina()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['disciplinas'])) {
            $disciplinas = $_POST['disciplinas'];
            update('disciplinas', $id, $disciplinas);
            header('location: index.php');
        } else {
            global $disciplinas;
            $disciplinas = find('disciplinas', $id);
        }
    } else {
        header('location: index.php');
    }
}

function view($id = null)
{
    global $disciplinas;
    $disciplinas = find('disciplinas', $id);
}

function delete_disciplina($id = null)
{
    global $disciplina;
    $disciplina = remove('disciplinas', $id);
    header('location: index.php');
}

function horas()
{
    global $horas;
    $horas = find_all('horas');
}

function add_hora()
{
    if (!empty($_POST['horas'])) {

        $horas = $_POST['horas'];

        save('horas', $horas);
        header('location: index.php');
    }
}

function edit_hora()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['horas'])) {
            $horas = $_POST['horas'];
            update('horas', $id, $horas);
            header('location: index.php');
        } else {
            global $horas;
            $horas = find('horas', $id);
        }
    } else {
        header('location: index.php');
    }
}

function delete_hora($id = null)
{
    global $hora;
    $hora = remove('horas', $id);
    header('location: index.php');
}

function trabalhos()
{
    global $trabalhos;
    $trabalhos = find_all('trabalhos');
}

function add_trabalho()
{
    if (!empty($_POST['trabalhos'])) {

        $trabalhos = $_POST['trabalhos'];
        save('trabalhos', $trabalhos);
        header('location: index.php');
    }
}

function edit_trabalho()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['trabalhos'])) {
            $trabalhos = $_POST['trabalhos'];

            update('trabalhos', $id, $trabalhos);
            header('location: index.php');
        } else {
            global $trabalhos;
            $trabalhos = find('trabalhos', $id);
        }
    } else {
        header('location: index.php');
    }
}

function view_trabalho($id = null)
{
    global $trabalhos;
    $trabalhos = find('trabalhos', $id);
}

function delete_trabalho($id = null)
{
    global $trabalho;
    $trabalho = remove('trabalhos', $id);
    header('location: index.php');
}

function view_horario($disciplina)
{
    global $horario;
    $horario = horario_aula($disciplina);

}