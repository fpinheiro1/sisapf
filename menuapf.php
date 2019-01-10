

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    
    <title>Menu APFD</title>
  </head>
  <body style ="background-color:rgba(20,53,35)">

      <div style ="background-color:rgba(105,105,236,0.2)" class="container-fluid" >
             <?php
            session_start();
            $num = $_SESSION["apf"]["numero"];
            $ano = $_SESSION["apf"]["ano"];
            $numapf = "$num / $ano";
            echo "<h1 style=display:flex;justify-content:center;align-items:center:>APF $numapf </h1>" ?>

        <!-- Cadastrar Envolvidos -->
             <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Cadastrar Envolvidos
  </button>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="cadastropresidente.php">Cadastrar Presidente</a>
    <a class="dropdown-item" href="#">Cadastrar Escrivão</a>
    <a class="dropdown-item" href="#">Cadastrar Condutor</a>
    <a class="dropdown-item" href="#">Cadastrar Testemunhas</a>
    <a class="dropdown-item" href="#">Cadastrar Flagranteado</a>
  </div>
</div>

  </div>
</div>
  
     
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="js/bootstrap.bundle.min.js "  crossorigin="anonymous"></script>
  </body>
</html>