<?php

	class ProductoPorSubdepartamento{

		private $Producto_idProducto;
		private $Subdepartamento_idSubdepartamento;

		public function __construct($Producto_idProducto=null,
					$Subdepartamento_idSubdepartamento=null){
			$this->Producto_idProducto = $Producto_idProducto;
			$this->Subdepartamento_idSubdepartamento = $Subdepartamento_idSubdepartamento;
		}
		public function getProducto_idProducto(){
			return $this->Producto_idProducto;
		}
		public function setProducto_idProducto($Producto_idProducto){
			$this->Producto_idProducto = $Producto_idProducto;
		}
		public function getSubdepartamento_idSubdepartamento(){
			return $this->Subdepartamento_idSubdepartamento;
		}
		public function setSubdepartamento_idSubdepartamento($Subdepartamento_idSubdepartamento){
			$this->Subdepartamento_idSubdepartamento = $Subdepartamento_idSubdepartamento;
		}
		public function __toString(){
			return "Producto_idProducto: " . $this->Producto_idProducto .
				" Subdepartamento_idSubdepartamento: " . $this->Subdepartamento_idSubdepartamento;
		}
	}
?>
