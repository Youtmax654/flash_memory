<?php 
// Insertion du chemin de la page actuelle dans la variable "currentPage"
$currentPage = $_SERVER['PHP_SELF'];

// Mise à jour de la dernière connexion de l'utilisateur dans la base de données (si connecté)
if(isset($_SESSION["userId"])){
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('UPDATE `users` SET `usersLastConnexion`= NOW() WHERE usersId = :id');
    $pdoStatement->execute([
        ":id" => $_SESSION["userId"],
    ]);
}
?>

<!-- En-tête de la page avec navigation -->
<header class="<?= $currentPage == "/flash_memory/index.php" ? 'header_index' : 'header' ?>">
    <p>The Power Of Memory</p>
    <label for="ch" id="lab"></label>
    <input type="checkbox" id="ch">
    <nav class="header-right">
        <ul>
            <li><a href="<?= PROJECT_FOLDER ?>index.php" class="<?= PROJECT_FOLDER . "index.php" == $currentPage ? "current" : NULL; ?>">ACCUEIL</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>games/index.php" class="<?= PROJECT_FOLDER . "games/index.php" == $currentPage ? "current" : NULL; ?>">JEU</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>games/scores.php" class="<?= PROJECT_FOLDER . "games/scores.php" == $currentPage ? "current" : NULL; ?>">SCORES</a></li>
            <li><a href="<?= PROJECT_FOLDER ?>contact.php" class="<?= PROJECT_FOLDER . "contact.php" == $currentPage ? "current" : NULL; ?>">NOUS CONTACTER</a></li>
            
            <?php if (!isset($_SESSION['userId'])) : ?>
                <!-- Si l'utilisateur n'est pas connecté, afficher des liens de connexion et d'inscription -->
                <li><a href="<?= PROJECT_FOLDER ?>login.php" class="<?=  PROJECT_FOLDER . "login.php" == $currentPage ? "current" : NULL; ?>">CONNEXION</a></li>
                <li><a href="<?= PROJECT_FOLDER ?>register.php" class="<?=  PROJECT_FOLDER . "register.php" == $currentPage ? "current" : NULL; ?>">INSCRIPTION</a></li>
            <?php else : ?>
                <!-- Si l'utilisateur est connecté, afficher des liens pour le jeu, le compte de l'utilisateur et la déconnexion -->
                <li><a href="<?= PROJECT_FOLDER ?>myAccount.php" class="<?=  PROJECT_FOLDER . "myAccount.php" == $currentPage ? "current" : NULL; ?>"><?= strtoupper($_SESSION["userName"]) ?></a></li>
                <li><a href="<?= PROJECT_FOLDER ?>disconnect.php" onclick="return confirm('Vous allez être déconnecté')">SE DECONNECTER</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
