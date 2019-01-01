<?php
//Banco1.php

class Banco{
private $pdo, $dsn; //dsn armazena o local do banco de dados

function __construct(){
 $this->dsn = 'mysql:dbname=bancoapf;host=127.0.0.1';
 $this->conecta();
}
function conecta(){
      $user = 'root'; // login de admin do banco
      $password =''; //senha do banco
      try {
$this->pdo = new PDO($this->dsn, $user, $password); //conecta no banco de dados
      } catch (PDOException $e) {
      echo 'Connection failed: ' . $e->getMessage();
      }//fim try
}//fim conecta
function executar($sql) {
 return $this->pdo->exec($sql);  // executa uma sql
}//fim executar
function consultar($sql){
   return  $this->pdo->query($sql); // executa uma consulta
}//fim consultar
}//fim classe