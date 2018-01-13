<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:21
 */

include "crudIdee.php";
$Idee=new Idee();
$Idee->setTitre($_POST['titre']);
$Idee->setDomaine($_POST['domaine']);
$Idee->setDecription($_POST['description']);
$Idee->setDateAjout($_POST['dateAjout']);
$Idee->setPrix($_POST['prix']);
$Idee->setPathImg($_POST['pathImg']);
$Idee->setPathDoc($_POST['pathDoc']);
$Idee->setEtat($_POST['etat']);
$crudIdee=new crudIdee();

$crudIdee->ajouter($Idee);



?>
