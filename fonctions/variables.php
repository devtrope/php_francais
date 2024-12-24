<?php

function detruire(mixed $valeur, mixed ...$valeurs): void
{
    unset($valeur, $valeurs);
}

function retourne_type(mixed $valeur): string
{
    return gettype($valeur);
}

function peut_etre_appele(mixed $valeur, bool $seulement_syntaxe = false, string &$nom_appelable = null): bool
{
    return is_callable($valeur, $seulement_syntaxe, $nom_appelable);
}

function est_vide(mixed $valeur): bool
{
    return empty($valeur);
}

function valeur_nombre_a_virgule(mixed $valeur): float
{
    return floatval($valeur);
}

function valeur_booleenne(mixed $valeur): bool
{
    return boolval($valeur);
}

function vaut_null(mixed $valeur): bool
{
    return is_null($valeur);
}

function est_objet(mixed $valeur): bool
{
    return is_object($valeur);
}

function est_declaree(mixed $variable, mixed ...$variables): bool
{
    return isset($variable, $variables);
}

function est_entier(mixed $valeur): bool
{
    return is_int($valeur);
}

function affiche_tout(mixed $valeur, mixed ...$valeurs): void
{
    var_dump($valeur, ...$valeurs);
}

function crie(string $expression): void
{
    echo $expression;
}

function est_chaine(mixed $valeur): bool
{
    return is_string($valeur);
}

function est_booleen(mixed $valeur): bool
{
    return is_bool($valeur);
}

function est_tableau(mixed $valeur): bool
{
    return is_array($valeur);
}