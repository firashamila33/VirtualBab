<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:21
 */

include "crudIdee.php";

$Idee=new Idee();

$Idee->setId($_POST['id_to_delete']);
$crudIdee=new crudIdee();
$crudIdee->supprimer($Idee);

echo json_encode($_POST['id']);

?>
