{include 'overall/Header.tpl'}

<body>


	{include 'overall/Nav.tpl'}

		<section class="container panel panel-success">
				
			<div class="panel-heading"> <!--titulo-->
            	<h4>Catalogo de empleados</h4>
        	</div>

        	<div class="panel-body"> <!--Panel body-->
        		<table class="table table-hover simplePadding15">
	    				<thead>
	    					<tr class="info">
	    						<th>Nombre</th>
	    						<th>Correo</th>
	    						<th>Tipo de empleado</th>
	    						<th>Dirección</th>
	    						<th>Estatus</th>
	    						<th>Acción</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					<tr>
	    						<th>Giancarlo</th>
	    						<td>giancarlo@hotmil.com</td>
	    						<td>Mucama</td>
	    						<td>Av. Siempre viva</td>
	    						<td>Activo</td>
	    						<td>
	    							<a class="mytool iconPadding" href="GRegistrarEmpleado.html" data-original-title="Seleccionar habitación">
	    								<i class="fa fa-pencil"></i>
	    							</a>
	    							<a class="mytool iconPaddingCancel" href="#" data-original-title="Cancelar Reservación">
	    								<i class="fa fa-trash-o"></i>
	    							</a>
    							</td>
	    					</tr>
	    					<tr>
	    						<th>Hernandez</th>
	    						<td>hdz@hotmail.com</td>
	    						<td>Limpieza</td>
	    						<td>Av. 8 de Abril</td>
	    						<td>Activo</td>
	    						<td>
	    							<a class="mytool iconPadding" href="GRegistrarEmpleado.html" data-original-title="Seleccionar habitación">
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



        	 		<!--Boton modal-->
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
							        <h5 class="modal-title" id="exampleModalLabel">Registro de Empleados</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
						      	</div>

                    			<!--Body-->
                    			<div class="modal-body panel-body">
                    				<div id="alertaError">
                              			
                            		</div>
                    				<div class="row">
					                    <div class="col-md-5">
					                        <h4><span class="glyphicon glyphicon-user"></span><b><u> Datos personales</u></b></h4>
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-5">
					                        <label for="nombre">Nombre**:</label>
					                        <input id="nombre" type="text" class="form-control" placeholder="Nombre"/>
					                        <input id="idEmpleado" type="text" style="display: none;" />
					                    </div>
					                    <div class="col-md-5">
					                        <label for="apellido">Apellido:</label>
					                        <input id="apellido" type="text" class="form-control" name="nombre" placeholder="Nombre" />
					                    </div>
					                </div>
					                <br>
					                <div class="row">
					                    <div class="col-md-6">
					                        <label for="direccion">Dirección:</label>
					                        <input id="direccion" type="text" class="form-control" name="direccion"  placeholder="Dirección">
					                    </div>
				                     	<div class="col-md-3">
					                        <label for="lugarOrigen">Ciudad:</label>
					                        <input id="lugarOrigen" type="text" class="form-control" name="pais" />
					                    </div>
					                    <div class="col-md-3">
					                        <label for="estadoOrigen">Estado:</label>
					                        <input id="estadoOrigen" type="text" class="form-control" name="estado" placeholder="Estado">
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-5">
					                        <h4><span class="glyphicon glyphicon-envelope"></span><b><u> Contacto</u></b></h4>
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-5">
					                        <label for="correo">Correo**:</label>
					                        <input id="correo" type="email" class="form-control" name="correo" placeholder="Correo">
					                    </div>
					                    <div class="col-md-5">
					                        <label for="telefono">Teléfono:</label>
					                        <input id="telefono" type="number" class="form-control" name="telefono" placeholder="telefono">
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-5">
					                        <h4><span class="glyphicon glyphicon-lock"></span><b><u>Cambiar contraseña</u></b></h4>
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-5">
					                        <label for="password">Contraseña**:</label>
					                        <input id="password" type="password" class="form-control" name="contrasena"  placeholder="Contraseña">
					                    </div>
					                    <div class="col-md-5">
					                        <label for="confirma">Confirmar contraseña**:</label>
					                        <input id="confirma"  type="password" class="form-control" name="confirma" placeholder="Confirmar contraseña">
					                    </div>
					                </div>
					                <br />
					                <div class="row">
					                    <div class="col-md-5">
					                        <label for="puestos_trabajo_idPuestoTrabajo">Puesto:</label>
					                        <select id="puestos_trabajo_idPuestoTrabajo" class="form-control form-control-sm">
				                                <option value="0">Seleccione tipo</option>
				                                <option value="1">Gerente</option>
				                                <option value="2">Recepcionista</option>
				                                <option value="3">Mucama</option>
				                            </select>
					                    </div>
					                    <div class="col-md-5">
					                        <label for="tipo_usuario_idTipoUsuario">Tipo de empleado:</label>
					                        <select id="tipo_usuario_idTipoUsuario" class="form-control form-control-sm">
				                                <option value="0">Seleccione tipo</option>
				                                <option value="1">Super Admin</option>
				                                <option value="2">Gerente</option>
				                                <option value="3">Recepción</option>
				                                <option value="4">Limpieza</option>
				                            </select>
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
	        document.getElementById("apellido").value = "";
	        document.getElementById("direccion").value = "";
	        document.getElementById("lugarOrigen").value = "";
	        document.getElementById("estadoOrigen").value = "";
	        document.getElementById("correo").value = "";
	        document.getElementById("telefono").value = "";
	        document.getElementById("password").value = "";
	        document.getElementById("confirma").value = "";
	        $('.Select option[value=0]').prop('selected', true);
	        $("#btnGuardar").val("Registrar");
     	}

     	///Método que valida los campos
     	function ValidarCampos(){
     		var nombre = document.getElementById("nombre").value;
     		var correo = document.getElementById("correo").value;
     		var password = document.getElementById("password").value;
          	var confirma = document.getElementById("confirma").value;

          	///Checamos que los campos obligatorios no esten vacíos
          	if(nombre == "" && corre == "" && password == "" && confirma == ""){
          		imprimirMensaje('class="alert alert-danger"', "Algunos campos no pueden estar vacíos.");
            	return false;
          	}

          	///checamos que las contraseñas sean iguales
          	if(password !== confirma)
          	{
          		imprimirMensaje('class="alert alert-danger"', "La contraseña no coincide.");
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
	         var apellido = document.getElementById("apellido").value;
	         var direccion = document.getElementById("direccion").value;
	         var lugarOrigen = document.getElementById("lugarOrigen").value;
	         var estadoOrigen = document.getElementById("estadoOrigen").value;
	         var correo = document.getElementById("correo").value;
	         var telefono = document.getElementById("telefono").value;
	         var password = document.getElementById("password").value;
	         var confirma = document.getElementById("confirma").value;
	         var tipo_usuario = document.getElementById("tipo_usuario_idTipoUsuario").value;
	         var puestos_trabajo = document.getElementById("puestos_trabajo_idPuestoTrabajo").value;


     		///registramos
     		if(atributo == "insertar")
     		{
     			form = 'nombre=' + nombre + '&apellido=' + apellido + '&direccion=' + direccion + '&lugarOrigen=' + lugarOrigen + '&estadoOrigen=' + estadoOrigen + '&correo=' + correo + '&telefono=' + telefono + '&password=' + password + '&tipo_usuario_idTipoUsuario=' + tipo_usuario + '&puestos_trabajo_idPuestoTrabajo=' + puestos_trabajo;

     			GuardarDatos(form);
     		}else{ ///actualizamos
     			var idEmpleado = document.getElementById("idEmpleado").value;

     			form = 'idEmpleado=' + idEmpleado + '&nombre=' + nombre + '&apellido=' + apellido + '&direccion=' + direccion + '&lugarOrigen=' + lugarOrigen + '&estadoOrigen=' + estadoOrigen + '&correo=' + correo + '&telefono=' + telefono + '&password=' + password + '&tipo_usuario=' + tipo_usuario + '&puestos_trabajo=' + puestos_trabajo;

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
                  imprimirMensaje('class="alert alert-success"', '¡Ha ocurrido un error!', "No se pudo registrar.");
              }
                else if(parseInt(connect.responseText) == 3){
                	imprimirMensaje('class="alert alert-danger"', '¡Ha ocurrido un error!',"El correo ya existe.");
                }
                /////////////////////////////////////////
                /////////////////////////////////////////
                /////////////////////////////////////////

            }else if(connect.readyState != 4){
              //procesando
              imprimirMensaje('class="alert alert-warning"', 'procesando... '+ connect.responseText);
              alert(connect.readyState + ' '+ connect.status + ' ' );
            }

          }/// FIN DEL ONREADYSTATE

        	//3 parametros, si es asincrona puede soportar muchas más peticiones
        	connect.open('POST', '?view=GCatalogoEmpleados', true);
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