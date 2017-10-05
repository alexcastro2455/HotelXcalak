<?php  

	class AsignaciónLimpiezaEntidad{

		public $idAsignacion;

		function get_idAsignacion()
		{
			return $this->idAsignacion;
		}

		function set_idAsignacion($idAsignacion)
		{
			$this->idAsignacion = $idAsignacion;
		}


		////////////////////////
		public $asignado;

		function get_asignado()
		{
			return $this->asignado;
		}

		function set_asignado($asignado)
		{
			$this->asignado = $asignado;
		}


		////////////////////////
		public $descripcion;

		function get_descripcion()
		{
			return $this->descripcion;
		}

		function set_descripcion($descripcion)
		{
			$this->descripcion = $descripcion;
		}


		////////////////////////
		public $hora;

		function get_hora()
		{
			return $this->hora;
		}

		function set_hora($hora)
		{
			$this->hora = $hora;
		}


		////////////////////////
		public $fecha;

		function get_fecha()
		{
			return $this->fecha;
		}

		function set_fecha($fecha)
		{
			$this->fecha = $fecha;
		}


		////////////////////////
		public $status_tarea_idStatusTarea;

		function get_status_tarea_idStatusTarea()
		{
			return $this->status_tarea_idStatusTarea;
		}

		function set_status_tarea_idStatusTarea($status_tarea_idStatusTarea)
		{
			$this->status_tarea_idStatusTarea = $status_tarea_idStatusTarea;
		}


		//////////////////////////
		public $empleados_idEmpleado;

		function get_empleados_idEmpleado()
		{
			return $this->empleados_idEmpleado;
		}

		function set_empleados_idEmpleado($empleados_idEmpleado)
		{
			$this->empleados_idEmpleado = $empleados_idEmpleado;
		}


		//////////////////////////
		public $habitaciones_idHabitacion;

		function get_habitaciones_idHabitacion()
		{
			return $this->habitaciones_idHabitacion;
		}

		function set_habitaciones_idHabitacion($habitaciones_idHabitacion)
		{
			$this->habitaciones_idHabitacion = $habitaciones_idHabitacion;
		}

	}

?>