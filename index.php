<?php
//Déclaration des variables regex
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexNumber = '/^[0-9]$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexEmail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
?>
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
            <?php if (isset($_POST['submit'])) { ?>
                <p><?php //Vérification de la regex concernée pour la case lastname
                if (preg_match($regexName, $_POST['lastname'])) { ?> 
                        Nom : <?= $_POST['lastname']; ?>
                    <?php } else { // Message d'erreur qui s'affiche si le champ n'est pas complété ou que le texte entré ne respecte pas la regex
                        echo 'Veuillez indiquer votre nom. '; } ?></p>
                <p><?php if (preg_match($regexName, $_POST['firstname'])) { ?> 
                        Prénom : <?= $_POST['firstname']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre prénom. '; } ?></p>
                <p><?php if (preg_match($regexDate, $_POST['dateOfBirth'])) { ?>
                        Date de naissance : <?= $_POST['dateOfBirth']; ?>
                    <?php } else {
                        echo 'Incorrect : veuillez indiquer votre date de naissance. '; } ?></p>
                <p><?php if(preg_match($regexText, $_POST['placeOfBirth'])) { ?>
                        Pays de naissance : <?= $_POST['placeOfBirth']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre pays de naissance. '; } ?></p>
                <p><?php if (preg_match($regexText, $_POST['nationality'])) { ?>
                        Nationalité : <?= $_POST['nationality']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre nationalité. '; } ?></p>
                <p><?php if (preg_match($regexText, $_POST['adress'])) { ?>
                        Adresse : <?= $_POST['adress']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre adresse. '; } ?></p>
                <p><?php if (preg_match($regexEmail, $_POST['email'])) { ?>
                        Email : <?= $_POST['email']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer un email correct. '; } ?></p>
                <p><?php if (preg_match($regexPhoneNumber, $_POST['numberPhone'])) { ?>
                        Numéro de téléphone : <?= $_POST['numberPhone']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer un numéro de téléphone correct. '; } ?></p>
                <p><?php if (!empty($_POST['degree'])) { ?>
                        Diplôme : <?= $_POST['degree']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre niveau de diplôme. '; } ?></p>
                <p><?php if (preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])) { ?>
                       Numéro Pôle Emploi : <?= $_POST['poleEmploiNumber']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre numéro Pôle Emploi. '; } ?></p>
                <p><?php if (preg_match($regexNumber, $_POST['badgeNumber'])) { ?>
                        Nombre de badge : <?= $_POST['badgeNumber']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre nombre de badge. '; } ?></p>
                <p><?php if (preg_match($regexText, $_POST['codecademyLink'])) { ?>
                        Lien Codecademy : <?= $_POST['codecademyLink']; ?>
                    <?php } else {
                        echo 'Veuillez indiquer votre lien Codecademy. '; } ?></p>
                <p><?php if (!empty($_POST['superhero'])) { ?>
                        Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? <?= $_POST['superhero']; ?>
                    <?php } else {
                        echo 'Veuillez répondre à la question "Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?" '; } ?></p>
                <p><?php if (!empty($_POST['hacks'])) { ?>
                        Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : <?= $_POST['hacks']; ?>
                    <?php } else {
                        echo 'Veuillez répondre à la question "Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)" '; } ?></p>
                <p><?php if (!empty($_POST['numberPhone'])) { ?>
                        Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?"<?= $_POST['numberPhone']; ?>
                    <?php } else {
                        echo 'Veuillez répondre à la question "Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?"'; } ?></p>
            <?php } else { //Le formulaire ne s'affiche pas quand le formulaire est envoyé pour afficher les données entrées ou les messages d'erreurs ?>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Nom" />
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control form-control-lg" name="firstname" placeholder="Prénom" />
                    <label for="dateOfBirth">Date de naissance</label>
                    <input type="date" class="form-control form-control-lg" name="dateOfBirth" placeholder="Date de naissance" />
                    <label for="placeOfBirth">Pays de naissance</label>
                    <input type="text" class="form-control form-control-lg" name="placeOfBirth" placeholder="Pays de naissance"/>
                    <label for="nationality">Nationalité</label>
                    <input type="text" class="form-control form-control-lg" name="nationality" placeholder="Nationalité" />
                    <label for="adress">Adresse</label>
                    <textarea class="form-control form-control-lg" name="adress"></textarea>
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" />
                    <label for="numberPhone">Numéro de téléphone</label>
                    <input type="number" class="form-control form-control-lg" name="numberPhone" placeholder="Téléphone" />
                    <label for="degree">Diplôme</label>
                    <select class="form-control form-control-lg" name="degree">
                        <option selected disabled>Veuillez sélectionner votre niveau de diplôme</option>
                        <option>Sans</option>
                        <option>Bac</option>
                        <option>Bac +2</option>
                        <option>Bac +3 ou supérieur</option>
                    </select>
                    <label for="poleEmploiNumber">Numéro Pôle Emploi</label>
                    <input class="form-control form-control-lg" name="poleEmploiNumber" placeholder="Numéro Pôle Emploi"/>
                    <label for="badgeNumber">Nombre de badge</label>
                    <input type="number" class="form-control form-control-lg" name="badgeNumber" placeholder="Nombre de badge"/>
                    <label for="codecademyLink">Lien Codecademy</label>
                    <input class="form-control form-control-lg" name="codecademyLink" placeholder="Lien Codecademy"/>
                    <label for="superhero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                    <textarea class="form-control form-control-lg" name="superhero"></textarea>
                    <label for="hacks"> Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                    <textarea class="form-control form-control-lg" name="hacks"></textarea>
                    <label for="experience" class="mt-3">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                    <textarea class="form-control form-control-lg" name="experience"></textarea>
                    <input type="submit" class="form-control form-control-lg mt-3" name="submit" id="submit" value="Validez votre candidature !"/>
                </div>
            </form>
        <?php } ?>
    </div>
</body>
</html>
