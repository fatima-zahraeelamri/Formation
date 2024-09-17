<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Education - Vue Détail de Votre Compte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        /* Style pour la section user-info */
        /* Section User Info */
        section.user-info {
            background-image: url('../images/meetings-bg.jpg'); /* Nouvelle image de fond */
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 60px 0; /* Espacement autour du contenu */
            height: auto; /* Ajuste la hauteur automatiquement en fonction du contenu */
            display: flex;
            align-items: center; /* Centre le contenu verticalement */
            justify-content: center; /* Centre le contenu horizontalement */
            color: #fff; /* Couleur du texte */
        }

        section.user-info .container {
            background-color: #fff; /* Fond blanc pour le conteneur */
            border-radius: 20px; /* Coins arrondis */
            padding: 40px; /* Espacement interne */
            max-width: 800px; /* Largeur maximale pour centrer le contenu */
            margin: 0 auto; /* Centre le conteneur */
            text-align: left; /* Aligne le texte à gauche */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée légère pour plus de profondeur */
        }

        section.user-info h2 {
            text-transform: uppercase;
            color: #a12c2f; /* Couleur du texte */
            border-bottom: 1px solid #eee; /* Bordure en bas */
            margin-bottom: 30px; /* Espacement sous le titre */
            padding-bottom: 15px; /* Padding pour le titre */
            font-size: 22px; /* Taille de police pour le titre */
            font-weight: 700; /* Gras pour le titre */
        }

        section.user-info p {
            font-size: 16px; /* Taille de la police pour le contenu */
            color: #7a7a7a; /* Couleur du texte */
            padding: 15px; /* Padding pour le texte */
            border: 1px solid #ddd; /* Bordure des champs */
            border-radius: 20px; /* Coins arrondis */
            background-color: #f7f7f7; /* Fond des champs */
            margin-bottom: 15px; /* Espacement entre les paragraphes */
            line-height: 1.6; /* Hauteur de ligne pour une meilleure lisibilité */
        }

        section.user-info .error-message {
            color: #a12c2f; /* Couleur pour les messages d'erreur */
            border: 1px solid #a12c2f; /* Bordure pour les messages d'erreur */
            padding: 15px; /* Padding pour le message d'erreur */
            border-radius: 20px; /* Coins arrondis */
            background-color: #f7d6d5; /* Fond pour les messages d'erreur */
            font-size: 18px; /* Taille de police pour le message d'erreur */
            font-weight: bold; /* Met le texte en gras */
            margin-bottom: 20px; /* Espacement sous le message d'erreur */
        }

        section.user-info .footer {
            margin-top: 30px;
            padding: 10px;
            border-top: 1px solid #ddd; /* Bordure en haut */
            color: #1f272b; /* Couleur du texte */
            font-size: 14px; /* Taille de police pour le pied de page */
            text-align: center; /* Centre le texte */
        }
    </style>
</head>

<body>
    <!-- Header Area Start -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <a href="index.html" class="logo">MehdiFit</a>

                        <!-- Menu -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="meetings.html" class="active">Meetings</a></li>
                            <li><a href="index.html">Courses</a></li>
                            <li><a href="index.html#contact">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'><span>Menu</span></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- User Info Section -->
    <section class="user-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Vue Détail de Votre Compte</h2>
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);

                // Connexion à la base de données
                $servername = "localhost";
                $username = "root";
                $password = "12345";
                $dbname = "sport_training";

                // Crée une connexion
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Vérifie la connexion
                if ($conn->connect_error) {
                    die("La connexion a échoué: " . $conn->connect_error);
                }

                // Récupère les données de l'utilisateur
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];

                // Prépare la requête SQL pour obtenir les informations de l'utilisateur
                $sql = "SELECT horaire, domaine, formateur FROM utilisateurs WHERE nom = '$nom' AND prenom = '$prenom'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Récupère les données
                    $row = $result->fetch_assoc();
                    $horaire = $row['horaire'];
                    $domaine = $row['domaine'];
                    $formateur = $row['formateur'];

                    echo "<p><strong>Nom:</strong> " . htmlspecialchars($nom) . "</p>";
                    echo "<p><strong>Prénom:</strong> " . htmlspecialchars($prenom) . "</p>";
                    echo "<p><strong>Horaire:</strong> " . htmlspecialchars($horaire) . "</p>";
                    echo "<p><strong>Domaine:</strong> " . htmlspecialchars($domaine) . "</p>";
                    echo "<p><strong>Formateur:</strong> " . htmlspecialchars($formateur) . "</p>";
                } else {
                    echo "<p class='error-message'>Utilisateur non trouvé.</p>";
                }

                // Ferme la connexion
                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>MEHDIFIT. All Rights Reserved.</p>
    </div>
</section>


    <!-- Footer -->

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                    scrollTop: reqSectionPos
                }, 800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function () {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                        siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
        
    </script>
</body>

</html>
