<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:21
 */

include "crudIdee.php";

$Idee=new Idee();

$Idee->setId($_POST['id_to_edit']);
$Idee->setTitre($_POST['idee_title']);
$Idee->setDomaine($_POST['domaine_to_edit']);
$Idee->setDecription($_POST['description']);
$Idee->setDateAjout($_POST['dateAjout']);
$Idee->setPrix($_POST['prix_to_edit']);
$Idee->setPathImg("famma mochkel");//to fix
$Idee->setPathDoc("famma mochkel");

$crudIdee=new crudIdee();

$crudIdee->modifier($Idee);

//echo json_encode($Idee);
header('location: ../Idees.php');
?>
