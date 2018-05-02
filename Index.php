<?php

/*require_once ("Persona.php");
require_once ("Cliente.php");


$p1 = new Persona ("Juan", "23");
$p2 = new Persona ("Alberto","22");
$p3 = new Persona ("Pedro","59");

$c1 = new Cliente ("Antonio","43");*/

?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--   <link rel="stylesheet" href="style.css">  -->


    <title>Web</title>

  </head>

  <body>
    <header>
      <img src="transmed.jpg" alt"Transmediterranea" height="100">
    </header>
        <div class="row">
          <div class="col">
            <button id="miboton" type="button" class="btn btn-primary">Primary</button>

    </div>



    <div class="col">

        <p class="miestilo" id="mitexto"> Texto de prueba </p>

        <img src="imagen1.jpg" height="300px">

    </div>

</div>

<div class="row">

    <div class="col">



        <p>Listado de móviles</p>

        <ol>

            <?php for ($i=0; $i < count($vector); $i++) { 

                echo "<li>".$vector[$i]->getMarca()."(".$vector[$i]->getPrecio()." €)</li>";

            }

            ?>

        </ol>

    </div>



    <div class="col">

        

        <p>Listado de móviles 2</p>

        <ol>

            <?php for ($i=0; $i < count($vector); $i++) { 

                echo "<li>";

                echo $vector[$i]->getMarca();

                echo "(";

                echo $vector[$i]->getPrecio();

                echo " €)</li>";

            }

            ?>

        </ol>





        <p>Listado de móviles 3</p>

        <ol>

            <?php for ($i=0; $i < count($vector); $i++) { ?> 

                <li>

                <?= $vector[$i]->getMarca(); ?>

                (<?= $vector[$i]->getPrecio(); ?> €f)

                </li>

            <?php } ?>

        </ol>

    </div>

</div>
<!--
    <footer>
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Trasmediterranea SL</p>
            <p>
                Avenida de la Guagua, 17<br>
                Isla de Tenerife<br>
                1001 - Islas Canarias<br>
            </p>
          </div>
          <div class="col">
            <ul>
              <li>Hierro</li>
              <li>Gomera</li>
              <li>La Palma</li>
              <li>Tenerife</li>
              <li>Gran Canaria</li>
              <li>Fuerteventura</li>
              <li>Lanzarote</li>
            </ul>
          </div>
          <div class="col">
            <p>
              Paga con tarjeta<br>
              Pasarela de pago 100% segura
            </p>
          </div>
          <div class="col">
            <p>
              Para más info busca en <a href="http://www.google.es/" target="_blank">Google</a>
            </p>  
          </div>
        </div>
      </div>
    </footer>
    -->

   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>