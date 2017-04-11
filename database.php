<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 11:50
 */

mysqli_report(MYSQLI_REPORT_STRICT);
function open_database()
{
    try {
        $conn = new PDO(DB_INFO, DB_USER, DB_PASSWORD);
        return $conn;
    } catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn)
{
    try {
        $conn = null;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 * @param null $table
 * @param null $id
 * @return array|null
 */
function find($table = null, $id = null)
{

    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if (!empty($result))
            {
                $found = $result->fetch();
            }

        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            if (!empty($result))
            {
                $found = $result->fetchAll();
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 * @param $table
 * @return array|null
 */
function find_all($table)
{
    return find($table);
}

/**
 *  Insere um registro no BD
 * @param null $table
 * @param null $data
 */
function save($table = null, $data = null)
{
    $database = open_database();
    $columns = null;
    $values = null;
    //print_r($data);
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
    try {
        $database->query($sql);
        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $_SESSION['type'] = 'success';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 *  Atualiza um registro em uma tabela, por ID
 * @param null $table
 * @param int $id
 * @param null $data
 */
function update($table = null, $id = 0, $data = null)
{
    $database = open_database();
    $items = null;
    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }
    // remove a ultima virgula
    $items = rtrim($items, ',');
    $sql = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
    try {
        $database->query($sql);
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 *  Remove uma linha de uma tabela pelo ID do registro
 * @param null $table
 * @param null $id
 */
function remove( $table = null, $id = null ) {
    $database = open_database();

    try {
        if ($id) {
            $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result = $database->query($sql)) {
                $_SESSION['message'] = "Registro Removido com Sucesso.";
                $_SESSION['type'] = 'success';
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

function find_horario($dday = null)
{
    $database = open_database();

    $sql = "SELECT * FROM `trabalhos` where `data` = '$dday'";
    $result = $database->query($sql);

     if (!empty($result))
            {
                $found = $result->fetchAll();
            }

    close_database($database);
    return $found;
}

function horario_aula($disciplina)
{

    $database = open_database();
    $found = null;

    $sql = "SELECT * FROM `horarios` where `disciplina` = '$disciplina'";
    $result = $database->query($sql);

     if (!empty($result))
            {
                $found = $result->fetchAll();
            }

    close_database($database);
    return $found;
}