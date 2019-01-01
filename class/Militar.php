<?php

class Militar {

	protected $nomeCompleto;
	protected $postoGrad;
	protected $nomeGuerra;
	protected $tipoIdentidade;
	protected $identidade;
	protected $orgExp;
	
	public function setNomeCompleto($nomeCompleto){
		$this->nomeCompleto = $nomeCompleto;
	
	}

	
	public function setPostGrad($postGrad){
		$this->postGrad = $postGrad;
	
	}

	public function setNomeGuerra($nomeguerra){
		$this->nomeGuerra = $nomeguerra;
	
	}

	public function getNomeGuerra(){
		return $this->nomeGuerra;

	
	}
}
?>