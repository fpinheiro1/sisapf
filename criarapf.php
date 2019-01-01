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
      <h1 align=center>Nova APF</h1>
      </div>
    <form action=salvarapf.php method=post>

        <div class="form-group">

          <div class="row">
            <div class ="col-md-2">  
            <label for="Dia:">Dia:</label> 
            <input required type="text"  class="form-control" name=dia 
            id="dia"  placeholder="05">
          </div>
      
            <div class ="col-md-2">  
            <label for="Mês:">Mês:</label> 
            <input required type="text"  class="form-control" name=mes 
            id="mes"  placeholder="02">
          </div>
         
            <div class ="col-md-2">  
            <label for="ano:">Ano:</label> 
            <input required type="text"  class="form-control" name=ano 
            id="ano"  placeholder="2000">
          </div>

          <button type="submit" 
        class="btn btn-primary">Criar APF</button>

          
      </form>
    </div>
  </body>
</html>