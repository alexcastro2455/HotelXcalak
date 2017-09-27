<?php
/* Smarty version 3.1.31, created on 2017-09-26 21:24:58
  from "C:\xampp\htdocs\SistemaHotel\Recepcion\styles\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59caa98ace8d93_83679120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cad4e9e6a96dad01c473cadf99190167de9a2204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SistemaHotel\\Recepcion\\styles\\templates\\home\\index.tpl',
      1 => 1506453897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59caa98ace8d93_83679120 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión Xcalak</title>

    <link rel="stylesheet" href="styles/css/bootstrap.css">    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/cssLogin.css">
  </head>

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>Xcalak</strong> Login</h1>
                  <div class="mydescription">
                    <p>Bienvenido al inicio de sesión administrativo</p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                              <p>Digita tu usuario y contraseña:</p>
                          </div>
                          <div class="myform-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <form role="form" action="" method="post" class="">
                          <div class="form-group">
                              <input type="text" name="form-username" placeholder="Usuario..." class="form-control" id="form-username">
                          </div>
                          <div class="form-group">
                              <input type="password" name="form-password" placeholder="Contraseña..." class="form-control" id="form-password">
                          </div>
                          <a href="?view=reserva"><input class="mybtn" type="button" value="Buscar cuartos"></a>
                        </form>
                      </div>
                  </div>
            </div>

            <div class="row">
                 <div class="col-sm-12 mysocial-login">
                    <h3>...ingresa también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>   
            </div>

        </div>
    </div>


    <?php echo '<script'; ?>
 src="styles/js/bootstrap.js"><?php echo '</script'; ?>
>
  </body>

</html><?php }
}
