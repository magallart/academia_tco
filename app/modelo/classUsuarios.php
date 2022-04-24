<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Usuarios extends Modelo
{

    /*
        · Este método nos sirve para comprobar si los valores que ha introducido el usuario en el formulario de login de /templates/iniciarSesion.php son correctos.
        · Si son correctos lo comprobamos con rowCount. Si hay 1 fila es que existe y guardamos los datos en un array.
        · Si la combinación de user + password no existe devolvemos FALSE.
    */
    function loginUsuario($usuario, $password)
    {

        $consulta = "select * from usuarios where nombre=:usuario and password=:clave";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':usuario', $usuario);
        $result->bindParam(':clave', $password);
        $result->execute();
        $filasConsulta = $result->rowCount();

        if (!$filasConsulta) {
            return FALSE;
        } else {
            return $result->fetch(PDO::FETCH_ASSOC);
        }
    }

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
    function getMensajesUsuario($id)
    {
        // SELECT mensaje FROM `mensajes` WHERE `id_usuario` = 0;
        // TODO Borrar este ejemplo
        $consulta = "select id_curso, mensaje from mensajes where id_usuario =:idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }



    /*
        · Este método nos sirve para que un usuario se registre en la base de datos.
        · Le pasamos por parámetros los valores recogidos desde el formulario en /templates/registrarse.php
        · Llegamos aquí desde la acción registro() en el controlador.
    */
    public function registrarUsuario($user, $pass, $email, $fPerfil)
    {

        $fPerfilRuta = $user . "\\" . $fPerfil;
        $nivel = "1";

        $consulta = "insert into usuarios (user, pass, nivel, email, fPerfil) values (?, ?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $user);
        $result->bindParam(2, $pass);
        $result->bindParam(3, $nivel);
        $result->bindParam(4, $email);
        $result->bindParam(5, $fPerfilRuta);
        $result->execute();

        return $result;
    }
}
