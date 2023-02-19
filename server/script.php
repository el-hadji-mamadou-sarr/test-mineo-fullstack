<?php
/* Déclaration des entétes de requétes  nécessaires pour avoir accés aux requétes*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

/* On récupére la valeur contenu dans le corps de la requéte et le transformer en entier */
$nombre = $_POST["nombre"];
$hauteur = intval($nombre);
$pyramide = "";
$etage = 1;

/* Fonction pour afficher la base en fonction de l'étage
par exemple si base = 4 affiche => X X X X 
*/
function base($etage, $hauteur)
{

        $base = "";
        $diff = $hauteur - $etage;
        $marge = "";
        $espace = "&nbsp" . "&nbsp" . "&nbsp";

        /* Pour chaque étage on calcul la marge à gauche pour décaler les éléments*/
        for ($i = 0; $i < $diff; $i++) {
                $marge = $marge . $espace;
        }

        /* Puis on ajoute la marge à la base*/
        $base = $base . $marge;
        for ($i = 0; $i < $etage; $i++) {
                $base = $base . "❌" . "&nbsp";
        }
        return $base;
}

/* Si l'utilisateur saisi 0 on lui renvoie un pyramide vide */
if ($nombre = 0) {
        echo $pyramide;

        /* Tant qu'on a pas atteint la hauteur désirée on continue à afficher la base */
} else {
        while ($etage <= $hauteur) {
                $pyramide = $pyramide . base($etage, $hauteur) . "<br>";
                $etage++;
        }

        echo $pyramide;
}
