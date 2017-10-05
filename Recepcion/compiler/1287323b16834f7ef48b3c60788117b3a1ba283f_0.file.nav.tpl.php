<?php
/* Smarty version 3.1.31, created on 2017-10-03 19:10:25
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\overall\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d3c4818ecc30_56228269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1287323b16834f7ef48b3c60788117b3a1ba283f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\overall\\nav.tpl',
      1 => 1507050622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d3c4818ecc30_56228269 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
?>
<header class="my-header">
		<nav class="container navbar navbar-static-top">
			<div class="navbar-header">
				
				<div class="my-logo">
					
					<div class="pull-left">
						<a class="hamburger">
							<i class="sr-only">Toggle navigation</i>
							<i class="fa fa-bars" aria-hidden="true"></i>
						</a>
					</div>
					<span>Hotel<b>Xcalak</b></span>
					<div class="pull-right">
						<a class="navbar-toggle collapsed btnbarra" data-toggle="collapse" data-target="#barra-menu">
							<i class="sr-only">Toggle Navigation</i>
							<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
						</a>
					</div>
				</div> <!-- logo -->

				<div class="my-div-right">
					<div class="navbar-collapse collapse" id="barra-menu">
						<ul class="nav navbar-nav my-right-ul">
							
						<li>
							<a href="RBuscarCuarto.html" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="RegistroLlegadas">
								<i class="fa fa-address-book" aria-hidden="true"></i>
							</a>
						</li>

						<li>
							<a href="#" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Limpieza">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</a>
						</li>

						<li>
							<a href="RAdministrarReservas.html" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Administrar Reservas">
								<i class="fa fa-users" aria-hidden="true"></i>
							</a>
						</li>

						<li class="dropdown messages-menu">
							<a href="REnviarMensajes.html" class="dropdown-toggle mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Mensajes">
								<i class="fa fa-bell"></i>
								<spam class="label label-default">5</spam>
							</a>
						</li>

						<li class="dropdowm user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="styles/images/xcalak_SF.png" class="user-image">
								<spam class="hidden-xs">WebMaster</spam>
							</a>
							
							<ul class="dropdown-menu">
							<?php if (isset($_SESSION['nombre'])) {?>

								<li class="my-user-header">
									<img src="styles/images/xcalak_SF.png" class="img-circle">
									<p><?php echo $_SESSION['nombre'];?>
 <?php echo $_SESSION['apellido'];?>
</p>
									<p><?php echo $_SESSION['puesto'];?>
</p>
									<small><?php echo smarty_modifier_date_format(time(),"%d/%m/%G");?>
</small>
								</li>

								<li class="my-user-footer">
									<div class="pull-left">
										 <a href="#" class="btn btn-default colorFontBlack"> <i class="fa fa-user"></i> Perfil</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-default"> <i class="fa fa-power-off"></i> Salir</a>
									</div>
								</li>
							<?php } else { ?>
								<li><a href="?view=login">Login</a></li>
							<?php }?>
							</ul>
						</li>


						</ul>
					</div>
				</div> <!-- termina div right-->

			</div>	<!-- termina -->
		</nav>  <!-- termina -->
	</header>

	<div id="wrapper" class="toggled">
		<div class="navbar navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						Sistema
					</a>
				</li>
				<li class="my-li-nav">
					<a href="">Configuración</a>
				</li>
				<li class="dropdown my-li-nav">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Gerencia <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-header">Opciones de Usuario</li>
						<li class="my-li-nav"><a href="../Gerencia/GCatalogoHabitaciones.html">Cátalogo de Habitaciones</a></li>
                		<li class="my-li-nav"><a href="../Gerencia/GCatalogoServicios.html">Cátalogo de servicios</a></li>
                		<li class="my-li-nav"><a href="../Gerencia/GCatalogoPromociones.html">Cátalogo de promociones</a></li>
                		<li class="my-li-nav"><a href="../Gerencia/GCatalogoEmpleado.html">Cátalogo de empleados</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> <!--termina wrapper--><?php }
}
