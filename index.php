
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cual es la hipotenusa de un triangulo</title>
        <link rel="stylesheet" href="css/bootstrap (3).css">
    </head>
    
    <body>
        
<?php
    // DECLARACION DE VARIABLES 
    $ladoA =  $ladoB = 0;
    $hip =  0 ;             // HIPOTENSUA A HALLAR
    $error = false;         // MANEJO DE ERRORS


    // VALIDAR INPUTS
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ((empty($_POST["ladoA"])) || (empty($_POST["ladoB"])) ) {
            $error = true;
        } else {
            // CHEQUEANDO QUE LOS VALORES INTRODUCIDOS SON NUMEROS
            if ((!preg_match("/^[0-9]*$/",$_POST["ladoA"])) || (!preg_match("/^[0-9]*$/",$_POST["ladoB"])) ) {
                $error = true;
            }
        }
    }

    // CALCULAR LA HIPOTENUSA
    if (!$error) {
        $ladoA = $_POST["ladoA"];
        $ladoB = $_POST["ladoB"];
        $aux = (pow($ladoA,2))+(pow($ladoB,2));
        $hip = sqrt($aux);
        $resmsg = "El valor de la hipotenusa del triangulo es ". $hip . "";
    }   else {
        $resmsg = "valor introducido no es valido";
    }
?>

        <div class="container-fluid bg-primary text-white pb-1 p-4">
           <h1>Calculadora de la <br> hipotenusa de un Triangulo Recto</h1> 
        </div>
        
        <div class="container mt-3">
            <div class="row">
            <div class="card text-white bg-secondary m-3 mt-0 col-md-5">
                <div class="card-header">Datos</div>
                <div class="card-body">
                    <h4 class="card-title">Los Catetos </h4>
                    <p class="card-text">Un cateto, en geometría, es cualquiera de los dos lados menores de un triángulo rectángulo, los que conforman el ángulo recto.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER  ['PHP_SELF']);?>" method="post">
                    <hr>
                    <div class="form-group">
                    <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">ingrese la longitud del primer lado </label>
                    <input class="form-control " type="text"placeholder="Ej:4" name="ladoA" id="inputLarge">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">ingrese la longitud del segundo lado </label>
                        <input   class="form-control "  type="text" name="ladoB" placeholder="Ej:3">
                    </div>
                    
                    <br>
                    <input class="form-control form-control-lg btn-primary" type="submit" value="mostrar">
                    </form>
                </div>
            </div>
               
            <div class="card text-white bg-warning m-3 mt-0 col-md-6" >
                <div class="card-header">RESULTADO</div>
                <div class="card-body">
                    <h4 class="card-title">La Hipotenusa</h4>
                    <p class="card-text">La hipotenusa es el lado opuesto al ángulo recto en un triángulo rectángulo, resultando ser su lado de mayor longitud.</p>
                    <hr>    
                    <span class="container m-3" id="result">
                    <?php
                        echo "<div class='card text-primary border-success mb-3' style='max-width:95%;'>";
                        echo "<div class='card-body'>";
                        echo "<h4 class='card-text'<br>$resmsg<br></h4></div></div>";
                    ?>
        </span>
                </div>
            </div>
            </div>
        </div>

       
       
    </body>
    </html>