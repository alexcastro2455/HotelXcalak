<?php
/* Smarty version 3.1.31, created on 2017-09-27 17:25:11
  from "C:\xampp\htdocs\SistemaHotelAdmin\Recepcion\styles\templates\overall\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59cbc2d79781c2_70393276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51625f84fd8fd76fe9b1b055d5c6b1838af3769a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SistemaHotelAdmin\\Recepcion\\styles\\templates\\overall\\nav.tpl',
      1 => 1506455268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cbc2d79781c2_70393276 (Smarty_Internal_Template $_smarty_tpl) {
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
					<span><b>Xca</b>lak</span>
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
							<a href="#" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Reservaciones">
								<i class="fa fa-address-book" aria-hidden="true"></i>
							</a>
						</li>

						<li>
							<a href="#" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Limpieza">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</a>
						</li>

						<li>
							<a href="#" class="mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Huespedes">
								<i class="fa fa-users" aria-hidden="true"></i>
							</a>
						</li>

						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle mytool" data-toggle="tooltip" data-placement="bottom" data-original-title="Mensajes">
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
								<li class="my-user-header">
									<img src="styles/images/xcalak_SF.png" class="img-circle">
									<p>Armando Palacios - Web Developer</p>
									<small>19 / Septiembre / 2017</small>
								</li>

								<li class="my-user-footer">
									<div class="pull-left">
										 <a href="#" class="btn btn-default"> <i class="fa fa-user"></i> Perfil</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-default"> <i class="fa fa-power-off"></i> Salir</a>
									</div>
								</li>
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
						<li class="my-li-nav"><a href="#">Cátalogo de cuartos</a></li>
                		<li class="my-li-nav"><a href="#">Cátalogo de servicios</a></li>
                		<li class="my-li-nav"><a href="#">Cátalogo de promociones</a></li>
                		<li class="my-li-nav"><a href="#">Cátalogo de empleados</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div> <!--termina wrapper--><?php }
}
