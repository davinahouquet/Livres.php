<?php
// Classe et attributs 

class Livre
{
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private int $_prix;
    private Auteur $_auteur;

    // Construct

    public function __construct(string $titre, int $nbPages, int $anneeParution, int $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_nbPages = $nbPages;
        $this->_anneeParution = $anneeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
    }
    // Getters et setters

    public function getTitre()
    {
        return $this->_titre;
    }
    public function settitre(string $titre)
    {
        $this->_titre = $titre;
    }

    public function getNbPages()
    {
        return $this->_nbPages;
    }
    public function setNbPages(int $NbPages)
    {
        $this->_nbPages = $NbPages;
    }

    public function getanneeParution()
    {
        return $this->_anneeParution;
    }
    public function setanneeParution(int $anneeParution)
    {
        $this->_anneeParution = $anneeParution;
    }

    public function getprix()
    {
        return $this->_prix;
    }
    public function setprix(int $prix)
    {
        $this->_prix = $prix;
    }

    public function getInfos()
    {
    }
    public function __toString()
    {
        return $this->gettitre() . " (" . $this->getanneeParution() . ") : " . $this->getNbPages() . " pages /" . $this->getprix() . " €<br>";
    }

    /**
     * Get the value of _auteur
     */
    public function get_auteur()
    {
        return $this->_auteur;
    }

    /**
     * Set the value of _auteur
     *
     * @return  self
     */
    public function set_auteur($_auteur)
    {
        $this->_auteur = $_auteur;

        return $this;
    }
}
