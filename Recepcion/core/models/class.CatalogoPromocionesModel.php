<?php  

	include "entidades/PromocionesEntidad.php";

	class CatalogoPromocionesModel{


		////Registrar/////
		public function Registro(){
			try {

				//definimos que los datos no estén vacíos
				if(!empty($_POST['descripcion'])){

					$db = new Conexion();
					
					///creo un objeto de mi clase ENTIDAD
					$promociones = new PromocionesEntidad();

					//$this->correo = $db->real_escape_string($_POST['correo']);
					////voy metiendo los datos a mi objeto
					
					$promociones->descripcion = $db->real_escape_string($_POST['descripcion']);
					$promociones->fechaInicial = $db->real_escape_string($_POST['fechaInicial']);
					$promociones->fechaTermino = $db->real_escape_string($_POST['fechaTermino']);
					$promociones->descuento = $db->real_escape_string($_POST['descuento']);


				 	//Registramos los datos
				 	$sql = $db->query("INSERT INTO promociones(descripcion, fechaInicial, fechaTermino, descuento) VALUES ('$promociones->descripcion','$promociones->fechaInicial','$promociones->fechaTermino','promociones->descuento');");

				 		if(!$sql)
				 			echo 2;
				 		else
							echo 1; //si todo esta bien imprime esto
				 		
				 		$db->liberar($sql);
			 			$db->close();

			 		///primer if de datos vacíos
				 } else{
					throw new Exception("Error: Datos vacíos.");
				 }////else de datos vacíos

			
			////fin try 
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}////fin registro


		////Modificar/////
		public function Modificar(){
			
		}

		////Recuperar/////
		public function Recuperar(){

		}

		////Eliminar//////
		public function Eliminar(){

		}


	}////termina clase

?>