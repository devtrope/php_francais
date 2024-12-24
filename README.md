# PHP Français

## Présentation du projet

Combien de fois vous êtes-vous dit que PHP, c'était bien, mais franchement, pourquoi est-ce que ce sont toujours les Anglais qui sont privilégiés ? Eh bien, je suis d'accord avec vous : il n'y a aucune raison que nous soyons obligés d'apprendre une langue étrangère pour pouvoir coder en PHP !

Ce projet est là pour réparer cette injustice ! L'idée est de **franciser toutes les fonctions PHP** pour enfin pouvoir comprendre ce que l'on code.

## Traduction anglaise

Nan je rigole, apprenez le français, la roue tourne les gars, je vous ferais **aucune traduction**.

![FRANCE!](https://hugelolcdn.com/i/532921.jpg "FRANCE")

## Comment travailler avec PHP Français ?

Excellente question, permettez-moi d'y répondre. Il vous suffit simplement d'ajouter cette ligne tout en haut de votre fichier PHP : 

```php 
    require 'php_francais.php';
```

Félicitations, vous pouvez désormais écrire du vrai bon code, et en plus vous le comprendrez !

## Exemple de script

### Incompréhensible

```php 
    public function validate(string $password): bool {
        $containsLowercase = preg_match('/[a-z]/', $password);
        $containsUppercase = preg_match('/[A-Z]/', $password);
        $containsNumber = preg_match('/[0-9]/', $password);
        $containsSpecialChars = preg_match('/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/', $password);
        $isLongEnough = strlen($password) >= 8;

        return $containsLowercase && $containsUppercase && $containsNumber && $containsSpecialChars && $isLongEnough;
    }
```

### Parfait

```php 
    public function valider(string $mot_de_passe): bool {
        $aUneMinuscule = cherche_motif('/[a-z]/', $mot_de_passe);
        $aUneMajuscule = cherche_motif('/[A-Z]/', $mot_de_passe);
        $aUnChiffre = cherche_motif('/[0-9]/', $mot_de_passe);
        $aUnCaractereSpecial = cherche_motif('/[`!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?~]/', $mot_de_passe);
        $estSuffisammentLong = longueur_chaine($mot_de_passe) >= 8;

        return $aUneMinuscule && $aUneMajuscule && $aUnChiffre && $aUnCaractereSpecial && $estSuffisammentLong;
    }
```