<?php
require "controller\header.php";
// require "view/navbar.php";

// header('Location: view\home.php');
$url='';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
    case '':
        // Charger la page d'accueil
        require 'view/home.php';
        break;
    case 'home':
        // Charger la page d'accueil
        require 'view/home.php';
        break;
    case 'contact':
        // Charger la page de contact
        require 'view/contact.php';
        break;
    case 'galerie':
        // Charger la galerie
        require 'view/galerie.php';
        break;
    case 'propos':
        // Charger la page � propos
        require 'view/propos.php';
        break;
    default:
        // Page non trouv�e
        http_response_code(404);
        // echo "Page non trouv�e";
        break;
}
require "controller\\footer.php";