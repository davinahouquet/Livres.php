<h1>Livres</h1>
<p></p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et
leurs auteurs respectifs.<br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un
auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.</p>
<h2>Résultats</h2>

<?php

// __toString : une méthode magique très pratique : elle s’exécute 
// lorsqu’on essaie d’afficher un objet tout entier ! (exemple : echo $poste ;).
//  Vous pourrez alors lui demander  de  renvoyer  une  chaîne  de  caractères 
//  complexe,  par  exemple  un paragraphe répertoriant tous les attributs de 
//  l’objet, son état, etc.

function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

$auteur1 = new Auteur("King", "Stephen");
$victor = new Auteur("Victor", "Hugo");

$livre5 = new Livre("Les misérables", 1862, 2598, 15, $victor);
$livre6 = new Livre("Notre-Dame de Paris", 1831, 940, 20, $victor);

$l1 = new Livre("Ca", 1138, 1986, 20, $auteur1);
$l2 = new Livre("Simetierre", 374, 1983, 15, $auteur1);
$l3 = new Livre("Le Fléau", 823, 1978, 14, $auteur1);
$l4 = new Livre("Shining", 447, 1977, 16, $auteur1);

echo $auteur1->getInfos();
echo $victor->getInfos();
?>