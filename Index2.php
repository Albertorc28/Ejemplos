<?php

require_once ("Cliente.php");



$clientes= array();
$clientes[]= new Cliente ("Antonio","43");
$clientes[]= new Cliente ("Juan", "22");
$clientes[]= new Cliente ("Pedro", "31");


$clientes[0]->altaPedido(new Pedido("2018-04-02",50));
$clientes[0]->altaPedido(new Pedido("2018-04-01",100));

$clientes[1]->altaPedido(new Pedido("2018-04-03",40));
$clientes[1]->altaPedido(new Pedido("2018-04-04",60));

$clientes[2]->altaPedido(new Pedido("2018-04-05",70));
$clientes[2]->altaPedido(new Pedido("2018-04-06",55));

?>

<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Web</title>
  </head>
  <body>
    <header>
      <img id="logo" src="transmed.jpg" alt"Transmediterranea" height="100">
    </header>
    <div class="container">
            <div class="row">
                <div class="col">
                <p>Listado clientes</p>
                  <ol>
                      <?php for ($i=0; $i < count($clientes); $i++) { 
                          echo "<li>";
                          echo $clientes[$i]->getNombre()." - ";
                          echo $clientes[$i]->getEdad();
                          echo ($clientes[$i]->getEdad()==1) ? " año" : " años";
                          echo " - ";
                          echo $clientes[$i]->getImporteTotal()." €";
                          echo"</li>";
                      }
                      ?>
                </div>

            <div class="col2">
                <button type="button" href="#" class="btn btn-danger btn-sm">Rellenar Formulario</button>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    
    <script src="app.js"></script>



  </body>



</html>