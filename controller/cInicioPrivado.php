<?php

/**
 * @author Carlos García Cachón, mejorado por Alvaro Cordero
 * @version 1.0
 * @since 15/01/2024
 * @copyright Todos los derechos reservados a Carlos García
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPrivado' 
 * 
 */

//Comprobamos que el usuario esta guardado en la session
if (empty($_SESSION['usuario'])) {
    
    // Redirige a la página de inicio
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    
    //Importamos la pagina en curso
    require_once $aControladores[$_SESSION['paginaEnCurso']];
    
    //Finalizamos la ejecucion del script
    exit();
}


//Si el usuario pulsa el botón 'Cerrar Sesion', mando al usuario al inicio Publico
if (isset($_REQUEST['cerrarSesion'])) {

    // Elimino la sesión
    session_unset();

    // Redirecciono al index de la APP
    header('Location: index.php');

    //Finalizo la ejecucion del script
    exit;
}

//Si el usuario pulsa el botón 'Detalle', mando al usuario al index de DWES
if (isset($_REQUEST['detalle'])) {

    // Asigno a la pagina en curso la pagina de WIP (Work in Progress)
    $_SESSION['paginaEnCurso'] = 'detalle';

    // Redirecciono al index de la APP
    header('Location: index.php');

    //Finalizo la ejecucion del script
    exit;
}

/*
 * Guardamos los datos de la sesion en variables
 * Todos estos datos los cogemos del objeto usuario
 * Y recuperamos esa informacion
 */

// Recupero y almaceno la descripción del usuario actual
$descripcionUsuario = $_SESSION['usuario']->getDescUsuario(); 

// Recupero y almaceno el número de conexiones del usuario actual
$numeroConexionesUsuario = $_SESSION['usuario']->getNumAcceso(); 

// Recupero y almaceno la fecha y hora de conexión anterior del usuario actual
$fechaHoraUltimaConexionAnterior = $_SESSION['usuario']->getFechaHoraUltimaConexionAnterior(); 


//Si la cookie seleccionada es la espapola
if ($_COOKIE['idioma'] == 'es') {
    
    //Guaradamos en una variable el mensaje de bienvenida
    $bienvenida = "Bienvenido, {$descripcionUsuario}";

    //Guardamos en una variable el numero de conexiones
    $numConexiones = "Esta es tu <strong>{$numeroConexionesUsuario}</strong> vez conectándote";

    //Si el numero de exiones es 1
    if ($numeroConexionesUsuario == 1) {

        //Guardamos un mensaje indicandole que es la primera vez que se conecta el usuario
        $ultimaConexion = "Esta es la primera vez que te conectas";
    } else {

        //Si se ha conectado mas veces le mostramos otro mensaje
        $ultimaConexion = "Te conectaste por última vez <strong>{$fechaHoraUltimaConexionAnterior}.</strong>";
    }
}

//Si la cookie esta en el idioma ingles
if ($_COOKIE['idioma'] == 'en') {
    
    //Guaradamos en una variable el mensaje de bienvenida
    $bienvenida = "Welcome, {$descripcionUsuario}";

    //Guardamos en una variable el numero de conexiones
    $numConexiones = "This is your <strong>{$numeroConexionesUsuario}</strong> time logging in.";

    //Si el numero de exiones es 1
    if ($numeroConexionesUsuario == 1) {

        //Guardamos un mensaje indicandole que es la primera vez que se conecta el usuario
        $ultimaConexion = "This is the first time you connect";
        
    } else {

        //Si se ha conectado mas veces le mostramos otro mensaje
        $ultimaConexion = "ou last logged in on <strong>{$fechaHoraUltimaConexionAnterior}.</strong>";
    }
}


// Cargo la vista de 'inicioPrivado'
require_once $aVistas['layout'];
