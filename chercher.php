<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:21
 */

include "crudIdee.php";

$crudIdee=new crudIdee();
$result=new Idee();
$result=$crudIdee->rechercherParId((int)$_POST['id_to_find']);

echo json_encode($result);

?>