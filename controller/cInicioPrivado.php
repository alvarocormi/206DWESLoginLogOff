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

/**
 * Almacenamos los datos de la sesion mediante la variable GLOBAL $_SESSION
 * Almacenamos el usuario, el numero de conexiones y la ultima conexion
 */
$usuario = $_SESSION['usuario'];
$numConexiones = $_SESSION['numConexiones'];
$ultimaConexion = $_SESSION['ultimaConexion'];

//Guaradamos en una variable el mensaje de bienvenida
$bienvenida = "Bienvenido, {$usuario}";

//Guardamos en una variable el numero de conexiones
$numConexiones = "Esta es tu <strong>{$numConexiones}</strong> vez conectándote";

//Si el numero de exiones es 1
if ($_SESSION['numConexiones'] == 1) {

    //Guardamos un mensaje indicandole que es la primera vez que se conecta el usuario
    $ultimaConexion = "Esta es la primera vez que te conectas";
} else {

    //Si se ha conectado mas veces le mostramos otro mensaje
    $ultimaConexion = "Te conectaste por última vez <strong>{$ultimaConexion}.</strong>";
}

// Cargo la vista de 'inicioPrivado'
require_once $aVistas['layout']; 