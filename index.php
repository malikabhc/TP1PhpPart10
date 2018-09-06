<?php 
// Include sert à lié le fichier contenant tout le code PHP controllerForm.php au fichier index.php - Il agit comme si tout le code était insérer au début de cette page.
include 'controllerForm.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <title>TP1 Partie 10</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Formulaire de candidature</h1>
        <?php // Affiche les résultats si aucune erreur n'est comptabilisé dans le tableau $formError
        if (isset($_POST['submit']) && (count($formError) == 0)) { ?>
            <p><?= $lastName ?></p>
            <p><?= $firstName ?></p>
            <p><?= $dateOfBirth ?></p>
            <p><?= $countryOfBirth ?></p>
            <p><?= $nationality ?></p>
            <p><?= $address ?></p>
            <p><?= $mail ?></p>
            <p><?= $phone ?></p>
            <p><?= $degree ?></p>
            <p><?= $numberPE ?></p>
            <p><?= $badge ?></p>
            <p><?= $codeAca ?></p>
            <p><?= $super ?></p>
            <p><?= $hacks ?></p>
            <p><?= $exp ?></p>
        <?php // Sinon affiche le formulaire
        } else { ?>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Nom" value="<?= // Garde en mémoire la saisie des champs cela évite de devoir retaper tout le formulaire s'il y a une erreur sur un seul champ
                    isset($lastname) ? $lastname : '' ?>"/>
                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control form-control-lg" name="firstname" placeholder="Prénom" value="<?= isset($firstname) ? $firstname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                    <label for="dateOfBirth">Date de naissance</label>
                    <input type="date" class="form-control form-control-lg" name="dateOfBirth" placeholder="Date de naissance" value="<?= isset($dateOfBirth) ? $dateOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['dateOfBirth']) ? $formError['dateOfBirth'] : ''; ?></p>
                    <label for="placeOfBirth">Pays de naissance</label>
                    <input type="text" class="form-control form-control-lg" name="placeOfBirth" placeholder="Pays de naissance" value="<?= isset($placeOfBirth) ? $placeOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['placeOfBirth']) ? $formError['placeOfBirth'] : ''; ?></p>
                    <label for="nationality">Nationalité</label>
                    <input type="text" class="form-control form-control-lg" name="nationality" placeholder="Nationalité" value="<?= isset($nationality) ? $nationality : '' ?>" />
                    <p class="text-danger"><?= isset($formError['nationality']) ? $formError['nationality'] : ''; ?></p>
                    <label for="address">Adresse</label>
                    <textarea class="form-control form-control-lg" name="address"><?= isset($address) ? $address : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="<?= isset($email) ? $email : '' ?>" />
                    <p class="text-danger"><?= isset($formError['email']) ? $formError['email'] : ''; ?></p>
                    <label for="numberPhone">Numéro de téléphone</label>
                    <input type="number" class="form-control form-control-lg" name="numberPhone" placeholder="Téléphone" value="<?= isset($numberPhone) ? $numberPhone : '' ?>" />
                    <p class="text-danger"><?= isset($formError['numberPhone']) ? $formError['numberPhone'] : ''; ?></p>
                    <label for="degree">Diplôme</label>
                    <select class="form-control form-control-lg" name="degree">
                        <option selected disabled>Veuillez sélectionner votre niveau de diplôme</option>
                        <option>Sans</option>
                        <option>Bac</option>
                        <option>Bac +2</option>
                        <option>Bac +3 ou supérieur</option>
                    </select>
                    <label for="poleEmploiNumber">Numéro Pôle Emploi</label>
                    <input class="form-control form-control-lg" name="poleEmploiNumber" placeholder="Numéro Pôle Emploi" value="<?= isset($poleEmploiNumber) ? $poleEmploiNumber : '' ?>" />
                    <p class="text-danger"><?= isset($formError['poleEmploiNumber']) ? $formError['poleEmploiNumber'] : ''; ?></p>
                    <label for="badgeNumber">Nombre de badge</label>
                    <input type="number" class="form-control form-control-lg" name="badgeNumber" placeholder="Nombre de badge" value="<?= isset($badgeNumber) ? $badgeNumber : '' ?>"/>
                    <p class="text-danger"><?= isset($formError['badgeNumber']) ? $formError['badgeNumber'] : ''; ?></p>
                    <label for="codecademyLink">Lien Codecademy</label>
                    <input class="form-control form-control-lg" name="codecademyLink" placeholder="Lien Codecademy" value="<?= isset($codecademyLink) ? $codecademyLink : '' ?>" />
                    <p class="text-danger"><?= isset($formError['codecademyLink']) ? $formError['codecademyLink'] : ''; ?></p>
                    <label for="superhero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea class="form-control form-control-lg" name="superhero"><?= isset($superhero) ? $superhero : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['superhero']) ? $formError['superhero'] : ''; ?></p>
                    <label for="hacks"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea class="form-control form-control-lg" name="hacks"><?= isset($hacks) ? $hacks : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['hacks']) ? $formError['hacks'] : ''; ?></p>
                    <label for="experience" class="mt-3">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control form-control-lg" name="experience"><?= isset($experience) ? $experience : '' ?></textarea>
                    <p class="text-danger"><?= isset($formError['experience']) ? $formError['experience'] : ''; ?></p>
                    <input type="submit" class="form-control form-control-lg mt-3" name="submit" id="submit" value="Validez votre candidature !"/>
                </div>
            </form>
            <?php } ?>
    </div>
</body>
</html>
