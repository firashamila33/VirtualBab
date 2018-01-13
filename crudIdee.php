<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 17:07
 */

include "Idee.php";
include "configuration.php";
class crudIdee
{
    function ajouter($Idee)
    {
        $c = new configuration();
        $conn = $c->getConnexion();
        $user_id=2;
        $titre = $Idee->getTitre();
        $domaine=$Idee->getDomaine();
        $description=$Idee->getDecription();
        $dateAjout=$Idee->getDateAjout();
        $prix=$Idee->getPrix();
        $pathDoc=$Idee->getPathDoc();
        $pathImg=$Idee->getPathImg();
        $etat="NON";
        $req="INSERT INTO bab.idee(`user_id`, `titre`, `domaine`, `description`, `date_ajout`, `prix`, `path_doc`, `path_img`, `etat`) VALUES (?,?,?,?,?,?,?,?,?)";
        $q = $conn->prepare($req);
        $q->execute(array($user_id,$titre,$domaine,$description,$dateAjout,$prix,$pathDoc,$pathImg,$etat));

    }

    function afficher()
    {
        $c = new configuration();
        $conn = $c->getConnexion();
        $req = "select * from bab.idee";
        $res = $conn->query($req);
        return $res;
    }

    function modifier($Idee)
    {
        $titre = $Idee->getTitre();
        $domaine=$Idee->getDomaine();
        $description=$Idee->getDecription();
        //$dateAjout=$Idee->getDateAjout();
        $prix=$Idee->getPrix();
        $pathDoc=$Idee->getPathDoc();
        $pathImg=$Idee->getPathImg();
        $etat=$Idee->getEtat();
        $id=$Idee->getId();

        $c = new configuration();
        $conn = $c->getConnexion();

        $req = "update bab.idee set titre=?,domaine=?,description=? ,prix=?,path_doc=?,path_img=?,etat=? where id=?";
        $q = $conn->prepare($req);

        $q->execute(array($titre,$domaine,$description,$prix,$pathDoc,$pathImg,$etat,$id));
    }

    function rechercher($ref)
    {
        $c = new configuration();
        $conn = $c->getConnexion();

        $req = "select * from bab.idee where titre LIKE %".$ref."% or domaine LIKE %".$ref."%";
        $res = $conn->query($req);
        return $res;
    }

    function rechercherParId($id){
        $c = new configuration();
        $conn = $c->getConnexion();
        $i=null;
        $req = "select * from bab.idee where id=$id ";
        $res = $conn->query($req);
        while ($row = $res->fetch(PDO::FETCH_OBJ)) {
            //var_dump($row);
            $i=new Idee();
            $i=$row;
        }

        return $i;
    }

    function supprimer($id){
        $c = new configuration();
        $conn = $c->getConnexion();

        $sql = "DELETE FROM bab.idee WHERE id=$id";
        var_dump($sql);
        $conn->exec($sql);
    }

}