{include 'overall/Header.tpl'}

<body>


{include 'overall/Nav.tpl'}

<section class="container">

	<div class="panel panel-success">
		<div class="panel-heading"> <!--titulo-->
			<h4>Catálogo de Servicios</h4>
		</div>

		<div class="panel-body"> <!--Panel body-->
			<table class="table table-hover simplePadding15">
					<thead>
						<tr class="info">
							<th>#</th>
							<th>Servicio</th>
							<th>Precio</th>
							<th>Descripción</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>1</th>
							<td>Servicio a cuarto</td>
							<td>$10.00</td>
							<td>Llevar comida a la habitación</td>
							<td>
								<a class="mytool iconPadding" href="GRegistrarServicio.html" data-original-title="Seleccionar habitación">
									<i class="fa fa-pencil"></i>
								</a>
								<a class="mytool iconPaddingCancel" href="#" data-original-title="Cancelar Reservación">
									<i class="fa fa-trash-o"></i>
								</a>
							</td>
						</tr>
						<tr>
							<th>2</th>
							<td>Lavandería</td>
							<td>$50.00 Kl</td>
							<td>Lavado de ropa</td>
							<td>
								<a class="mytool iconPadding" href="GRegistrarServicio.html" data-original-title="Seleccionar habitación">
									<i class="fa fa-pencil"></i>
								</a>
								<a class="mytool iconPaddingCancel" href="#" data-original-title="Cancelar Reservación">
									<i class="fa fa-trash-o"></i>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
				<!--Fin tabla-->
		</div> <!--fin Panel body-->
	</div>


	<input type="Button" class="btn btn-default" name="" value="Nuevo empleado" data-toggle="modal" data-target="#formularioModal">
    <!--Fin boton modal-->

    <!--Inicio modal-->
    <div id="formularioModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	
    	<!--Inicio dialog modal-->
    	<div class="modal-dialog" role="document">
    	
    		<!--Modal content-->
    		<div class="modal-content panel-success">

    			<!--Header-->
    			<div class="modal-header panel-heading">
			        <h5 class="modal-title" id="exampleModalLabel">Registro de Servicios</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>

    			<!--Body-->
    			<div class="modal-body panel-body">
    				<div id="alertaError">
                              			
            		</div>
    				<div class="row simplePadding15">
                        <div class="col-md-4">
                            <label for="nombre">Nombre servicio:</label>
                            <input id="nombre" type="text" class="form-control" name="" placeholder="Servicio" />
                            <input id="idServicio" type="text" name="" style="display: none;">
                        </div>
                        <div class="col-md-4">
                            <label for="precio">Precio:</label>
                            <input id="precio" type="money" class="form-control" name="" placeholder="Precio">
                        </div>
                    </div>
                    <div class="row simplePadding15">
                        <div class="col-md-8">
                            <label for="descripcion">Descripción:</label>
                            <textarea id="descripcion" rows="3" class="form-control" placeholder="Describe el servicio..."></textarea>
                        </div>
                    </div>
    			</div>

    			<!--Footer-->	
    			<div class="modal-footer">
    				<input class="btn btn-secondary" data-dismiss="modal" type="button" value="Cancelar">
                    <input id="btnGuardar" data-funcion="insertar" class="btn btn-success" type="button" value="Guardar">
    			</div>
    		</div>
    		<!--termina Mmodal content-->

    	</div>
    	<!--fín dialog modal-->

    </div>
    <!--fin modal-->
</section>

{include 'overall/Footer.tpl'}

<script>
      
     //cuando se cargue toda la página entra esta función
     $(document).ready(function(){

     	//cambiar valor a boton
     	function limpiarDatos(){
     		document.getElementById("nombre").value = "";
	        document.getElementById("precio").value = "";
	        document.getElementById("descripcion").value = "";
	        $("#btnGuardar").val("Registrar");
     	}

     	///Método que valida los campos
     	function ValidarCampos(){
     		var nombre = document.getElementById("nombre").value;

          	///Checamos que los campos obligatorios no esten vacíos
          	if(nombre == ""){
          		imprimirMensaje('class="alert alert-danger"', "Algunos campos no pueden estar vacíos.");
            	return false;
          	}

          	return true;
     	}



     	///Método para guardar
     	function PrepararDatos(){
     		var atributo = $("#btnGuardar").attr("data-funcion");
     		var form;

     		///validamos los campos
     		if(!ValidarCampos()){
     			return false;
     		}

     		 //recogiendo los datos del formulario
	        var nombre = document.getElementById("nombre").value;
     		var precio = document.getElementById("precio").value;
     		var descripcion = document.getElementById("descripcion").value;


     		///registramos
     		if(atributo == "insertar")
     		{
     			form = 'nombre=' + nombre + '&precio=' + precio + '&descripcion=' + descripcion;

     			GuardarDatos(form);
     		}else{ ///actualizamos
     			var idServicio = document.getElementById("idServicio").value;

     			form = 'idServicio=' + idServicio + '&nombre=' + nombre + '&precio=' + precio + '&descripcion=' + descripcion;

     			GuardarDatos(form);
     		}

     	}//// termina método


     	///Método que se ocupa de guardar los datos
     	function GuardarDatos(form){
     		///si elemente el elemento XMLHttpRequest se crea una instancia    Si no existe eso se va a activex
          	var connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

          	///Si hay algún cambio en la respuesta que obtengamos del PHP
          	connect.onreadystatechange = function(){

           
            ///el 4 significa que esta listo para entregar algo
            ///1 cuando esta apenas pidiendo la conexión
            if(connect.readyState == 4 && connect.status == 200){

            	///////////////////////////////////////////
            	///////////////////////////////////////////
                //lo que nos devuelva PHP eva a estar en esta variable
                if(parseInt(connect.responseText) == 1){
                  //conectado con éxito, se redirecciona
                  imprimirMensaje('class="alert alert-success"', '¡Felicidades!', "Registro correcto.");

                }else if (parseInt(connect.responseText) == 2){
                  //conectado con éxito, se redirecciona
                  imprimirMensaje('class="alert alert-danger"', '¡Ha ocurrido un error!', "No se pudo registrar.");
              }
                /////////////////////////////////////////
                /////////////////////////////////////////
                /////////////////////////////////////////

            }else if(connect.readyState != 4){
              //procesando
              imprimirMensaje('class="alert alert-warning"', 'procesando... '+ connect.responseText);
              //alert(connect.readyState + ' '+ connect.status + ' ' );
            }

          }/// FIN DEL ONREADYSTATE

        	//3 parametros, si es asincrona puede soportar muchas más peticiones
        	connect.open('POST', '?view=GCatalogoServicios', true);
        	connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        	connect.send(form);

     	}///fin método para guardar datos

     	///reconoce el boton click de guardar
     	document.getElementById('btnGuardar').addEventListener("click", PrepararDatos, false);

     });
     ///fin del document ready///////////

      function imprimirMensaje(clase, mensaje, mensaje2)
      {
        var result;

        result = '<div ' + clase + 'role="alert">';
        result += '<button type="button" class="close" data-dismiss="alert"></button>';
        result += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
        result += '<strong> '+ mensaje +' </strong>' + mensaje2 + '</div>';

        document.getElementById("alertaError").innerHTML = result;
      }

    </script>