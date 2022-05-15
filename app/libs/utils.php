<?php
/*
        · Esta función se encarga de validar los datos recogidos en el formulario de /templates/insetarAlumno.php
        · Dentro de esta función hacemos llamadas a otras funciones.
        · Si todos los campos se han validado correctamente: error = FALSE
    */

function validarDatos($nombre, $nia, $email, $direccion, $cPostal, $localidad, $fNacimiento, $fPerfil)
{
    $error = FALSE;

    if (!cTexto($nombre, "nombre", 150, 1, " ", "i")) {
        $error = TRUE;
    }

    if (!cNumero($nia, "nia", 8, 1, "")) {
        $error = TRUE;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = TRUE;
        $_SESSION['errores']['email'] = "El email introducido no es válido.";
    }

    if (!cDireccion($direccion, "direccion", 150, 1, " ", "i")) {
        $error = TRUE;
    }

    if (!cNumero($cPostal, "cPostal", 5, 1, "")) {
        $error = TRUE;
    }

    if (!cTexto($localidad, "localidad", 150, 1, " ", "i")) {
        $error = TRUE;
    }

    if (!cFecha($fNacimiento, "fNacimiento", "0")) {
        $error = TRUE;
    }

    if (!cSubirImagenPerfilAlumno('fPerfil', $nombre, $nia)) {
        $error = TRUE;
    }

    if ($error) {
        return FALSE;
    } else {
        return TRUE;
    }
}

/*
        · Esta función se encarga de validar los datos recogidos en el formulario de /templates/registrarse.php
        · Dentro de esta función hacemos llamadas a otras funciones.
        · Si todos los campos se han validado correctamente: error = FALSE
    */

function validarDatosRegistro($user, $pass, $email, $fPerfil)
{
    $error = FALSE;

    if (!cTexto($user, "user", 150, 1, " ", "i")) {
        $error = TRUE;
    }

    if (!cPassword($pass, "password", 50, 1, "")) {
        $error = TRUE;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = TRUE;
        $_SESSION['errores']['email'] = "El email introducido no es válido.";
    }

    if (!cSubirImagenPerfilUsuario($user, "fPerfil")) {
        $error = TRUE;
    }

    if ($error) {
        return FALSE;
    } else {
        return TRUE;
    }
}


function recoge($var)
{
    if (isset($_REQUEST[$var]))
        $tmp = strip_tags(sinEspacios($_REQUEST[$var]));
    else
        $tmp = "";

    return $tmp;
}

/* Función que comprueba que hay al menos 1 opción elegida */
function recogeCheck(string $text)
{
    if (isset($_REQUEST[$text])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function sinEspacios($frase)
{
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}

function sinTildes($text)
{
    $no_permitidas = array(
        "á", "é", "í", "ó", "ú",
        "Á", "É", "Í", "Ó", "Ú",
        "à", "è", "ì", "ò", "ù",
        "À", "È", "Ì", "Ò", "Ù"
    );

    $permitidas = array(
        "a", "e", "i", "o", "u",
        "A", "E", "I", "O", "U",
        "a", "e", "i", "o", "u",
        "A", "E", "I", "O", "U"
    );

    $texto = str_replace($no_permitidas, $permitidas, $text);
    return $texto;
}

/*
        · Función que cambia un caracter por otro dentro de un string.
        · Lo uso para sustituir los espacios entre palabras por _ ya que las fotografías no pueden tener espacios por medio.
    */
function reemplazarEnFiles(string $campo, string $atributo, string $aparicionEnString, string $reemplazo)
{
    $cadenaOriginal = $_FILES[$campo][$atributo];
    //Cambiar $aparicionEnString por $reemplazo
    $cadenaFinal = str_replace($aparicionEnString, $reemplazo, $cadenaOriginal);
    return $cadenaFinal;
}

function cTexto(string $text, string $campo, int $max = 150, int $min = 1, string $espacios = " ", string $case = "i")
{
    if ((preg_match("/[A-Za-zÑñ$espacios]{" . $min . "," . $max . "}$/u$case", sinTildes($text)))) {
        return TRUE;
    } else {
        $_SESSION['errores'][$campo] = "El campo $campo no es válido.";
        return FALSE;
    }
}

function cPassword(string $text, string $campo, int $max = 150, int $min = 1, string $espacios = " ", string $case = "i")
{
    if ((preg_match("/[A-Za-zÑñ0-9*_-$espacios]{" . $min . "," . $max . "}$/u$case", sinTildes($text)))) {
        return TRUE;
    } else {
        $_SESSION['errores'][$campo] = "El campo $campo no es válido.";
        return FALSE;
    }
}

function cNumero(string $text, string $campo, int $max = 8, int $min = 1, string $espacios = "")
{
    if ((preg_match("/[0-9$espacios]{" . $min . "," . $max . "}$/u", $text))) {
        return TRUE;
    } else {
        $_SESSION['errores'][$campo] = "El campo $campo no es válido.";
        return FALSE;
    }
}

function cDireccion(string $text, string $campo, int $max = 150, int $min = 1, string $espacios = " ", string $case = "i")
{
    if ((preg_match("/[A-Za-zÑñ0-9-,$espacios]{" . $min . "," . $max . "}$/u$case", sinTildes($text)))) {
        return TRUE;
    } else {
        $_SESSION['errores'][$campo] = "La dirección no es válida.";
        return FALSE;
    }
}

function cFecha(string $text, string $campo, string $formato = "0")
{

    $arrayFecha = preg_split("/[\/-]/", $text);

    if (count($arrayFecha) == 3) {
        switch ($formato) {
            case ("0"):
                if (checkdate($arrayFecha[1], $arrayFecha[0], $arrayFecha[2])) {
                    $_SESSION['fechaBD'] = $arrayFecha[2] . "/" . $arrayFecha[1] . "/" . $arrayFecha[0];
                    return TRUE;
                } else {
                    $_SESSION['errores']['fNacimiento'] = "Fecha incorrecta";
                    return FALSE;
                }
                break;

            case ("1"):
                if (checkdate($arrayFecha[0], $arrayFecha[1], $arrayFecha[2])) {
                    $_SESSION['fechaBD'] = $arrayFecha[2] . "/" . $arrayFecha[1] . "/" . $arrayFecha[0];
                    return TRUE;
                } else {
                    $_SESSION['errores']['fNacimiento'] = "Fecha incorrecta";
                    return FALSE;
                }
                break;

            case ("2"):
                if (checkdate($arrayFecha[1], $arrayFecha[2], $arrayFecha[0])) {
                    $_SESSION['fechaBD'] = $arrayFecha[2] . "/" . $arrayFecha[1] . "/" . $arrayFecha[0];
                    return TRUE;
                } else {
                    $_SESSION['errores']['fNacimiento'] = "Fecha incorrecta";
                    return FALSE;
                }
                break;

            default:
                $_SESSION['errores']['fNacimiento'] = "Fecha no válida.";
                return FALSE;
        }
    } else {
        $_SESSION['errores']['fNacimiento'] = "Faltan datos en la fecha.";
        return FALSE;
    }
}

/*
        ·Esta función sube la imagen del alumno a la carpeta /img/alumnos/NIAdelALUMNO.
    */
function cSubirImagenPerfilAlumno(string $campo, string $alumno, string $nia)
{

    $extensionesValidas = ["image/jpeg", "image/jpg", "image/png", "image/gif"];

    $directorioTemp = $_FILES[$campo]['tmp_name'];
    $extension = $_FILES[$campo]['type'];

    //No se pueden guardar nombres de fotos con espacios, por tanto cambiamos los espacios por _  
    $nombreFotoSinEspacios = reemplazarEnFiles("fPerfil", "name", " ", "_");
    $nombreFotoSinEspacios = strtolower($nombreFotoSinEspacios);


    if ($_FILES[$campo]['error'] == 0 && $_FILES[$campo]['size'] > 0) {
        /* El alumno ha subido una foto y hay que analizarla */
        $nombrePartes = explode(".", $nombreFotoSinEspacios);
        //Necesitamos la extensión de la foto que ha subido el alumno, por eso nos quedamos con el segundo item del array que es la extensión
        $extensionImagen = $nombrePartes[1];

        // Comprobamos la extensión del archivo dentro de la lista que hemos definido al principio
        if (!in_array($extension, $extensionesValidas)) {
            $_SESSION['errores']['fPerfil'] = "La extensión del archivo no es válida.";
            return FALSE;
        }

        $rutaAlumno = dirname(dirname(__DIR__)) . "\img\alumnos\\" . $nia . '\\' . $nombreFotoSinEspacios;

        $directorioAlumno = dirname(dirname(__DIR__)) . "\img\alumnos\\" . $nia . '\\';

        if (!file_exists($directorioAlumno)) {
            mkdir($directorioAlumno, 0777, true);
        } else {
            $_SESSION['errores']['directorioAlumno'] = "No se ha podido crear el directorio porque ya existe.";
            return FALSE;
        }

        if (move_uploaded_file($directorioTemp, $rutaAlumno)) {
            // En este caso devolvemos sólo el nombre del fichero sin la ruta
            return TRUE;
        } else {
            $_SESSION['errores']['fPerfil'] = "Error: No se ha podido subir la imagen.";
            return FALSE;
        }
    }
}

/*
        ·Esta función sube la imagen del usuario a la carpeta /img/usuarios/nombreUser
    */
function cSubirImagenPerfilUsuario(string $user, string $campo)
{

    $extensionesValidas = ["image/jpeg", "image/jpg", "image/png", "image/gif"];

    $directorioTemp = $_FILES[$campo]['tmp_name'];
    $extension = $_FILES[$campo]['type'];

    //No se pueden guardar nombres de fotos con espacios, por tanto cambiamos los espacios por _  
    $nombreFotoSinEspacios = reemplazarEnFiles("fPerfil", "name", " ", "_");
    $nombreFotoSinEspacios = strtolower($nombreFotoSinEspacios);


    if ($_FILES[$campo]['error'] == 0 && $_FILES[$campo]['size'] > 0) {
        /* El alumno ha subido una foto y hay que analizarla */
        $nombrePartes = explode(".", $nombreFotoSinEspacios);
        //Necesitamos la extensión de la foto que ha subido el alumno, por eso nos quedamos con el segundo item del array que es la extensión
        $extensionImagen = $nombrePartes[1];

        // Comprobamos la extensión del archivo dentro de la lista que hemos definido al principio
        if (!in_array($extension, $extensionesValidas)) {
            $_SESSION['errores'][$campo] = "La extensión del archivo no es válida.";
            return FALSE;
        }

        $rutaUsuario = dirname(dirname(__DIR__)) . "\img\usuarios\\" . $user . '\\' . $nombreFotoSinEspacios;

        $directorioUsuario = dirname(dirname(__DIR__)) . "\img\usuarios\\" . $user . '\\';

        if (!file_exists($directorioUsuario)) {
            mkdir($directorioUsuario, 0777, true);
        } else {
            $_SESSION['errores']['directorioUsuario'] = "No se ha podido crear el directorio porque ya existe.";
            return FALSE;
        }

        if (move_uploaded_file($directorioTemp, $rutaUsuario)) {
            // En este caso devolvemos sólo el nombre del fichero sin la ruta
            return TRUE;
        } else {
            $_SESSION['errores'][$campo] = "Error: No se ha podido subir la imagen.";
            return FALSE;
        }
    }
}


/*
        · Esta función pinta los botones dentro del acordeón de los cursos.
        · Si el usuario ha finalizado el curso no escribe ningún botón.
    */

function botonesAcordeon($tema, $temasTerminados, $cursoFinalizado)
{
    if (!$cursoFinalizado) {
        if ($temasTerminados >= $tema) {
            echo '<div class="temaFinalizado">';
            echo '<p>Tema finalizado</p>';
            echo '</div>';
        }

        if ($tema == $temasTerminados + 1) {
            echo '<form name="formSumarTema" action="" method="POST" enctype="multipart/form-data">';
            echo '<input type="submit" value="Acabar tema" name="sumarTema" class="boton" />';
            echo '</form>';
        }
    }
}

/*
        · Esta función pinta el botón de finalizar curso cuando ha completado todos los temas anteriores.
    */

function finalizarCurso($tema, $temasTerminados, $cursoFinalizado)
{
    if (!$cursoFinalizado) {
        if ($tema == $temasTerminados + 1) {
            echo '<form name="finalizarCurso" action="" method="POST" enctype="multipart/form-data">';
            echo '<input type="submit" value="Finalizar curso" name="finalizarCurso" class="boton" />';
            echo '</form>';
        }
    }
}

/*
        · Esta función pinta el botón de finalizar curso cuando ha completado todos los temas anteriores.
    */

function mensajeUsuarioCurso($email, $mensajesCurso, $campoArrayMensajesCurso,)
{
    if (array_search($email, array_column($mensajesCurso, $campoArrayMensajesCurso)) !== false) {
        echo "<p>Lo sentimos mucho, ya has enviado un mensaje para este curso.</p>";
    } else {
        echo '<form name="formEnviarMensaje" action="" method="POST" enctype="multipart/form-data">';
        echo '<textarea rows="5" placeholder="Escribe tu mensaje (máximo 255 caracteres)..." name="nuevoMensaje"></textarea>';
        echo '<input type="checkbox" name="aceptacionPoliticas" id="checkPoliticas">';
        echo '<label>He leído y acepto las <a href="index.php?ctl=politicaPrivacidad" target="_blank">Políticas de Privacidad</a>.</label>';
        echo '<input type="submit" value="Enviar mensaje" name="enviarMensaje" class="boton" />';
        echo '</form>';
    }
}
