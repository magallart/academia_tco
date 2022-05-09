<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Cursos extends Modelo
{

    /*
        · Este método nos sirve para averiguar qué cursos está realizando el usuario.
        · Devolverá los nombres de los cursos y los temas completados.
    */
    function getInformacionUsuario($id)
    {
        // SELECT cursos.nombre, curso_usuario.temas_finalizados FROM `cursos` INNER JOIN `curso_usuario` ON cursos.id = curso_usuario.id_curso WHERE `id_usuario` = 1;
        // TODO Borrar este ejemplo
        $consulta = "select cursos.nombre, curso_usuario.temas_finalizados from cursos inner join curso_usuario on cursos.id = curso_usuario.id_curso where id_usuario =:idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
        · Este método nos sirve para guardar todos los mensajes del usuario.
        · Devolverá los nombres de los cursos y los temas completados.
    */
    function getMensajesCurso($idCurso)
    {
        // SELECT usuarios.nombre, usuarios.apellidos, usuarios.fPerfil, mensajes.mensaje FROM `usuarios` INNER JOIN `mensajes` ON usuarios.id = mensajes.id_usuario WHERE mensajes.id_curso=0;
        // TODO Borrar este ejemplo
        $consulta = "select usuarios.nombre, usuarios.apellidos, usuarios.email, usuarios.fPerfil, mensajes.mensaje from `usuarios` inner join `mensajes` on usuarios.id = mensajes.id_usuario where mensajes.id_curso=:idCurso";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idCurso', $idCurso);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}
