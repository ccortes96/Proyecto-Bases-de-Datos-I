<?php

	class ImagenProducto{

		private $idImagenProducto;
		private $imagenURL;
		private $Producto_idProducto;

		public function __construct($idImagenProducto=null,
					$imagenURL=null,
					$Producto_idProducto=null){
			$this->idImagenProducto = $idImagenProducto;
			$this->imagenURL = $imagenURL;
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getIdImagenProducto(){
			return $this->idImagenProducto;
		}
		public function setIdImagenProducto($idImagenProducto){
			$this->idImagenProducto = $idImagenProducto;
		}
		public function getImagenURL(){
			return $this->imagenURL;
		}
		public function setImagenURL($imagenURL){
			$this->imagenURL = $imagenURL;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function __toString(){
			return "IdImagenProducto: " . $this->idImagenProducto .
				" ImagenURL: " . $this->imagenURL .
				" Producto_idProducto: " . $this->Producto_idProducto;
		}
	}
?>
