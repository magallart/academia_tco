<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Admin extends Modelo
{
    /*
        · Este método nos sirve contar los cursos creados en la aplicación
    */
    function cursosTotales()
    {
        $consulta = "select count(*) from cursos";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }
    
    /*
        · Este método nos sirve contar los usuarios registrados en la aplicación
    */
    function alumnosTotales()
    {
        $consulta = "select count(*) from usuarios where nivel = 1";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }

    /*
        · Este método nos sirve contar los cursos terminados por los alumnos
    */
    function cursosFinalizados()
    {
        $consulta = "select sum(finalizado) from curso_usuario";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }

    /*
        · Este método nos sirve contar los tenas totales terminados por los alumnos
    */
    function temasFinalizados()
    {
        $consulta = "select sum(temasTerminados) from curso_usuario";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }

    /*
        · Este método nos sirve contar los suscritos a la newsletter
    */
    function usuariosNewsletter()
    {
        $consulta = "select count(*) from newsletter";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }

    /*
        · Este método nos sirve contar el total de mensajes enviados por los usuarios
    */
    function mensajesTotales()
    {
        $consulta = "select count(*) from mensajes";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchColumn();
    }

    /*
        · Este método ejecuta un select de todos los alumnos y se guarda el resultado en un array.
    */
    public function mostrarAlumnos() {
        $consulta = "select * from usuarios where nivel = 1";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}


