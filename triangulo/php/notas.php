<?php
    /*
    * PROGRMAMA: notas.php
    * OBJETIVO: Calcaular notas
    * FECHA: 12-09-2019
    * PROGRAMADOR: Felipe Martinez
    */
    
    #incluye el archivo que contiene la clase
    include_once("clasenotas.php");

    #Recupera los datos enviado por POSt desde el formulario
    $c1n1=$_POST["c1n1"];        
    $c1n2=$_POST["c1n2"];
    $c1n3=$_POST["c1n3"];
    $c1n4=$_POST["c1n4"];
    $c2n1=$_POST["c2n1"];
    $c2n2=$_POST["c2n2"];
    $c2n3=$_POST["c2n3"];
    $c2n4=$_POST["c2n4"];
    $c3n1=$_POST["c3n1"];
    $c3n2=$_POST["c3n2"];
    $c3n3=$_POST["c3n3"];
    $c3n4=$_POST["c3n4"];
    # Crea un objeto triángulo
    
    $notas = new notas($c1n1,$c1n2,$c1n3, $c1n4,$c2n1, $c2n2, $c2n3, $c2n4, $c3n1, $c3n2, $c3n3, $c3n4);

    

    #Calcula el notas
    $final1=(($c1n1*0.1)+($c1n2*0.15)+($c1n3*0.25)+($c1n4*0.50));
    $final2=(($c2n1*0.1)+($c2n2*0.15)+($c2n3*0.25)+($c2n4*0.50));
    $final3=(($c3n1*0.1)+($c3n2*0.15)+($c3n3*0.25)+($c3n4*0.50));
    $definitiva=(($final1*0.30)+($final2*0.30)+($final3*0.40));



?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Riesgo Operativo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>NOTAS</h1>   
        </div>
    </div>

    <div class="container">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos Notas</div>
            <div class="panel-body">


                <center><h1>Notas Tecnologia Sistemas de Informacion</h1></center>
                <hr><hr>

                <form class="form-horizontal" role="form" action="../php/notas.php" method="POST">

                    <div class="form-group">

                            <label for="nombre1" class="col-sm-1 control-label"></label>
                  

                        <label for="nombre1" class="col-sm-2 control-label">Nota Final</label>
                      

                    </div>

                    <div class="form-group">

                        <label for="consolidado 1" class="col-sm-2 control-label">Consolidado 1:</label>
                        <div class="col-sm-1">
                        <input type="text" class="form-control" id="final1" name="final1" disabled="disabled"
                            value='<?php echo $final1; ?>' placeholder="">
                        </div>
                        
                    </div>
                      
                
                
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="consolidado 2">Consolidado  2</label>
                        <div class="col-sm-1">
                        <input type="text" class="form-control" id="final2" name="final2" disabled="disabled"
                            value='<?php echo $final2; ?>' placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="consolidado 3">Consolidado  3</label>
                    <div class="col-sm-1">
                        <input type="text" class="form-control" id="final3" name="final3" disabled="disabled"
                            value='<?php echo $final3; ?>' placeholder="">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="consolidado 2">NOTA DEFINITIVA</label>
                        <div class="col-sm-1">
                        <input type="text" class="form-control" id="definitiva" name="definitiva" disabled="disabled"
                            value='<?php echo $final2; ?>' placeholder="">
                        </div>
                    </div>
                     
                    </div>

                     
                                    
                    
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                     
                            <a class="btn btn-primary" href="../index.html" role="button">Listado de Programas</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>