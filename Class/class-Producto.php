<?php

	class Producto{

		private $idProducto;
		private $nombre;
		private $precioCosto;
		private $precioVenta;
		private $fechaElaboracion;
		private $fechaVencimiento;
		private $TipoProducto_idTipoProducto;
		private $Marca_idMarca;
		private $peso;
		private $alto;
		private $ancho;
		private $largo;
		private $color;

		public function __construct($idProducto=null,
					$nombre=null,
					$precioCosto=null,
					$precioVenta=null,
					$fechaElaboracion=null,
					$fechaVencimiento=null,
					$TipoProducto_idTipoProducto=null,
					$Marca_idMarca=null,
					$peso=null,
					$alto=null,
					$ancho=null,
					$largo=null,
					$color=null){
			$this->idProducto = $idProducto;
			$this->nombre = $nombre;
			$this->precioCosto = $precioCosto;
			$this->precioVenta = $precioVenta;
			$this->fechaElaboracion = $fechaElaboracion;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->TipoProducto_idTipoProducto = $TipoProducto_idTipoProducto;
			$this->Marca_idMarca = $Marca_idMarca;
			$this->peso = $peso;
			$this->alto = $alto;
			$this->ancho = $ancho;
			$this->largo = $largo;
			$this->color = $color;
		}
		public function getIdProducto(){
			return $this->idProducto;
		}
		public function setIdProducto($idProducto){
			$this->idProducto = $idProducto;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getPrecioCosto(){
			return $this->precioCosto;
		}
		public function setPrecioCosto($precioCosto){
			$this->precioCosto = $precioCosto;
		}
		public function getPrecioVenta(){
			return $this->precioVenta;
		}
		public function setPrecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
		public function getFechaElaboracion(){
			return $this->fechaElaboracion;
		}
		public function setFechaElaboracion($fechaElaboracion){
			$this->fechaElaboracion = $fechaElaboracion;
		}
		public function getFechaVencimiento(){
			return $this->fechaVencimiento;
		}
		public function setFechaVencimiento($fechaVencimiento){
			$this->fechaVencimiento = $fechaVencimiento;
		}
		public function getTipoProducto_idTipoProducto(){
			return $this->TipoProducto_idTipoProducto;
		}
		public function setTipoProducto_idTipoProducto($TipoProducto_idTipoProducto){
			$this->TipoProducto_idTipoProducto = $TipoProducto_idTipoProducto;
		}
		public function getMarca_idMarca(){
			return $this->Marca_idMarca;
		}
		public function setMarca_idMarca($Marca_idMarca){
			$this->Marca_idMarca = $Marca_idMarca;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($peso){
			$this->peso = $peso;
		}
		public function getAlto(){
			return $this->alto;
		}
		public function setAlto($alto){
			$this->alto = $alto;
		}
		public function getAncho(){
			return $this->ancho;
		}
		public function setAncho($ancho){
			$this->ancho = $ancho;
		}
		public function getLargo(){
			return $this->largo;
		}
		public function setLargo($largo){
			$this->largo = $largo;
		}
		public function getColor(){
			return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
		}
		public function __toString(){
			return "IdProducto: " . $this->idProducto .
				" Nombre: " . $this->nombre .
				" PrecioCosto: " . $this->precioCosto .
				" PrecioVenta: " . $this->precioVenta .
				" FechaElaboracion: " . $this->fechaElaboracion .
				" FechaVencimiento: " . $this->fechaVencimiento .
				" TipoProducto_idTipoProducto: " . $this->TipoProducto_idTipoProducto .
				" Marca_idMarca: " . $this->Marca_idMarca .
				" Peso: " . $this->peso .
				" Alto: " . $this->alto .
				" Ancho: " . $this->ancho .
				" Largo: " . $this->largo .
				" Color: " . $this->color;
		}


		#Funciones
		public static function listarTodos($conexion){

		}

		public function seleccionar($conexion){

		}

		public function insertarRegistro($conexion){

		}

		public  function actualizarRegistro($conexion){

		}

		public static function eliminarRegistro($conexion, $id){

		}

	}
?>
