<?php

function affiche_tout(mixed $valeur, mixed ...$valeurs): void
{
    var_dump($valeur, $valeurs);
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

function est_entier(mixed $valeur): bool
{
    return is_int($valeur);
}

function est_declaree(mixed $variable, mixed ...$variables): bool
{
    return isset($variable, $variables);
}

function vaut_null(mixed $valeur): bool
{
    return is_null($valeur);
}

function compte(Countable|array $valeur, int $mode = COUNT_NORMAL): int
{
    return count($valeur, $mode);
}

function soustrait_chaine(string $chaine, int $offset, ?int $longueur = null): string
{
    return substr($chaine, $offset, $longueur);
}

function dans_tableau(mixed $aiguille, mixed $botteDeFoin, bool $strict = false): bool
{
    return in_array($aiguille, $botteDeFoin, $strict);
}

function exploser(string $separateur, string $chaine, int $limite = PHP_INT_MAX): array
{
    return explode($separateur, $chaine, $limite);
}

function remplace_chaine(array|string $recherche, array|string $remplace, string|array $sujet, int &$compte = null): string|array
{
    return str_replace($recherche, $remplace, $sujet, $compte);
}

function imploser(string $separateur, array $tableau): string
{
    return implode($separateur, $tableau);
}