<?php


//Clase que es hija de la clase Modelo de quién hereda el método conexión

class Alumnos extends Modelo {

    /*
        · Se realiza una conexión a la base de datos.
        · Ejecutamos un select de todos los alumnos y se guarda el resultado en un array.
        · El array se visualiza en la página /templates/listarAlumnos.php
    */
    public function mostrarAlumnos() {
        $consulta = "select * 
                     from alumnos";
        
        $result = $this->conexion->query($consulta);
        return $result->fetchAll();
    }

    /*
        · Se realiza una conexión a la base de datos.
        · Se pasa como parámetro la id del alumno para obtener su información.
        · Ejecutamos un select y guardamos el resultado en un array.
        · El array se visualiza en la página /templates/verAlumno.php
    */
    public function infoAlumno($id) {
        $consulta = "select * 
                     from alumnos 
                     where id=:id";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':id', $id);
        $result->execute();
        return $result->fetch();
    }

    /*
        · Se realiza una conexión a la base de datos.
        · Se pasa como parámetro la id del alumno para obtener las asignaturas.
        · Ejecutamos un select y guardamos el resultado en un array.
        · El array se visualiza en la página /templates/verAlumno.php
    */
    public function asignaturasAlumno($id) {
        $consulta = "select asignaturas.nombre 
                     from asignaturas 
                     inner join clases 
                     on clases.idAsignatura = asignaturas.id 
                     where clases.idAlumno = :id";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':id', $id);
        $result->execute();
        return $result->fetchAll();
    } 

    /*
        · Función a la que pasamos los valores que tiene que introducir.
        · Previamente se han validado en la acción insertarAlumno() del controlador.
        · Por elección de criterio en la base de datos, se guardan las imágenes de cada usuario en una carpeta que lleva el nombre de su NIA.
        · Se prepara la consulta y se ejecuta.
    */
    public function insertarAlumno($nombre, $nia, $email, $direccion, $cPostal, $localidad, $fNacimiento, $fPerfil) {        

        $fPerfilRuta = "\\" . $nia . "\\" . $fPerfil;

        $consulta = "insert into alumnos (nombre, nia, email, direccion, cPostal, localidad, fNacimiento, fPerfil) values (?, ?, ?, ?, ?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $nia);
        $result->bindParam(3, $email);
        $result->bindParam(4, $direccion);
        $result->bindParam(5, $cPostal);
        $result->bindParam(6, $localidad);
        $result->bindParam(7, $fNacimiento);
        $result->bindParam(8, $fPerfilRuta);
        $result->execute();
        
        return $result;
    }

    /*
        · Método para obtener la última id que se ha insertado en la tabla.
        · Se necesita para insetar las asginaturas en la tabla "asignaturas".
    */
    public function alumnoUltimaId() {
        $consultaId = "select max(id) from alumnos";
        $resultId = $this->conexion->query($consultaId);
        $alumnoUltimaId = $resultId->fetchColumn();
        return $alumnoUltimaId;
    } 

    /*
        · Debemos pasarle los parámetros de la id del usuario y las asignaturas que hemos marcado en el check del formulario /templates/insertarAlumno.php.
        · Comprobamos si existe la asignatura dentro del array elegido y si es así se realiza el insert dentro de la tabla "asignaturas".
    */

    public function insertarAsignaturas($id, $arrayAsignaturas) {        
        
        if (in_array("diw", $arrayAsignaturas)) {
            $asignaturaDIW = "0";

            $consulta0 = "insert into clases (idAlumno, idAsignatura) values (?, ?)";

            $result0 = $this->conexion->prepare($consulta0);
            $result0->bindParam(1, $id);
            $result0->bindParam(2, $asignaturaDIW);
            $result0->execute();
        } 
        
        if (in_array("dwc", $arrayAsignaturas)) {
            $asignaturaDWC = "1";

            $consulta1 = "insert into clases (idAlumno, idAsignatura) values (?, ?)";

            $result1 = $this->conexion->prepare($consulta1);
            $result1->bindParam(1, $id);
            $result1->bindParam(2, $asignaturaDWC);
            $result1->execute();
        }         


        if (in_array("dws", $arrayAsignaturas)) {
            $asignaturaDWS = "2";

            $consulta2 = "insert into clases (idAlumno, idAsignatura) values (?, ?)";

            $result2 = $this->conexion->prepare($consulta2);
            $result2->bindParam(1, $id);
            $result2->bindParam(2, $asignaturaDWS);
            $result2->execute();
        } 

        if (in_array("dam", $arrayAsignaturas)) {
            $asignaturaDAM = "3";

            $consulta3 = "insert into clases (idAlumno, idAsignatura) values (?, ?)";

            $result3 = $this->conexion->prepare($consulta3);
            $result3->bindParam(1, $id);
            $result3->bindParam(2, $asignaturaDAM);
            $result3->execute();
        } 

        if (in_array("eie", $arrayAsignaturas)) {
            $asignaturaEIE = "4";

            $consulta4 = "insert into clases (idAlumno, idAsignatura) values (?, ?)";

            $result4 = $this->conexion->prepare($consulta2);
            $result4->bindParam(1, $id);
            $result4->bindParam(2, $asignaturaEIE);
            $result4->execute();
        } 
    }

    /*
        · Función a la que pasamos el nombre de usuario a buscar.
        · Se realiza la query select.
        · Se guarda el resultado en un array asociativo para mostrarlo en la vista /templates/verAlumno.php
    */
    public function buscarFichaAlumno($nombre) {
        $consulta = "select * from alumnos where nombre like :nombre order by nombre asc";

        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombre', $nombre);
        $result->execute();

        return $result->fetchAll();
    }    
    


}
