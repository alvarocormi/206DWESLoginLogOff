<?php

/**
 * @author Carlos García Cachón, mejorado por Alvaro Cordero
 * @version 1.0
 * @since 10/01/2024
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPublico'
 * 
 */

// Comprobamos si la cookie esta declarada
if (!isset($_COOKIE['idioma'])) {
    
    // En caso negativo la creamos y ponemos el valor por defecto
    setcookie("idioma", "es", time() + (30 * 24 * 60 * 60), "/");
}


// Si el usuario pulsa el botón 'Login', mando al usuario a la página del login
if (isset($_REQUEST['login'])) {

    // Asigno a la pagina en curso la pagina de login
    $_SESSION['paginaEnCurso'] = 'login';

    // Redirecciono al index de la APP
    header('Location: index.php');

    //Finalizamos la ejecucion del script
    exit;
}

//Comprobamos si pulsa algun boton de idioma
if (isset($_REQUEST['idioma'])) {
    
    //Cambiamos la cookie al idioma seleccionado y refrescamos la pagina
    $idioma = $_REQUEST['idioma'];
    
    //Creamos la cookie
    setcookie("idioma", $idioma, time() + (30 * 24 * 60 * 60), "/");
    
    //Redireccionamos al usuario a la misma pagina
    header('Location: ' . $_SERVER['PHP_SELF']);
    
    //Finalizamos la ejecucion del script
    exit;
}


// Cargo la vista de 'inicioPublico'
require_once $aVistas['layout'];
