<?php
require "Militar.php";


class Flagranteado extends Militar{

 protected $nomePai;
 protected $nomeMae;
 protected $rua;
 protected $bairro;
 protected $numCasa;
 protected $cidade;
 protected $estado;
 protected $pais;
 protected $datanasc;
 protected $naturalidaEstado;
 protected $naturalidadeCidade;


 public function setNomePai($nomepai){
     $this->nomePai = $nomepai;
 }
 
 public function getNomePai(){
    return $this->nomePai;
}

}

/*$flagranteado = new Flagranteado();
 

$flagranteado->setNomeGuerra($_POST['nomeguerra']);

echo $flagranteado->getNomeGuerra();
*/
?>
