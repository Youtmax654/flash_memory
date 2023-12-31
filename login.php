<?php 
require 'utils/common.php';

// Vérification si l'utilisateur est déjà connecté en vérifiant la présence de la variable de session 'userId', si oui -> redirection 
if (isset($_SESSION['userId'])) { 
    header("Location: index.php");
}
require SITE_ROOT . 'utils/userConnexion.php';

// Vérification si des données de connexion ont été soumises via un formulaire
if(isset($_POST['email_login'])){
     //traitement les données de connexion soumises avec la fonction 'ConnexionUser'
    $MessageConnexion = ConnexionUser($_POST['email_login'], $_POST['password_login']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php require SITE_ROOT. 'partials/head.php'; ?>
<body>
    <?php require SITE_ROOT. 'partials/header.php'; ?>
    <main>
        <div id="homeConnect"></div>
        <div class="pages_banner"> <!-- Div pour la bannière des pages -->
            <h1>CONNEXION</h1>
        </div>
        <?php if(isset($_POST['email_login'])): ?>
                    <p class="errorMessage"><?= $MessageConnexion; ?></p>
        <?php endif ?>
        <div class="login_form"> <!-- Div pour le formulaire de connexion-->
            <form action="#" method="post">
                <label for="email_login"></label>
                <input type="email" id="email_login" name="email_login" placeholder="Email">
                <label for="password_login"></label>
                <div class="passwordShow">
                    <input type="password" id="password_login" name="password_login" placeholder="Mot de passe">
                    <i class="fa-solid fa-eye showPassword"></i>
                </div>
                
                <input type="submit" value="Connexion">
            </form>
        </div>
        <a href="#homeConnect" class="returnHome"></a>
    </main>
    <?php require SITE_ROOT. 'partials/footer.php';?>
</body>
</html>