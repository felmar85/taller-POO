<?php
    /*
    * PROGRMAMA: triangulo.php
    * OBJETIVO: Calcaular e imprimir el área del triángulo
    * FECHA: 02-15-2019
    * PROGRAMADOR: Luis Yovany Romo
    */
    
    #incluye el archivo que contiene la clase
    include_once("clasetriangulo.php");

    #Recupera los datos enviado por POSt desde el formulario
    $base = $_POST["base"];
	$altura = $_POST["altura"];

    # Crea un objeto triángulo
    
    $unTriangulo = new Triangulo($base,$altura);

    

    #Calcula el Área
	$unTriangulo->calcularArea();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Área del Triángulo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Área del Triángulo</h1>   
        </div>
    </div>
    
    <div class="container">
          
        <div class="card">
            <div class="card-header">
               Datos del Triángulo
            </div>
            <div class="card-body">
    
                <form class="form-horizontal" role="form" >
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="base">Base:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="base" name="base" 
                            disabled="disabled" value='<?php echo $unTriangulo->getBase(); ?>' placeholder="Ingrese base">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="altura">Altura:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="altura" name="altura" 
                        	disabled="disabled" value='<?php echo $unTriangulo->getAltura(); ?>'placeholder="Ingrese Altura">
                    	</div>
                    </div>
                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Area">Area:</label>
                        <div class="col-sm-10">          
                        	<input type="text" class="form-control" id="area" name="alrea" 
                        	disabled="disabled" value='<?php echo $unTriangulo->getArea(); ?>'placeholder="Ingrese Area">
                    	</div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <a class="btn btn-success" href="../html/triangulo.html" role="button">Calcular Nuevo</a>
                            <a class="btn btn-primary" href="../index.html" role="button">Listado de Programas</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>