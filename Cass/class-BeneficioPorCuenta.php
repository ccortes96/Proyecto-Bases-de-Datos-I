<?php

	class BeneficioPorCuenta{

		private $TipoCuenta_idTipoCuenta;
		private $Beneficio_idBeneficio;
		private $estado;

		public function __construct($TipoCuenta_idTipoCuenta=null,
					$Beneficio_idBeneficio=null,
					$estado=null){
			$this->TipoCuenta_idTipoCuenta = $TipoCuenta_idTipoCuenta;
			$this->Beneficio_idBeneficio = $Beneficio_idBeneficio;
			$this->estado = $estado;
		}
		public function getTipoCuenta_idTipoCuenta(){
			return $this->TipoCuenta_idTipoCuenta;
		}
		public function setTipoCuenta_idTipoCuenta($TipoCuenta_idTipoCuenta){
			$this->TipoCuenta_idTipoCuenta = $TipoCuenta_idTipoCuenta;
		}
		public function getBeneficio_idBeneficio(){
			return $this->Beneficio_idBeneficio;
		}
		public function setBeneficio_idBeneficio($Beneficio_idBeneficio){
			$this->Beneficio_idBeneficio = $Beneficio_idBeneficio;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function __toString(){
			return "TipoCuenta_idTipoCuenta: " . $this->TipoCuenta_idTipoCuenta .
				" Beneficio_idBeneficio: " . $this->Beneficio_idBeneficio .
				" Estado: " . $this->estado;
		}
	}
?>
