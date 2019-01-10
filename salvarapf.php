<?php

require "class/apf.php";


$apf = new APF;

$apf->criarApf($_POST['dia'], $_POST['mes'],$_POST['ano']);
$apf->insertApf();
$apf->consultarBanco($apf->getNumero(),$_POST['ano']);



echo '<script>
        
           window.location.href = "http://localhost/sisapf/menuapf.php";
      </script>';

    echo $_SESSION["numeroapf"];