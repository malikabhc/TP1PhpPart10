<?php
//Déclaration des regex
//Déclaration regex numéro de téléphone
$regexPhoneNumber = '/^[0-9]{10}$/';
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
//Déclaration regex date
$regexDate = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
//Déclaration regex adresse
$regexAddress = '/^[A-z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
//Déclaration regex nombre et lettre
$regexNumberLetter = '/^[0-9A-z]+$/';
//déclaration d'un tableau d'erreur
$formError = array();
//Si LastName existe, on la passe au test regex, si elle passe la stocker dans $lastname sinon c'est vide
if (isset($_POST['lastname'])) {
    //déclaration de la variable lastname avec le htmlspecialchars qui fait en sorte que si du code est entrer dans le champ il n'est pas interpréter mais modifier
    $lastname = htmlspecialchars($_POST['lastname']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastname)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['lastname'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($lastname)) {
        //stocker dans le tableau le rapport d'erreur
        $formError['lastname'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['firstname'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    if (!preg_match($regexName, $firstname)) {
        $formError['firstname'] = 'Saisie invalide.';
    }
    if (empty($firstname)) {
        $formError['firstname'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['dateOfBirth'])) {
    $dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
    if (!preg_match($regexDate, $dateOfBirth)) {
        $formError['dateOfBirth'] = 'Saisie invalide.';
    }
    if (empty($dateOfBirth)) {
        $formError['dateOfBirth'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['placeOfBirth'])) {
    $placeOfBirth = htmlspecialchars($_POST['placeOfBirth']);
    if (!preg_match($regexName, $placeOfBirth)) {
        $formError['placeOfBirth'] = 'Saisie invalide.';
    }
    if (empty($placeOfBirth)) {
        $formError['placeOfBirth'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (!preg_match($regexName, $nationality)) {
        $formError['nationality'] = 'Saisie invalide.';
    }
    if (empty($nationality)) {
        $formError['nationality'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexAddress, $address)) {
        $formError['address'] = 'Saisie invalide.';
    }
    if (empty($address)) {
        $formError['address'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['email'])) {
    $email = htmlspecialchars($_POST['email']);
    //le filtre permet de verifier l'email
    if (!FILTER_VAR($email, FILTER_VALIDATE_EMAIL)) {
        $formError['email'] = 'Saisie invalide.';
    }
    if (empty($email)) {
        $formError['email'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['numberPhone'])) {
    $numberPhone = htmlspecialchars($_POST['numberPhone']);
    if (!preg_match($regexPhoneNumber, $numberPhone)) {
        $formError['numberPhone'] = 'Saisie invalide.';
    }
    if (empty($numberPhone)) {
        $formError['numberPhone'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['degree'])) {
    $degree = htmlspecialchars($_POST['degree']);
    if (!preg_match($regexNumberLetter, $degree)) {
        $formError['degree'] = 'Saisie invalide.';
    }
    if (empty($degree)) {
        $formError['degree'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['poleEmploiNumber'])) {
    $poleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
    if (!preg_match($regexNumberLetter, $poleEmploiNumber)) {
        $formError['poleEmploiNumber'] = 'Saisie invalide.';
    }
    if (empty($poleEmploiNumber)) {
        $formError['poleEmploiNumber'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['badgeNumber'])) {
    $badgeNumber = htmlspecialchars($_POST['badgeNumber']);
    if (!preg_match($regexNumberLetter, $badgeNumber)) {
        $formError['badgeNumber'] = 'Saisie invalide.';
    }
    if (empty($badgeNumber)) {
        $formError['badgeNumber'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['codecademyLink'])) {
    $codecademyLink = htmlspecialchars($_POST['codecademyLink']);
    if (!FILTER_VAR($codecademyLink, FILTER_VALIDATE_DOMAIN)) {
        $formError['codecademyLink'] = 'Saisie invalide.';
    }
    if (empty($codecademyLink)) {
        $formError['codecademyLink'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['superhero'])) {
    $superhero = htmlspecialchars($_POST['superhero']);
    if (!preg_match($regexText, $superhero)) {
        $formError['superhero'] = 'Saisie invalide.';
    }
    if (empty($superhero)) {
        $formError['superhero'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['hacks'])) {
    $hacks = htmlspecialchars($_POST['hacks']);
    if (!preg_match($regexText, $hacks)) {
        $formError['hacks'] = 'Saisie invalide.';
    }
    if (empty($hacks)) {
        $formError['hacks'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['experience'])) {
    $experience = htmlspecialchars($_POST['experience']);
    if (!preg_match($regexText, $experience)) {
        $formError['experience'] = 'Saisie invalide.';
    }
    if (empty($experience)) {
        $formError['experience'] = 'Champ obligatoire.';
    }
}
?>