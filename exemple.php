<?php

require 'php_francais.php';

//Exemple 1 : Manipulation de chaîne
$texte_original = "Bonjour monde";
$texte_modifie = remplace_chaine("monde", "PHP Français", $texte_original);
crie("Texte modifié : " . $texte_modifie);

//Exemple 2 : Manipulation de tableau
$tableau = [1, 2, 3, 4];
$taille = compte($tableau);
crie("Taille du tableau : " . $taille);

$tableau_fusionne = fusionner_tableaux($tableau, [5, 6, 7]);
affiche_tout($tableau_fusionne);