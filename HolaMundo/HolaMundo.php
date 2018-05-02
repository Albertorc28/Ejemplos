<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Hello, world!</title>

  </head>

  <body>

    <h1>Hello, Alberto!</h1>

    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
    </nav>
    

    <center>
    <?php for ($i=0; $i < 10; $i++) { ?> 
        <button type="button" class="btn btn-success">Alberto</button>     
    <?php } ?>

        <br>
        <br>

    <?php for ($i=0; $i < 10; $i++) { ?> 
        <button type="button" class="btn btn-outline-danger">Rubiales</button> 
    <?php } ?>

    </center>

  
    <br>    
    <br>

    <button type="button" class="btn btn-primary">

     Notifications <span class="badge badge-light">27</span>
    </button>
    
    <center>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Tarjeta">
    <div class="card-body">
    <h5 class="card-title">Periódico</h5>
    <p class="card-text">¿Cuál prefieres?</p>
    <a href="http://www.marca.com/" target="_blank"class ="btn btn-primary">MARCA</a>
    <a href="https://as.com/" target="_blank" class ="btn btn-primary">AS</a>
     </div>
    </div>
    </center>

    <div align="right"><img src="imagen1.jpg" width="600"></div>
    

    



    <?php 



    for ($i=0; $i < 10; $i++) { 

        echo $i;

    }



    ?>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>