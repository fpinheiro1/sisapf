<?php

class Militar {

	protected $nomeCompleto;
	protected $postoGrad;
	protected $nomeGuerra;
	protected $tipoIdentidade;
	protected $identidade;
	protected $orgExp;
	protected $numApf;
	protected $anoApf;
	
	public function setNomeCompleto($nomeCompleto){
		$this->nomeCompleto = $nomeCompleto;
	
	}

	
	public function setPostGrad($postGrad){
		$this->postGrad = $postGrad;
	
	}

	public function setNomeGuerra($nomeguerra){
		$this->nomeGuerra = $nomeguerra;
	}
	public function setIdentidade($nomeguerra){
		$this->nomeGuerra = $nomeguerra;
	}
	public function setTipoIdentidade($nomeguerra){
		$this->nomeGuerra = $nomeguerra;
	}
	public function setNomeGuerra($nomeguerra){
		$this->nomeGuerra = $nomeguerra;
	}

	public function getNomeGuerra(){
		return $this->nomeGuerra;

	
	}
}
?>