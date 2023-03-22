<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private array $_livres;


    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }

    public function getnom()
    {
        return $this->_nom;
    }
    public function setnom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getprenom()
    {
        return $this->_prenom;
    }
    public function setprenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getInfos()
    {
        echo "Livres de " .$this ->_prenom. " " .$this->_nom. "<br>";
        foreach ($this->_livres as $livre) {
            echo $livre;
        }

        // return "Livres de" . $this->_prenom . $this->_nom . $this->__toString() . "(" . $this->__toString() . ") :" . $this->__toString() . "pages /" . $this->__toString() . "$";
    }
    public function __toString()
    {
        return $this->_prenom . " " . $this->_nom;
        // return $this->gettitre(). " " .$this ->getnbPages(). " " .$this->getanneeParution(). " " .$this->getprix();
    }

    public function addLivre(Livre $livre)
    {
        $this->_livres[] = $livre;
    }
}
