<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:21
 */

include "crudIdee.php";

$crudIdee=new crudIdee();

$crudIdee->supprimer((int)$_POST['id_to_delete']);

header('location: ../Idees.php');

?>