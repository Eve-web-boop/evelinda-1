<?php

//header
include_once "paginas/includes/header.php";

// Conteúdo das páginas



$paginas = isset($_GET['pg']);
if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;

    
        default:
            # code...
            break;
    }
} else {
    include_once "paginas/inicial.php";
}



//footer
include_once "paginas/includes/footer.php";
