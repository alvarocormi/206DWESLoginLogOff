<?php
/**
 * @author Carlos García Cachón, mejorado por Alvaro Cordero
 * @version 1.0
 * @since 10/01/2024
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Parte de 'cInicioPublico'
 * 
 */

// Si el usuario pulsa el botón 'Login', mando al usuario a la página del login
if(isset($_REQUEST['login'])){
    
    // Asigno a la pagina en curso la pagina de login
    $_SESSION['paginaEnCurso'] = 'login';
    
    // Redirecciono al index de la APP
    header('Location: index.php'); 
    
    //Finalizamos la ejecucion del script
    exit;
}

//Si el usuario pulsa el botón 'Salir', mando al usuario al index de DWES
if(isset($_REQUEST['salir'])){ 
    
    //Redirigimos al usuario al index principal de DWES
    header('Location: ../206DWESProyectoDWES/indexProyectoDWES.html'); 
    
    //Finalizamos la ejecucion del script
    exit;
}

// Cargo la vista de 'inicioPublico'
require_once $aVistas['layout']; 