<?php
// Vérifiez le paramètre "page" dans l'URL
$page = isset($_GET['page']) ? $_GET['page'] : '';

// Liste des pages autorisées
$PagesAutorise = ['Accueil', 'a-propos', 'Pilote', 'Top-Board ,F1-garage , Course , Classement '];

// Vérifie si la page est autorisée
if (in_array($page, $PagesAutorise)) {
    // Incluez le fichier correspondant depuis le dossier "include"
    include_once('include/' . $page . '.php');
} else {
    // Page par défaut si la page demandée n'est pas autorisée
    include_once('index.php');
}
?>
