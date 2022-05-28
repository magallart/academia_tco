<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Newsletter extends Modelo
{

    /*
        · Este método nos sirve para insertar usuarios en la tabla newsletter
    */
    function getInformacionUsuario($id)
    {
        // SELECT cursos.nombre, curso_usuario.temas_finalizados FROM `cursos` INNER JOIN `curso_usuario` ON cursos.id = curso_usuario.id_curso WHERE `id_usuario` = 1;
        $consulta = "select cursos.nombre, curso_usuario.temas_finalizados from cursos inner join curso_usuario on cursos.id = curso_usuario.id_curso where id_usuario =:idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
