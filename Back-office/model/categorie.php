<?php
class categorie{

    private $id_categ;
    private $nom_catg;

    /**
     * @param $nom_catg
     */
    public function __construct($nom_catg)
    {
        $this->nom_catg = $nom_catg;
    }
    /**
     * @return mixed
     */
    public function getIdCatg()
    {
        return $this->id_categ;
    }

    /**
     * @param mixed $id_categ
     */
    public function setIdCatg($id_categ)
    {
        $this->id_categ = $id_categ;
    }

    /**
     * @return mixed
     */
    public function getNomCatg()
    {
        return $this->nom_catg;
    }

    /**
     * @param mixed $nom_catg
     */
    public function setNomCatg($nom_catg)
    {
        $this->nom_catg = $nom_catg;
    }


}