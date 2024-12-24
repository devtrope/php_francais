<?php

function longueur_chaine(string $chaine): int
{
    return strlen($chaine);
}

function imploser(string $separateur, array $tableau): string
{
    return implode($separateur, $tableau);
}

function exploser(string $separateur, string $chaine, int $limite = PHP_INT_MAX): array
{
    return explode($separateur, $chaine, $limite);
}

function remplace_chaine(array|string $recherche, array|string $remplace, string|array $sujet, int &$compte = null): string|array
{
    return str_replace($recherche, $remplace, $sujet, $compte);
}

function soustrait_chaine(string $chaine, int $offset, ?int $longueur = null): string
{
    return substr($chaine, $offset, $longueur);
}

function binaire_en_hexadecimal(string $chaine): string
{
    return bin2hex($chaine);
}

function hexadecimal_en_binaire(string $chaine): string|false
{
    return hex2bin($chaine);
}

function convertir_entites_html(string $chaine, int $drapeaux = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encodage = null): string
{
    return html_entity_decode($chaine, $drapeaux, $encodage);
}

function convertir_en_entites_html(string $chaine, int $drapeaux = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encodage = null, bool $double_encodage = true): string
{
    return htmlentities($chaine, $drapeaux, $encodage, $double_encodage);
}

function premier_caractere_majuscule(string $chaine): string
{
    return lcfirst($chaine);
}

function imprime(string $expression): int
{
    return print($expression);
}

function imprime_r(mixed $valeur, bool $retour = false): string|true
{
    return print_r($valeur, $retour);
}

function definir_localisation(int $categorie, string $localisation, string ...$reste): string|false
{
    //On ne laisse pas le choix ici
    return setlocale(LC_ALL, 'fr_FR');
}

function chaine_contient(string $botte_de_foin, string $aiguille): bool
{
    return str_contains($botte_de_foin, $aiguille);
}

function supprime_caracteres(string $chaine, string $caracteres = " \n\r\t\v\x00"): string
{
    return trim($chaine, $caracteres);
}