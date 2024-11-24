<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="view/assets/portfolio/fav.jpg" type="image/x-icon">
    <title>Le portfolio de Jean-Paul</title>

    <!--css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="view\css\style.css">
    <link rel="stylesheet" href="view\css\galerie.css">
    <link rel="stylesheet" href="view\css\lightbox.min.css">


    <!--css-->

    <!--meta SEO-->
    <meta name="description" content="Le portfolio de Jean Paul">
    <meta name="keyword" content="développeur web, développeur front-end, développeur back-end, développeur full-stack, concepteur d'applications web, portfolio">
    <!--meta SEO-->


    
</head>
<body class="light-mode">
<?php
// Obtenir l'URI actuelle
$current_route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<style>
    body.light-mode {
      background-color: #ffffff;
      color: #000000;
    }

    body.dark-mode {
      background-color: #121212;
      color: #ffffff;
    }

    /* Styles spécifiques pour le menu latéral */
    .offcanvas.light-mode {
      background-color: #ffffff;
      color: #000000;
    }

    .offcanvas.dark-mode {
      background-color: #343a40;
      color: #ffffff;
    }
</style>


<nav class="navbar bg-body-tertiary shadow sticky-top d-flex" id="mainNavbar">
    <div class="container">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <h2 class="text-center mb-4">Mon portefolio</h2>
        </div>
            <div class="d-flex align-items-center">
                <span class="me-2">Light</span>
                <div class="form-check form-switch">
                    <input
                    class="form-check-input"
                    type="checkbox"
                    role="switch"
                    id="themeSwitch"
                    >
                    <label class="form-check-label" for="themeSwitch"></label>
                </div>
                <span class="ms-2">Dark</span>
            </div>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Mon portefolio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li><a href="index.php?page=home" class="<?= ($current_route == '/home' || $current_route == '/') ? 'active' : '' ?>">
                        <i class="fas fa-home"></i> Accueil
                    </a></li>
                    <li><a href="index.php?page=propos" class="<?= ($current_route == '/propos') ? 'active' : '' ?>">
                        <i class="fas fa-book-open"></i> A propos
                    </a></li>
                    <li><a href="index.php?page=galerie" class="<?= ($current_route == '/galerie') ? 'active' : '' ?>">
                        <i class="fas fa-camera"></i> Galerie
                    </a></li>
                    <li><a href="index.php?page=contact" class="<?= ($current_route == '/contact') ? 'active' : '' ?>">
                        <i class="far fa-address-card"></i> Contact
                    </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    // Récupérer les éléments nécessaires
    const themeSwitch = document.getElementById('themeSwitch');
    const body = document.body;
    const navbar = document.getElementById('mainNavbar');
    const offcanvas = document.querySelector('.offcanvas');

    // Fonction pour basculer le mode
    function setTheme(mode) {
      if (mode === 'dark') {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        navbar.classList.remove('bg-body-tertiary');
        navbar.classList.add('bg-dark', 'navbar-dark');
        offcanvas.classList.remove('light-mode');
        offcanvas.classList.add('dark-mode');
        themeSwitch.checked = true;  // Coche le switch pour le mode sombre
      } else {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        navbar.classList.remove('bg-dark', 'navbar-dark');
        navbar.classList.add('bg-body-tertiary');
        offcanvas.classList.remove('dark-mode');
        offcanvas.classList.add('light-mode');
        themeSwitch.checked = false;  // Décoche le switch pour le mode clair
      }
    }

    // Charger le thème depuis localStorage ou définir le mode par défaut
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
      setTheme(savedTheme);
    } else {
      // Par défaut, définir le mode clair
      setTheme('light');
    }

    // Écouter les changements du bouton pour mettre à jour le mode
    themeSwitch.addEventListener('change', () => {
      if (themeSwitch.checked) {
        setTheme('dark');
        localStorage.setItem('theme', 'dark'); // Sauvegarder le mode sombre
      } else {
        setTheme('light');
        localStorage.setItem('theme', 'light'); // Sauvegarder le mode clair
      }
    });
  </script>
