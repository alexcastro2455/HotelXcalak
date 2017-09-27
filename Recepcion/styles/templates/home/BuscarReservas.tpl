{include 'overall/header.tpl'}
<body>

	{include 'overall/nav.tpl'}

<section class="container">
	<div class="row">
		<div class="alert alert-titulo" role="alert">
			RESERVACIONES
		</div>
	</div>

	<div class="row">
		
		<div class="btn-group">
		  	<select class="form-control form-control-sm">
			  	<option>Reservas</option>
			  	<option>Cancelado</option>
			  	<option>Corporativo</option>
			</select>
		</div>
		<div class="btn-group">
		  	<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Buscar">
				 </div>
				 <button type="submit" class="btn btn-default">Buscar</button>
			</form>
		</div>

	</div>

<br/>

<div class="row colorSection">
<table class="table table-striped table-bordered table-condensed">
		  <thead class="thead-inverse">
		    <tr>
		      <th>Código de reserva</th>
		      <th>Fecha de estadía</th>
		      <th>Cuartos</th>
		      <th>Personas</th>
		      <th>Monto</th>
		      <th>Estatus</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">45234</th>
		      <td>19/09/2017 a 22/09/2017</td>
		      <td>3</td>
		      <td>9</td>
		      <td>Pagado</td>
		      <td>en espera</td>
		      <td><input id="1" class="btn btn-success" type="button" value="Seleccionar" onclick="goToPage(this);"></td>
		    </tr>
		    <tr>
		      <th scope="row">52398</th>
		      <td>05/07/2017 a 10/07/2017</td>
		      <td>3</td>
		      <td>9</td>
		      <td>Pagado</td>
		      <td>En espera</td>
		      <td><input id="2" class="btn btn-success" type="button" value="Seleccionar" onclick="goToPage(this);"></td>
		    </tr>
		    <tr>
		      <th scope="row">53452</th>
		      <td>03/05/2017 a 05/05/2017</td>
		      <td>4</td>
		      <td>10</td>
		      <td>Pagado</td>
		      <td>en espera</td>
		      <td><input id="3" class="btn btn-success" type="button" value="Seleccionar" onclick="goToPage(this);"></td>
		    </tr>
		  </tbody>
		</table>
		</div>
</section>

{include 'overall/footer.tpl'}