<?php
/**
 * Created by PhpStorm.
 * User: yacine farhat
 * Date: 11/01/2018
 * Time: 16:35
 */

class Idee
{
    private $id;
    private $userId;
    private $titre;
    private $domaine;
    private $decription;
    private $dateAjout;
    private $prix;
    private $pathDoc;
    private $pathImg;
    private $etat;

    /**
     * Idee constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * @return mixed
     */
    public function getDecription()
    {
        return $this->decription;
    }

    /**
     * @param mixed $decription
     */
    public function setDecription($decription)
    {
        $this->decription = $decription;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * @param mixed $dateAjout
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPathDoc()
    {
        return $this->pathDoc;
    }

    /**
     * @param mixed $pathDoc
     */
    public function setPathDoc($pathDoc)
    {
        $this->pathDoc = $pathDoc;
    }

    /**
     * @return mixed
     */
    public function getPathImg()
    {
        return $this->pathImg;
    }

    /**
     * @param mixed $pathImg
     */
    public function setPathImg($pathImg)
    {
        $this->pathImg = $pathImg;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
}