<?php
/**
 * Created by PhpStorm.
 * User: Dominus
 * Date: 22/03/2017
 * Time: 14:34
 */

  require_once('../functions.php');
  if (isset($_GET['id'])){
      delete_hora($_GET['id']);
  } else {
      die("ERRO: ID não definido.");
  }
