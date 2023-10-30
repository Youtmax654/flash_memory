<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Power Of Memory</title>
    <link rel="shortcut icon" href="assets/images/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <header class="header">
        <p>The Power Of Memory</p>
        <label for="ch" id="lab"></label>
        <input type="checkbox" id="ch">
        <nav class="header-right"> <!-- Navbar -->
            <ul>
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="memory.html">JEU</a></li>
                <li><a href="scores.html">SCORES</a></li>
                <li><a href="contact.html">NOUS CONTACTER</a></li>
                <li><a href="login.html">CONNEXION</a></li>
                <li><a href="register.html">INSCRIPTION</a></li>
                <li><a href="myAccount.html">MON COMPTE</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="homeContact"></div>
        <div class="pages_banner"> <!-- Div pour la bannière des pages -->
            <h1>NOUS CONTACTER</h1>
        </div>
        <div class="contact_infos">
            <div class="info_block">
                <i class="fa-solid fa-mobile-screen mobile_phone"></i>
                <p>06 74 56 14 16</p>
            </div>
            <div class="info_block">
                <i class="fa-regular fa-envelope envelope"></i>
                <p>Oui@ceciestunmail.com</p>
            </div>
            <div class="info_block">
                <i class="fa-solid fa-location-dot location_pin"></i>
                <p>Paris</p>
            </div>
        </div>
        <div class="contact_form">
            <form action="#">
                <div class="contact_row1">
                    <label for="name"></label>
                    <input type="text" id="name" placeholder="Nom">
                    <label for="email"></label>
                    <input type="email" id="email" placeholder="Email">
                </div>
                <label for="subject"></label>
                <input type="text" id="subject" placeholder="Sujet">
                <div class="contact_">
                    <textarea placeholder="Message" cols="30" rows="10"></textarea>
                </div>
                <div class="contact_submit">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
        <a href="#homeContact" class="returnHome"></a>
    </main>
    <footer>
        <!-- Divisons du footer en deux parites pour pouvoir mettre en colonne le footer avec la ligne du copyright-->
        <div class="footer-body"> <!--section pour la parite principale du footer-->
            <!-- Séparation du footer-body en deux parties -->
            <div class="Informations"> <!-- Création de la partie informations -->
                <div class="Titre">
                    <p><strong>Informations</strong></p>
                </div> <!-- classe titre qui permettra d'isoler le titre pour le modifier seul -->
                <p>Lorem ipsum, dolor sit amet consectetur.</p>

                <div class="Tel"> <!-- classe pour contacter par téléphone -->
                    <p><strong>Tel : </strong>06 74 56 14 16</p>
                </div>

                <div class="Email"> <!-- classe pour contacter par email -->
                    <p><strong>Email : </strong>Oui@ceciestunmail.com</p>
                </div>

                <div class="Location"> <!-- classe pour savoir la localisation de l'entreprise -->
                    <p><strong>Location : </strong>Paris</p>
                </div>

                <div class="Images"> <!-- classe pour insérer les logos de réseaux sociaux -->
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>

            <div class="PowerOfMemory"> <!-- classe pour la partie liens-->
                <div class="Titre">
                    <p><Strong>Power Of Memory</Strong></p>
                </div> <!-- classe pour isoler le titre pour le modifier seul -->
                <ul class="Liste"> <!-- classe pour faire la liste des liens -->
                    <li><a href="memory.html">Jouer !</a></li>
                    <li><a href="scores.html">Les scores</a></li>
                    <li><a href="contact.html">Nous contacter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom"> <!-- section pour insérer la ligne de copyright -->
            <span> Copyright © 2023 Tous droits reservés </span>
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/1f0991f3fc.js" crossorigin="anonymous"></script>
    <!-- librairie fontAwesome -->
</body>