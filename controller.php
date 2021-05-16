<?php

if (!empty($_GET['rubrique'])) {
    $rubrique = $_GET['rubrique'];
} else {
    $rubrique = "";
}

switch ($rubrique) {

    case 'infos':
        include 'infos.php';
        break;
    case 'actor':
        include 'actor.php';
        break;
    case 'food':
        include 'food.php';
        break;
    case 'search':
        include 'search.php';
        break;
    default:
        include 'default.php';
}
