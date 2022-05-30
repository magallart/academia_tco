<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Newsletter extends Modelo
{

    /*
        · Este método nos sirve para insertar usuarios en la tabla newsletter
    */
    function newNewsletter($nombre, $email)
    {
        $consulta = "insert into newsletter (nombre, email) values (?, ?)";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $email);
        $result->execute();

        return $result;
    }

}
?>