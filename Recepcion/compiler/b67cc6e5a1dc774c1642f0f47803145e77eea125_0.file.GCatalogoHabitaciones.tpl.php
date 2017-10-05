<?php
/* Smarty version 3.1.31, created on 2017-10-06 00:18:38
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\catalogos\GCatalogoHabitaciones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d6afbe36e869_75071463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67cc6e5a1dc774c1642f0f47803145e77eea125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\catalogos\\GCatalogoHabitaciones.tpl',
      1 => 1507241913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/Header.tpl' => 1,
    'file:overall/Nav.tpl' => 1,
    'file:overall/Footer.tpl' => 1,
  ),
),false)) {
function content_59d6afbe36e869_75071463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>


<?php $_smarty_tpl->_subTemplateRender('file:overall/Nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="container">
			
	<div class="panel panel-success">

		<div class="panel-heading"> <!--titulo-->
        	<h4>Catalogo de habitaciones</h4>
    	</div>

    	<div class="panel-body"> <!--Panel body-->
    		<table class="table table-hover simplePadding15">
    				<thead>
    					<tr class="info">
    						<th>N°. Habitación</th>
    						<th>Tipo habitación</th>
    						<th>Personas</th>
    						<th>Personas extra</th>
    						<th>Estado</th>
    						<th>Acción</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<th>115</th>
    						<td>Matrimonial</td>
    						<td>2</td>
    						<td>3</td>
    						<td>Disponible</td>
    						<td>
    							<a class="mytool iconPadding" href="GRegistrarDatosHabitacion.html" data-original-title="Seleccionar habitación">
    								<i class="fa fa-pencil"></i>
    							</a>
    							<a class="mytool iconPaddingCancel" href="#" data-original-title="Cancelar Reservación">
    								<i class="fa fa-trash-o"></i>
    							</a>
							</td>
    					</tr>
    					<tr>
    						<th>116</th>
    						<td>Matrimonial</td>
    						<td>2</td>
    						<td>3</td>
    						<td>Ocupado</td>
    						<td>
    							<a class="mytool iconPadding" href="GRegistrarDatosHabitacion.html" data-original-title="Seleccionar habitación">
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

	<!--Boton modal-->
    <input type="Button" class="btn btn-default" name="" value="Nueva habitación" data-toggle="modal" data-target="#formularioModal">
    <!--Fin boton modal-->

    <!--Inicio modal-->
    <div id="formularioModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	
    	<!--Inicio dialog modal-->
    	<div class="modal-dialog" role="document">
    	
    		<!--Modal content-->
    		<div class="modal-content panel-success">

    			<!--Header-->
    			<div class="modal-header panel-heading">
			        <h5 class="modal-title" id="exampleModalLabel">Registro de habitaciones</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>

    			<!--Body-->
    			<div class="modal-body panel-body">
    			 	<div id="alertaError">
                        
                    </div>
                    <ul class="nav nav-tabs"> <!--Menu-->
                        <li class="active"><a data-toggle="tab" href="#SectionNumeraciones">Numeraciones</a></li>
                        <li><a data-toggle="tab" href="#SectionFoto">Foto</a></li>
                        <li><a data-toggle="tab" href="#SectionDatosGenerales">Datos generales</a></li>
                    </ul> <!--fín principal-->

                <!--Tablas secciones-->
                <div class="tab-content">
                
                    <!--Seccion de reservas-->
                    <div id="SectionNumeraciones" class="tab-pane fade in active">
                        <div class="row simplePadding15">
                            <div class="col-md-4">
                                <label>Elija una serie:</label>
                                <select id="serieNumero" class="form-control form-control-sm" onclick="listarNumCuartos();">
                                    <option value="null"></option>
                                    <option value="101">101 - 110</option>
                                    <option value="201">201 - 210</option>
                                    <option value="301">301 - 310</option>
                                    <option value="401">401 - 410</option>
                                    <option value="501">501 - 510</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="numHabitacion">Habitación disponible:</label>
                                <select id="numHabitacion" class="form-control form-control-sm">
                                    
                                </select>
                                <input id="idHabitacion" type="text" name="" style="display: none;">
                            </div>
                        </div>
                        <div class="row simplePadding15">
                            <div class="col-md-4">
                                <label for="numCamas">Numero de camas:</label>
                                <input id="numCamas" type="number" name="" class="form-control" min="0" max="3">
                            </div>
                            <div class="col-md-4">
                                <label for="numPersonas">Numero de personas:</label>
                                <input id="numPersonas" type="number" name="" class="form-control" min="0" max="2">
                            </div>
                        </div>
                        <div class="row simplePadding15">
                            <div class="col-md-4">
                                <label for="maxPersonasExtra">Personas extras:</label>
                                <input id="maxPersonasExtra" type="number" name="" class="form-control" min="0" max="3">
                            </div>
                        </div>
                    </div>
                    <!--fin de seccion de reservas-->

                    <!--Seccion de activas-->
                    <div id="SectionFoto" class="tab-pane fade"> 
                        <img  id="rutaFoto" class="uploadImg" value=""  data-value="datosBD" src="../../Content/images/image-enterprise.png" style="height: 300px;" />
                    
                        <input type="file" class="upload" id="UploadImage" />
                        <label for="UploadImage"><strong>Foto del cuarto</strong></label>
                    </div>
                    <!--Fin d seccion de activas-->

                    <!--Seccion de canceladas-->
                    <div id="SectionDatosGenerales" class="tab-pane fade">
                        
                        <div class="row simplePadding15">
                            <div class="col-md-4">
                                <label for="tipo_habitacion_idTipoHabitacion">Tipo habitación</label>
                                <select id="tipo_habitacion_idTipoHabitacion" class="form-control form-control-sm">
                                    <option value="null">Seleccione tipo</option>
                                    <option value="1">Sencilla</option>
                                    <option value="2">Doble</option>
                                    <option value="3">Cuadruple</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tipo_cama_idTipoCama">Tipo cama</label>
                                <select id="tipo_cama_idTipoCama" class="form-control form-control-sm">
                                    <option value="null">Seleccione tipo</option>
                                    <option value="1">Individual</option>
                                    <option value="2">Matrimonial</option>
                                    <option value="3">Kingsize</option>
                                </select>
                            </div>

                        </div>
                        <div class="row simplePadding15">
                            <div class="col-md-4">
                                <label for="precio">Precio:</label>
                                <input id="precio" type="money" name="" class="form-control" min="0">
                            </div>
                        </div>
                    </div>
                    <!--Fin de seccion de canceladas-->


                </div>
                <!--Fin de tablas secciones-->

    			</div>
                <!--fin body-->

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

<?php $_smarty_tpl->_subTemplateRender('file:overall/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    
    //cuando se cargue toda la página entra esta función
     $(document).ready(function(){

        //cambiar valor a boton
        function limpiarDatos(){
            document.getElementById("serieNumero").value = "null";
            document.getElementById("numCamas").value = "null";
            document.getElementById("tipo_habitacion_idTipoHabitacion").value = "null";
            document.getElementById("tipo_cama_idTipoCama").value = "null";
            $("#Imagen").attr("src", "");
            document.getElementById("precio").value = "";
            document.getElementById("numPersonas").value = "";
            document.getElementById("maxPersonasExtra").value = "";
            document.getElementById("numHabitacion").value = "";
            $("#btnGuardar").attr('data-funcion','insertar');
        }

        ///Método que valida los campos
        function ValidarCampos(){
            var numHabitacion = document.getElementById("numHabitacion").value;
            var numPersonas = document.getElementById("numPersonas").value;
            var maxPersonasExtra = document.getElementById("maxPersonasExtra").value;
            var precio = document.getElementById("precio").value;

            ///Checamos que los campos obligatorios no esten vacíos
            if(numHabitacion == "null" && numPersonas == "null" && maxPersonasExtra == "null" && precio == "null"){
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
            var numCamas = document.getElementById("numCamas").value;
            var numPersonas = document.getElementById("numPersonas").value;
            var maxPersonasExtra = document.getElementById("maxPersonasExtra").value;
            var numHabitacion = document.getElementById("numHabitacion").value;
            var precio = document.getElementById("precio").value;
            var rutaFoto = document.getElementById("rutaFoto").value;
            var tipo_habitacion_idTipoHabitacion = document.getElementById("tipo_habitacion_idTipoHabitacion").value;
            var tipo_cama_idTipoCama = document.getElementById("tipo_cama_idTipoCama").value;


            ///registramos
            if(atributo == "insertar")
            {
                form = 'numCamas=' + numCamas + '&numPersonas=' + numPersonas + '&maxPersonasExtra=' + maxPersonasExtra + '&numHabitacion=' + numHabitacion + '&precio=' + precio + '&rutaFoto=' + rutaFoto + '&tipo_habitacion_idTipoHabitacion=' + tipo_habitacion_idTipoHabitacion + '&tipo_cama_idTipoCama=' + tipo_cama_idTipoCama;

                GuardarDatos(form);
            }else{ ///actualizamos
                var idPromocion = document.getElementById("idPromocion").value;

                form = 'numCamas=' + numCamas + '&numPersonas=' + numPersonas + '&maxPersonasExtra=' + maxPersonasExtra + '&numHabitacion=' + numHabitacion + '&precio=' + precio + '&rutaFoto=' + rutaFoto + '&tipo_habitacion_idTipoHabitacion=' + tipo_habitacion_idTipoHabitacion + '&tipo_cama_idTipoCama=' + tipo_cama_idTipoCama;

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
              }else if(parseInt(connect.responseText) == 3){
                    imprimirMensaje('class="alert alert-danger"', '¡Ha ocurrido un error!',"El cuarto ya existe.");
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
            connect.open('POST', '?view=GCatalogoHabitaciones', true);
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

    ////Subir imagen
    $("#UploadImage").on('change', function () {

        var reader = new FileReader();
        if (this.files && (fileImg = this.files[0])) {

            reader.onload = function (e) {
                statusImg = true;
                $("#rutaFoto").attr("src", e.target.result);
                //alert(fileImg.name + " " + fileImg.size);
            }

            reader.readAsDataURL(fileImg);
        }

    });

    function listarNumCuartos(){
        var tipoNumeroSerie = document.getElementById("serieNumero").value;
        var myComboBox = document.getElementById("numHabitacion");
        var numLength;
         var opt;

        if(tipoNumeroSerie == "null")
            return;

        if(myComboBox.options.length > 0){ 
            if (myComboBox.options.length > 0)//limpiamos
                myComboBox.options.length = 0;
        }

        opt = document.createElement("option"); //creo la opción
        opt.textContent = "Selecciona número disponible"; //pongo mensaje normal
        opt.value = null; //valor nulo
        myComboBox.appendChild(opt);

        for(var x = 1; x < 10; x++){
            
            tipoNumeroSerie = parseInt(tipoNumeroSerie) + 1;
            opt = document.createElement("option");
            opt.textContent = tipoNumeroSerie;
            opt.value = tipoNumeroSerie;
            myComboBox.appendChild(opt);
            


        }
    }
    ////fin subir imagen
<?php echo '</script'; ?>
><?php }
}
