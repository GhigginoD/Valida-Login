<?php

$data = date('Y/m/d');
$diasDaSemana = array(1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 =>'Quinta', 5 => 'Sexta', 6 => 'Sabado', 0 => 'Domingo'); 
$diaDoMes = array (1 => 'Janeiro', 2 => 'fevereiro', 3 => 'Março', 4 =>'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'); 


$data = str_replace('/','-',$data); 
$hoje = getdate(strtotime($data));


$dia = $hoje["mday"];
$mes = $hoje["mon"];
$nomeMes = $diaDoMes[$mes];
$ano = $hoje["year"];

$diaDaSemana = $hoje["wday"];
$diaSemana = $diasDaSemana[$diaDaSemana];

switch ($diaDaSemana){
  
  case 1:
    $dia0 = $hoje["mday"];
    $dia1 = $hoje["mday"]+1;
    $dia2 = $hoje["mday"]+2;
    $dia3 = $hoje["mday"]+3;
    $dia4 = $hoje["mday"]+4;
    $dia5 = $hoje["mday"]+5;
    $dia6 = $hoje["mday"]+6;
    break;
  case 2:
    $dia0 = $hoje["mday"]-1;
    $dia1 = $hoje["mday"];
    $dia2 = $hoje["mday"]+1;
    $dia3 = $hoje["mday"]+2;
    $dia4 = $hoje["mday"]+3;
    $dia5 = $hoje["mday"]+4;
    $dia6 = $hoje["mday"]+5;
    break;
  case 3:
    $dia0 = $hoje["mday"]-2;
    $dia1 = $hoje["mday"]-1;
    $dia2 = $hoje["mday"];
    $dia3 = $hoje["mday"]+1;
    $dia4 = $hoje["mday"]+2;
    $dia5 = $hoje["mday"]+3;
    $dia6 = $hoje["mday"]+4;
  case 4:
    $dia0 = $hoje["mday"]-3;
    $dia1 = $hoje["mday"]-2;
    $dia2 = $hoje["mday"]-1;
    $dia3 = $hoje["mday"];
    $dia4 = $hoje["mday"]+1;
    $dia5 = $hoje["mday"]+2;
    $dia6 = $hoje["mday"]+3;
    break;
  case 5:
    $dia0 = $hoje["mday"]-4;
    $dia1 = $hoje["mday"]-3;
    $dia2 = $hoje["mday"]-2;
    $dia3 = $hoje["mday"]-1;
    $dia4 = $hoje["mday"];
    $dia5 = $hoje["mday"]+1;
    $dia6 = $hoje["mday"]+2;
    break;
  case 6:
    $dia0 = $hoje["mday"]-5;
    $dia1 = $hoje["mday"]-4;
    $dia2 = $hoje["mday"]-3;
    $dia3 = $hoje["mday"]-2;
    $dia4 = $hoje["mday"]-1;
    $dia5 = $hoje["mday"];
    $dia6 = $hoje["mday"]+1;
    break;
  case 0:
    $dia0 = $hoje["mday"]-6;
    $dia1 = $hoje["mday"]-5;
    $dia2 = $hoje["mday"]-4;
    $dia3 = $hoje["mday"]-3;
    $dia4 = $hoje["mday"]-2;
    $dia5 = $hoje["mday"]-1;
    $dia6 = $hoje["mday"];
    break;
}
 
?>

<html>
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap-4.3.1/dist/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>

<body>
  
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="login.html">Login </a>
    </li>
    <li class="nav-item">
     <a class="nav-link active" href="pag.php">Calendario Semanal</a>
   </li>
  </ul>

  <div class="container">
    <h3> <?php  echo $nomeMes ?> </h3>
    <div class="row ">
      <div class="col-3">

        <div class="card-body">
          <div class="card-title">
            <h3>Segunda-feira<?php echo "$dia0" ?> </h3>
         </div>
          <form class="adiciona" action="calendario.php" method="GET">
            
            <input type="hidden" name="dia" value ="<?= $data ?>">
            <input type="hidden" name="data" value="segunda-feira"> 

            <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
            <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
            <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
            <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

            <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
          </form>
        </div>
      </div>

      <br>
      <br>

      <div class="col-3">

        <div class="card-body">
          <div class="card-title">
            <h3>Terça-feira  <?php echo $dia1  ?></h3> 
            
          </div>
          <form class="adiciona" action="calendario.php" method="GET">
            
            <input type="hidden" name="dia" value ="<?= $data ?>">
            <input type="hidden" name="data" value ="terça-feira">

            <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
            <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
            <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
            <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

            <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
          </form>
        </div>
      </div>

      <br>
      <br>

      <div class="col-3">
        <div class="card-body">
          <div class="card-title">
         <h3>Quarta-feira <?php echo $dia2 ?> </h3>
          </div>
          <form class="adiciona" action="calendario.php" method="GET">
          
          <input type="hidden" name="dia" value ="<?= $data ?>">  
          <input type="hidden" name="data" values ="quarta-feira">
            
            <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
            <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
            <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
            <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

            <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
          </form>
        </div>
      </div>
    

      <br>
      <br>

      <div class="col-3">

        <div class="card-body">
          <div class="card-title">
            <h3>Quinta-feira <?php echo $dia3 ?> </h3>
         </div">
          <form class="adiciona" action="calendario.php" method="GET">

            <input type="hidden" name="dia" value ="<?= $data ?>">
            <input type="hidden" name="data" values ="quinta-feira ">

            <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
            <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
            <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
            <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

            <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
          </form>
        </div>
      </div>
      </div>
      <br>
      <br>

      <div class="row">

        <div class="col-4">

          <div class="card-body">
            <div class="card-title">
              <h3>Sexta-feira <?php echo $dia4 ?> </h3>
            </div>
            <form class="adiciona" action="calendario.php" method="GET">

              <input type="hidden" name="dia" value ="<?= $data ?>">
              <input type="hidden" name="data" values ="sexta-feira">

              <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
              <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
              <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
              <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

              <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
            </form>
          </div>
        </div>
      
        <br>
        <br>

        <div class="col-4">
          <div class="card-body">
            <div class="card-title">
              <h3>Sabado <?php echo $dia5 ?> </h3>
            </div>
            <form class="adiciona" action="calendario.php" method="GET">

              <input type="hidden" name="dia" value ="<?= $data ?>">
              <input type="hidden" name="data" values ="sabado">

              <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
              <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
              <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
              <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

              <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
            </form>
          </div>
        </div>


        <br>
        <br>



        <div class="col-4">
          <div class="card-body">
            <div class="card-title">
              <h3>Domingo <?php echo $dia6 ?> </h3>
            </div>
            <form class="adiciona" action="calendario.php" method="GET">

              <input type="hidden" name="dia" value ="<?= $data ?>">
              <input type="hidden" name="data" values ="domingo">
              
              <button type="submit" name="cor" value="azul" class="btn btn-outline-primary">Excelente</button>
              <button type="submit" name="cor" value="cinza" class="btn btn-outline-secondary">Bom</button>
              <button type="submit" name="cor" value="verde" class="btn btn-outline-success">Ruim</button>
              <button type="submit" name="cor" value="vermelho" class="btn btn-outline-danger">Péssimo</button>

              <textarea class="w-100 p-3" name="anotacao" style="background-color: #eee;"> </textarea>
            </form>
          </div>
          <div>
          </div>


            <script src="./bootstrap-4.3.1/jquery-3.4.1.min.js"></script>
            <script src="./bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
