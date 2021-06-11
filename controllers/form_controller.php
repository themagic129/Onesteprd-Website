<?php

//Variable contenedor de errores
$error = array();
$nombre = '';
$apellido = '';
$email = '';
$envio = '';
$tel_cel = '';
$cantidad = '';
$zip_code = '';
$ciudad = '';
$metodo_pago = '';

//FUNCION PARA ELIMINAR CARACTERES HTML
function esc($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
  }

//Si el boton submit es presionado
if (isset($_POST['submit'])) {

    require 'email_controller.php';

    $nombre = esc($_POST['nombre']);
    $apellido = esc($_POST['apellido']);
    $tel_cel =  esc($_POST['tel_cel']);
    $email = esc($_POST['email']);
    $envio = esc($_POST['envio']);
    $ciudad = esc($_POST['ciudad']);
    $pais = esc($_POST['pais']);
    $zip_code = esc($_POST['zip_code']);
    $cantidad = esc($_POST['cantidad']);
    $color = esc($_POST['color']);
    $coment = esc($_POST['coment']);
    $metodo_pago = esc($_POST['metodo_pago']);

//Validacion de campos vacios


    if (empty($nombre) || empty($apellido) || empty($tel_cel) || empty($email) ||
        empty($ciudad) || empty($cantidad)) {

        $error['campo_vacio'] = "Revisa los campos requeridos";
    }

    //Validacion de SELECT menu

    if (!in_array($color, array("Late-Night-Pink", "Zafiro", "Tiffany-Blue", "Golden-Black", "Irish-Green", "Pink-Mist"))) {

          $error['campo_vacio'] = "Revisa los campos requeridos";
      }


    if (!in_array($pais, array("rep_dom"))) {

          $error['campo_vacio'] = "Revisa los campos requeridos";
      }


    if (!in_array($envio, array("Caribe Tours","Metro","Vimenpaq","Mensajero"))) {

        $error['campo_vacio'] = "Revisa los campos requeridos";
    }

    if (!in_array($metodo_pago, array("Efectivo","Transferencia Bancaria","PayPal"))) {

        $error['campo_vacio'] = "Revisa los campos requeridos";
    }



    //Validar correo electronico

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email_invalido'] = "Por favor ingrese un email valido";
    }

    //Si no hay errores de validacion, enviar correo

    if (count($error) === 0) {

        $mail->send();
        header('location: success.php');

    }
}
