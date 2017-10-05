<?php
/* Smarty version 3.1.31, created on 2017-10-05 08:57:28
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\public\Login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d5d7d80c1014_71552749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f8f3179508ce461291307bb46e7848e0e82f950' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\public\\Login.tpl',
      1 => 1507186643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d5d7d80c1014_71552749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión Xcalak</title>

    <link rel="stylesheet" href="styles/css/bootstrap.css">    
    <link rel="stylesheet" href="styles/font-awesome/css/font-awesome.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/cssLogin.css">
  </head>

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <img src="styles/images/xcalak_SF.png" class="img-rounded sizeImgMedium" alt="Responsive image">
                  <div class="mydescription">
                    <p>Bienvenido al inicio de sesión administrativo</p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                              <p>Digita tu correo y contraseña:</p>
                          </div>
                          <div class="myform-top-right sizeIcon">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                          <form role="form" action="" method="post" class="">

                            <div id="alertaError">
                              
                            </div>

                            <div class="form-group input-group">
                              <span class="input-group-addon sizeIcon"><i class="fa fa-user"></i></span>
                              <input id="correo" type="text" name="form-username" placeholder="Correo..." class="form-control" id="form-username">
                            </div>
                            <div class="form-group  input-group">
                              <span class="input-group-addon"><i class="fa fa-lock sizeIcon" style="font-size: 20px"></i></span>
                              <input id="password" type="password" name="form-password" placeholder="Contraseña..." class="form-control" id="form-password">
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input id="session" type="checkbox" class="form-check-input" name="" value="1"> Recordarme
                              </label>
                            </div>
                            <input id="btnLogin" class="mybtn" type="button" value="Entrar">
                          </form>
                      </div>
                  </div>
            </div>

        </div>
    </div>

    <?php echo '<script'; ?>
 src="styles/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="styles/js/bootstrap.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
      
      //cuando se cargue toda la página entra esta función
      window.onload = function(){
          document.getElementById('btnLogin').onclick = function(){
          var connect, email, pass, session, form, result;

          //recogiendo los datos del formulario
          email = document.getElementById("correo").value;
          pass = document.getElementById("password").value;
          session = document.getElementById("session").checkbox ? true : false;

          if(email == "" && pass == "")
          {
            imprimirMensaje('class="alert alert-danger"', "El usuario y contraseña no pueden estar vacíos.");
          }

          form = 'correo=' + email + '&password=' + pass + '&session=' + session;

          ///si elemente el elemento XMLHttpRequest se crea una instancia    Si no existe eso se va a activex
          connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

          ///Si hay algún cambio en la respuesta que obtengamos del PHP
          connect.onreadystatechange = function(){

           
            ///el 4 significa que esta listo para entregar algo
            ///1 cuando esta apenas pidiendo la conexión
            if(connect.readyState == 4 && connect.status == 200){

                //lo que nos devuelva PHP eva a estar en esta variable
                if(parseInt(connect.responseText) == 1){
                  //conectado con éxito, se redirecciona
                  location.href = '?view=Index';

                }else{
                  //ERROR: los datos son incorrectos
                  imprimirMensaje('class="alert alert-danger"', "Credenciales incorrectas " + connect.readyState + " " + connect.status + ' ' + connect.responseText);
                }

            }else if(connect.readyState != 4){
              //procesando
              imprimirMensaje('class="alert alert-warning"', 'procesando...');
            }

          }/// FIN DEL ONREADYSTATE




          //3 parametros, si es asincrona puede soportar muchas más peticiones
          connect.open('POST', '?view=Login', true);
          connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          connect.send(form);
        }

      }

      function imprimirMensaje(clase, mensaje)
      {
        var result;

        result = '<div ' + clase + 'role="alert">';
        result += '<button type="button" class="close" data-dismiss="alert"></button>';
        result += '<strong>Ha ocurrido un error! </strong>' + mensaje + '</div>';

        document.getElementById("alertaError").innerHTML = result;
      }

    <?php echo '</script'; ?>
>
  </body>

</html><?php }
}
