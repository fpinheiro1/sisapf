


<?php
require "class/Flagranteado.php";

$flagranteado = new Flagranteado();
 

$flagranteado->setNomeGuerra($_POST['nomeguerra']);

echo $flagranteado->getNomeGuerra();

?>