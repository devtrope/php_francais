<?php

function fusionner_tableaux(array ...$tableaux): array
{
    return array_merge(...$tableaux);
}

function dans_tableau(mixed $aiguille, mixed $botte_de_foin, bool $strict = false): bool
{
    return in_array($aiguille, $botte_de_foin, $strict);
}

function compte(Countable|array $valeur, int $mode = COUNT_NORMAL): int
{
    return count($valeur, $mode);
}