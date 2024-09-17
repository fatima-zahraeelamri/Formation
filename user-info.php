<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Vue Détail de Votre Compte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

</head>

<body>
    <!-- Header Area Start -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- Logo -->
                        <a href="index.html" class="logo">
                        <img src="assets/images/logo.jpg" alt="Logo" class="logo-image">
                      </a>

                        <!-- Menu -->
                        <ul class="nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="meetings.html" class="active">MonEspace</a></li>
                            <li><a href="explorez.html">Explorez</a></li>
                            <li><a href="index.html#contact">Contact</a></li>
                        </ul>
                        <a class='menu-trigger'><span>Menu</span></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <style>
        
section.user-info {
    background-image: url('/edu-meeting/edu-meeting/assets/images/meetings-page-bg.jpg');
    background-position: center center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 60px 0; /* Espacement autour du contenu */
  height: 100vh; /* Ajuste la hauteur automatiquement en fonction du contenu */
  padding-top: 180px; /* Ajustez cette valeur pour déplacer le formulaire plus bas */
  
  display: flex;
  align-items: center; /* Centre le contenu verticalement */
  justify-content: center; /* Centre le contenu horizontalement */
  color: #fff; /* Couleur du texte */
  padding-top: 180px; /* Ajustez cette valeur pour déplacer le formulaire plus bas */


}
html, body {
  height: 100%; /* Hauteur à 100% pour que l'arrière-plan couvre toute la page */
  margin: 0;
  padding: 0;
  background-color: transparent; /* Assure que le fond est transparent */
}

/* Appliquer l'arrière-plan sur tout le document */
body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('/edu-meeting/edu-meeting/assets/images/meetings-bg.jpg');
  background-size: cover;
  background-attachment: fixed;
  z-index: -1; /* Place l'arrière-plan derrière tout le contenu */
  opacity: 1; /* Assure la pleine opacité */
}

section.user-info .container {
  background-color: rgba(255, 255, 255, 255); /* Fond légèrement transparent pour le conteneur */
  border-radius: 20px; /* Coins arrondis */
  padding: 40px; /* Espacement interne */
  max-width: 600px; /* Largeur maximale pour centrer le contenu */
  margin: 0 auto; /* Centre le conteneur */
  text-align: left; /* Aligne le texte à gauche */
  border: 2px solid #ddd !important; /* Bordure fine et légère */

}

section.user-info h2 {
  text-transform: uppercase;
  color: #000000; /* Couleur du texte */
  border-bottom: 1px solid #eee; /* Bordure en bas */
  margin-bottom: 30px; /* Espacement sous le titre */
  padding-bottom: 15px; /* Padding pour le titre */
  font-size: 22px; /* Taille de police pour le titre */
  font-weight: 700; /* Gras pour le titre */
}

section.user-info .info-container {
  display: flex;
  flex-direction: column;
}

section.user-info .info-item {
  display: flex;
  margin-bottom: 20px; /* Espacement entre les champs */
}

section.user-info .info-item .info-label {
  width: 200px; /* Largeur fixe pour les labels */
  font-weight: bold;
  color: #a12c2f; /* Couleur du label */
  border-radius: 20px;
  padding: 10px; /* Padding autour du label */
  background-color: #f7f7f7; /* Fond des labels */
  font-size: 14px;
}

section.user-info .info-item .info-value {
  flex: 1;
  background-color: #DCDCDC; /* Fond des valeurs */
  border: 1px solid #ddd; /* Bordure des valeurs */
  border-radius: 20px; /* Coins arrondis */
  padding: 10px; /* Padding autour des valeurs */
  color: #000; /* Couleur du texte des valeurs */
  line-height: 1.6; /* Hauteur de ligne pour une meilleure lisibilité */
  font-size: 14px;
}

section.user-info .error-message {
  color: #7a7a7a; /* Couleur pour les messages d'erreur */
  border: 1px solid #f7f7f7; /* Bordure pour les messages d'erreur */
  padding: 15px; /* Padding pour le message d'erreur */
  border-radius: 10px; /* Coins arrondis */
  background-color: #f7f7f7; /* Fond pour les messages d'erreur */
  font-size: 14px; /* Taille de police pour le message d'erreur */
  margin-bottom: 20px; /* Espacement sous le message d'erreur */
}
.back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #a12c2f; /* Couleur de fond du bouton */
            color: #fff; /* Couleur du texte */
            border: none;
            border-radius: 20px; /* Coins arrondis */
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            float: right;

            
        }

.back-button:hover {
            background-color: #a12c2f; /* Couleur de fond du bouton au survol */
        }

/* Style pour le titre avec logo */
.title-with-logo {
  display: flex; /* Utilise flex pour aligner l'image et le texte sur la même ligne */
  align-items: center; /* Centre l'image et le texte verticalement */
  font-size: 24px; /* Ajuste la taille du texte du titre */
}

/* Style pour l'image du logo */
.logo-icon {
  height: 100px; /* Ajuste la hauteur du logo */
  margin-right: 10px; /* Espace entre l'image et le texte */
}

    </style>
<body>
<div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.facebook.com/profile.php?id=61551499461915&mibextid=ZbWKwL" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- User Info Section -->
   <section class="user-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="title-with-logo">
                <img src="assets/images/logo.jpg" alt="Logo" class="logo-icon">
                Union nationale marocaine de la formation sportive professionnelle
            </h2>
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
                $code = $_POST['code']; // Assure-toi que 'code' est défini ici

                // Prépare la requête SQL pour obtenir les informations de l'utilisateur
                $sql = "SELECT horaire, domaine, formateur FROM utilisateurs WHERE nom = '$nom' AND code = '$code'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Récupère les données
                    $row = $result->fetch_assoc();
                    $horaire = isset($row['horaire']) ? $row['horaire'] : 'N/A';
                    $domaine = isset($row['domaine']) ? $row['domaine'] : 'N/A';
                    $formateur = isset($row['formateur']) ? $row['formateur'] : 'N/A';
                ?>
                    <div class="info-container">
                        <div class="info-item">
                            <div class="info-label">Nom</div>
                            <div class="info-value"><?php echo htmlspecialchars($nom); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Prénom</div>
                            <div class="info-value"><?php echo htmlspecialchars($prenom); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Horaire</div>
                            <div class="info-value"><?php echo htmlspecialchars($horaire); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Domaine</div>
                            <div class="info-value"><?php echo htmlspecialchars($domaine); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Formateur</div>
                            <div class="info-value"><?php echo htmlspecialchars($formateur); ?></div>
                        </div>
                    </div>
                <?php
                } else {
                    echo "<p class='error-message'>Les informations fournies sont incorrectes. Veuillez réessayer.</p>";
                    echo "<a href='meetings.html' class='back-button'>Retour </a>";
                }
                // Ferme la connexion
                $conn->close();
                ?>
            </div>
        </div>
    </div>
    
</section>
<div class="footer">
      <p>MEHDIFIT. All Rights Reserved.</p>
    </div>


    <!-- Footer -->
   
</body>

</html>
