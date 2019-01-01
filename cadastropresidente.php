
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
      <div class="container-fluid" >
      <div class="row">
      <h1 align=center>CADASTRO DO PRESIDENTE DA APF</h1>
      </div>
    <form action=exibir.php method=post>

        <div class="form-group">
          <?php 
          session_start();
          $numapf = $_SESSION['apf']['numero'];
          $anoapf = $_SESSION['apf']['ano'];

          require "class/apf.php";
          $apf = new Apf();
          $apf->buscarApfBanco($numapf, $anoapf);
          $idapf = $apf->getId();
          echo "<h1>$idapf</h1>"
   
          ?>
          <div class="row">
            <div class ="col-md-5">  
            <label for="Nome Completo:">Nome Completo:</label> 
            <input required type="text"  class="form-control" name=nomeCompleto 
            id="nomeCompleto"  placeholder="Nome Completo">
          </div>

          <div class="col-md-3">
            <label for="PostoGrad:">Posto / Graduação:</label> 
            <select id="postoGrad" class="form-control" placeholder="Selecione">
            <option>General de Exército</option>
            <option>General de Divisão</option>
            <option>General de Brigada</option>
            <option>Coronel</option>
            <option>Tenente Coronel</option>
            <option>Major</option>
            <option>Capitão</option>
            <option>1º Tenente</option>
            <option>2º Tenente</option>
            <option>Subtenente</option>
            <option>1º Sargento</option>
            <option>2º Sargento</option>
            <option selected>3º Sargento</option>
            <option>Cabo</option>
            <option>Soldado</option>
            </select>
            </div>

             <div class="col-md-4">
            <label for="Nome de Guerra:">Nome de Guerra:</label> 
            <input required type="text"  class="form-control" name=nomeGuerra 
            id="nomeGuerra"  placeholder="Nome de Guerra">
            </div>
       
          </div>
            

          <div class="row">

                    
            <div class="col-md-4">
            <label for="Identidade:">Identidade:</label> 
            <input required type="text"  class="form-control" name=identidade 
            id="identidade"  placeholder="Identidade">
            </div>

             <div class="form-group col-md-2">
            <label for="tipoIdentidade">Tipo:</label>
            <select id="tipoIdentidade" class="form-control">
            <option selected>Idt</option>
            <option>RA</option>
            </select>
           </div>

           <div class="col-md-2">
            <label for="Orgao Expedidor:">Orgão Expedidor:</label> 
            <input required type="text"  class="form-control" name=orgaoExpedidor 
            id="orgaoExpedidor"  placeholder="Orgão Expedidor">
            </div>

          </div>

          </div>


         
        <button type="submit" 
        class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </body>
</html>