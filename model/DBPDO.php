<?php

/**
 * @author Alvaro Cordero
 * @version 1.0
 * @since 16/01/2024
 * 
 * @Annotation Proyecto LoginLogoutMulticapaPOO - Clase DBPDO
 * 
 */
class DBPDO implements DB {

    /**
     * Un metodo static es aquel elemento que pertenecen a la clase y no a una instancia de la misma
     * Este metodo realizara una conexion con la base de datos y ejecutara la consulta pasada como parametro
     */
    public static function ejecutaConsulta($sentenciaSQL) {

        try {
            // Instanciamos un objeto PDO y establecemos la conexión
            $miDB = new PDO(DSN, USERNAME, PASSWORD);

            // Prepara la consulta
            $oConsulta = $miDB->prepare($sentenciaSQL);

            // Ejecuta la consulta
            $oConsulta->execute();

            // Devuelvo el resultado de la consulta
            return $oConsulta;

            // Código que se ejecuta si hay algún error
        } catch (PDOException $excepcion) {

            //Mostramos un mensaje de error
            echo 'Error de ejecucion.';

            //Finzalizamos la ejecucion del script
            exit();
            
        } finally {

            // Cierra la conexión con la BD
            unset($miDB);
        }
    }
}
