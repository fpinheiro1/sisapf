<?php 

class Apf
{

  protected $id;
  protected $numero;
  protected $dia;
  protected $mes;
  protected $ano;


  function __construct()
  {
    require "Banco.php";
    $banco = new Banco();
  }

  public function setNumero($numero)
  {
    $this->numero = $numero;
  }

  public function setDia($dia)
  {
    $this->dia = $dia;
  }

  public function setMes($mes)
  {
    $this->mes = $mes;
  }

  public function setAno($ano)
  {
    $this->ano = $ano;
  }

  public function getNumero()
  {
    return $this->numero;
  }

  public function getDia()
  {
    return $this->dia;
  }
  public function getAno()
  {
    return $this->ano;
  }
  public function getMes()
  {
    return $this->mes;
  }
  public function getId()
  {
    return $this->id;
  }


  public function consultarBanco($numero, $ano)
  {
     
      //require "Banco.php";
    $banco = new Banco();

    $sql = "SELECT *  FROM apf where NR = $numero and ANO=$ano ";

    if ($res = $banco->consultar($sql)) {
      if ($res->fetchColumn() > 0) {

        echo "APF Existe";

      } else {
        echo "Apf não Existe";
      }
    }
  }

  public function selectApf($numero, $ano)
  {     
      //require "Banco.php";
    $banco = new Banco();
    $sql = "SELECT *  FROM apf where NR = $numero and ANO=$ano order by NR desc limit 1 ";

    foreach ($banco->consultar($sql) as $row) {
      $this->id = $row['ID'];
      $this->numero = $row['NR'];
      $this->dia = $row['DIA'];
      $this->mes = $row['MES'];
      $this->ano = $row['ANO'];

    }
  }


  public function criarApf($dia, $mes, $ano)
  {
  
      
    //  require "Banco.php";
    $banco = new Banco();

    $sql = "SELECT *  FROM apf where ANO ='$ano' order by NR desc limit 1 ";

    if ($res = $banco->consultar($sql)) {
      if ($res->fetchColumn() > 0) {

        foreach ($banco->consultar($sql) as $row) {
          $numeroanterior = $row['NR'];
          $this->numero = $numeroanterior + 1;
          $this->dia = $dia;
          $this->mes = $mes;
          $this->ano = $ano;

        }
      } else {
        $this->numero = 1;
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;

      }
    }
  }


  public function insertApf()
  {
    session_start();
    $_SESSION["apf"] = array("numero" => $this->numero, "ano" => $this->ano);

    $banco = new Banco();

    $sql2 = "insert into apf(NR, DIA, MES, ANO) values ('$this->numero','$this->dia', '$this->mes','$this->ano')";
    $banco->executar($sql2);
  }


}


/*$apf =new Apf();
$apf->consultarBanco(03,2019);
$apf->criarApf(02,12,2018);
$apf->salvarApf();*/
