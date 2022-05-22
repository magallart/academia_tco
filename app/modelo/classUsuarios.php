<?php

//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Usuarios extends Modelo
{

    /*
        · Este método nos sirve para comprobar si los valores que ha introducido el usuario en el formulario de login de /templates/iniciarSesion.php son correctos.
        · Si son correctos lo comprobamos con rowCount. Si hay 1 fila es que existe y guardamos los datos en un array.
        · Si la combinación de user + password no existe devolvemos FALSE.
    */
    function loginUsuario($email, $password)
    {
        $consulta = "select * from usuarios where email=:correo and password=:clave";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':correo', $email);
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
        · Este método nos sirve para comprobar si los valores que ha introducido el usuario en el formulario de login de /templates/iniciarSesion.php son correctos.
        · Si son correctos lo comprobamos con rowCount. Si hay 1 fila es que existe y guardamos los datos en un array.
        · Si la combinación de user + password no existe devolvemos FALSE.
    */
    function getPassword($id)
    {
        $consulta = "select password from usuarios where id=:id";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':id', $id);
        $result->execute();
        $filasConsulta = $result->rowCount();

        if (!$filasConsulta) {
            return FALSE;
        } else {
            return $result->fetchColumn();
        }
    }

    /*
        · Este método nos sirve para averiguar qué cursos está realizando el usuario.
    */
    function getCursosUsuario($id)
    {
        $consulta = "select cursos.id, cursos.nombre, curso_usuario.temasTerminados, curso_usuario.finalizado from cursos inner join curso_usuario on cursos.id = curso_usuario.id_curso where id_usuario =:idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
        · Este método nos sirve para guardar todos los mensajes del usuario.
    */
    function getMensajesUsuario($id)
    {
        $consulta = "select id_curso, mensaje from mensajes where id_usuario =:idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
        · Este método actualiza los datos del usuario (Perfil).
    */
    function actualizarDatos($idUsuario, $nombre, $apellidos, $email, $fNacimiento, $direccion, $cPostal, $localidad)
    {
        $consulta = "update usuarios set nombre = :nombre, apellidos = :apellidos, email = :email, fNacimiento = :fNacimiento, direccion = :direccion, cPostal = :cPostal, localidad = :localidad where id = :idUsuario";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombre', $nombre);
        $result->bindParam(':apellidos', $apellidos);
        $result->bindParam(':email', $email);
        $result->bindParam(':fNacimiento', $fNacimiento);
        $result->bindParam(':direccion', $direccion);
        $result->bindParam(':cPostal', $cPostal);
        $result->bindParam(':localidad', $localidad);
        $result->bindParam(':idUsuario', $idUsuario);
        $result->execute();

        return $result;
    }

    /*
        · Este método nos sirve para insertar un nuevo mensaje del usuario a un curso.
    */
    function insertarMensajeUsuario($idUsuario, $idCurso, $mensaje)
    {
        $consulta = "insert into mensajes (id_usuario, id_curso, mensaje) values (?, ?, ?)";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $idUsuario);
        $result->bindParam(2, $idCurso);
        $result->bindParam(3, $mensaje);
        $result->execute();

        return $result;
    }

    /*
        · Este método comprueba si un curso ha sido finalizado por un usuario.
    */
    function estadoCursoUsuario($idUsuario, $idCurso)
    {
        $consulta = "select finalizado from curso_usuario where id_usuario = :idUsuario and id_curso = :idCurso";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $idUsuario);
        $result->bindParam(':idCurso', $idCurso);
        $result->execute();
        return $result->fetchColumn();

        return $result;
    }

    /*
        · Este método suma un tema a la columna de temas finalizados.
    */
    function sumarTema($idUsuario, $idCurso)
    {
        $consulta = "update curso_usuario set temasTerminados = temasTerminados +1 where id_usuario = :idUsuario AND id_curso = :idCurso";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $idUsuario);
        $result->bindParam(':idCurso', $idCurso);
        $result->execute();
    }

    /*
        · Este método finaliza un curso.
    */
    function empezarCurso($idUsuario, $idCurso, $temasTerminados, $finalizado, $valoracion)
    {
        $consulta = "insert into curso_usuario (id_usuario, id_curso, temasTerminados, finalizado, valoracion) values (?, ?, ?, ?, ?)";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $idUsuario);
        $result->bindParam(2, $idCurso);
        $result->bindParam(3, $temasTerminados);
        $result->bindParam(4, $finalizado);
        $result->bindParam(5, $valoracion);
        $result->execute();

        return $result;
    }

    /*
        · Este método finaliza un curso.
    */
    function terminarCurso($idUsuario, $idCurso)
    {
        $consulta = "update curso_usuario set finalizado = 1 where id_usuario = :idUsuario AND id_curso = :idCurso";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $idUsuario);
        $result->bindParam(':idCurso', $idCurso);
        $result->execute();
    }

    /*
        · Este método nos sirve para que un usuario se registre en la base de datos.
        · Le pasamos por parámetros los valores recogidos desde el formulario en /templates/registrarse.php
        · Llegamos aquí desde la acción registro() en el controlador.
    */
    public function registrarUsuario($nombre, $apellidos, $password, $email, $fNacimiento, $direccion, $cPostal, $localidad, $fPerfilRuta)
    {
        $verificado = "1";
        $nivel = "1";

        $consulta = "insert into usuarios (nombre, apellidos, email, password, direccion, cPostal, localidad, fNacimiento, fPerfil, nivel, verificado) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $apellidos);
        $result->bindParam(3, $email);
        $result->bindParam(4, $password);
        $result->bindParam(5, $direccion);
        $result->bindParam(6, $cPostal);
        $result->bindParam(7, $localidad);
        $result->bindParam(8, $fNacimiento);
        $result->bindParam(9, $fPerfilRuta);
        $result->bindParam(10, $nivel);
        $result->bindParam(11, $verificado);

        $result->execute();

        return $result;
    }

    /*
        · Este método nos sirve para borrar los datos del usuario de la tabla Usuarios.
    */
    public function borrarUsuario($id)
    {
        $consulta = "delete from usuarios where id = :idUsuario";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();

        return $result;
    }

/*
        · Este método nos sirve para borrar los cursos a los que está inscrito un usuario.
    */
    public function borrarCursosUsuario($id)
    {
        $consulta = "delete from curso_usuario where id_usuario = :idUsuario";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();

        return $result;
    }

    /*
        · Este método nos sirve para borrar todos los mensajes que ha escrito un usuario.
    */
    public function borrarMensajesUsuario($id)
    {
        $consulta = "delete from mensajes where id_usuario = :idUsuario";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUsuario', $id);
        $result->execute();

        return $result;
    }     

}
