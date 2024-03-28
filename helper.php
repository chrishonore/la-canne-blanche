<?php
function getPageTitle($page) {
    $titles = [
        'home' => 'LCB - Accueil',
        'dashboard' => 'LCB - Tableau de Bord',
        'login' => 'LCB - Connexion'
    ];

    return isset($titles[$page]) ? $titles[$page] : 'LCB - Page Inconnue';
}

