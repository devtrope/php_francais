<?php

function cherche_motif(string $modele, string $sujet, array &$correspondances = null, int $drapeaux = 0, int $offset = 0): int|false
{
    return preg_match($modele, $sujet, $correspondances, $drapeaux, $offset);
}