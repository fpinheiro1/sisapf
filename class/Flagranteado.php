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



public function preencherFlagranteado($nome, $postgrad, $nomeguerra, $tipoidentidade, $tipoId, $orgExp,
                                     $nomePai, $nomeMae, $rua, $bairro, $cidade, $estado, $pais, $datanasc, $naturalidadeEstado, $naturalidadeCidade){
setNomeCompleto($nome);
setPostGrad($postgrad);

}

public function insertFlagranteado(){} 

    session_start();
    
    
    $banco = new Banco();
    $sql2 = "insert into militar(NOME, POSTOGRAD, NOMEGUERRA, TIPOID, IDENTIDADE, ORGEXP, NOMEPAI, NOMEMAE,RUA,BAIRRO,NUMCASA,CIDADE,ESTADO,PAIS,DATANASC,NATURALIDADEESTADO, NATURALIDADECIDADE, NUMAPF, ANOAPF, FUNCAO1) values ('$this->nomeCompleto','$this->postoGrad', '$this->nomeGuerra','$this->tipoIdentidade','$this->identidade','$this->orgExp','$this->nomePai','$this->nomeMae','$this->rua','$this->bairro','$this->numCasa','$this->cidade','$this->estado','$this->pais','$this->datanasc','$this->naturaldadeEstado','$this->naturalidadeCidade','$this->numApf','$this->anoApf','$this->funcao')";
    $banco->executar($sql2);
  }


//funçoes GET

public function getNomePai(){
    return $this->nomePai;
}

public function getNomeMae(){
    return $this->nomePai;
}

public function getRua($){
    return $this->$rua;
}

public function getBairro(){
    return $this->bairro;
}

public function getNumCasa(){
    return $this->numCasa;
}

public function getCidade(){
    return    $this->cidade;
}
public function getEstado(){
    return $this->estado;
}

public function getDatanasc(){
    return $this->datanasc;
}
public function getPais(){
    return $this->pais;
}
public function getNaturalidadeEstado(){
    return    $this->naturalidadeEstado;
}
public function getNaturalidadeCidade(){
    return $this->naturalidadeCidade;
}


//Funçoes SET
 
 public function setNomePai($nomePai){
     $this->nomePai = $nomepai;
 }

 public function setNomeMae($nomeMae){
    $this->nomePai = $nomeMae;
}

public function setRua($rua){
    $this->$rua = $rua;
}

public function setBairro($bairro){
    $this->bairro = $bairro;
}

public function setnumCasa($numCasa){
    $this->numCasa = $numCasa;
}

public function setCidade($cidade){
    $this->cidade = $cidade;
}
public function setEstado($estado){
    $this->estado = $estado;
}

public function setDatanasc($datanasc){
    $this->datanasc = $datanasc;
}
public function setPais($pais){
    $this->pais = $pais;
}
public function setNaturalidadeEstado($naturalidadeEstado){
    $this->naturalidadeEstado = $naturalidadeEstado;
}
public function setNaturalidadeCidade($naturalidadeCidade){
    $this->naturalidadeCidade = $naturalidadeCidade;
}
}

}
?>
