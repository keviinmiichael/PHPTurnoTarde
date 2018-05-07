<?php

function validar($datos,$nombreInputDelFile){
    $errores = [];
    $nombre = trim($datos['nombre']);
    $email = trim($datos['email']);
    $pais = $datos['pais'];
    $pass = trim($datos['pass']);
    $pass2 = trim($datos['pass2']);

    if ($nombre == '') {
        $errores['nombre'] = 'Por favor completa tu nombre';
    }
    if ($email == '') {
        $errores['email'] = 'Por favor completa tu email';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completa tu email, con un formato valido';
    }
    if ($pass == '' || $pass2 == '' ) {
        $errores['pass'] = 'Por favor completa tus contraseñas';
    }elseif ($pass != $pass2) {
        $errores['pass'] = 'Tus contraseñas deben coinsidir';
    }
    if ($pais == '') {
        $errores['pais'] = 'Por favor completa de que país sos';
    }
    if ($_FILES[$nombreInputDelFile]['error'] !== UPLOAD_ERR_OK) {
        $errores[$nombreInputDelFile] = 'Che no subiste foto';
    }

    return $errores;
}

function crearUsuario($datos){
    $usuario = [
        'nombre' => $datos['nombre'],
        'email' => $datos['email'],
        'pais' => $datos['pais'],
        'pass' => password_hash($datos['pass'],PASSWORD_DEFAULT),
    ];

    return $usuario;
}

function guardarUsuario($user){
    $usuarioAJSON = json_encode($user);

    file_put_contents('usuario.json',$usuarioAJSON . PHP_EOL, FILE_APPEND);
}

function guardarFoto($nombreInputDelFile,$email){
    $errores = [];
    if ($_FILES[$nombreInputDelFile]['error'] === UPLOAD_ERR_OK) {
        $name = $_FILES[$nombreInputDelFile]['name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
            $archivoReal = $_FILES[$nombreInputDelFile]['tmp_name'];
            $ubicacion = dirname(__FILE__);
            $ubicacion = $ubicacion . '/img/';
            move_uploaded_file($archivoReal, $ubicacion.$email.'.'. $ext);
        }else {
            return $errores[$nombreInputDelFile] = "extension invalida";
        }
    }else {
     return $errores[$nombreInputDelFile] =  "No estas subiendo nada";
    }
}

//traerTodos()
//existeMail()
//validarLogin()
//traerUltimoID()
//traerPorID($id)
//loguear()
//estaLogueado()
