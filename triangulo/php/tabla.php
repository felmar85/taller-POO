<?php
    class Tabla {
        private $numero;
        private $tabla;

        public function __construct( $numero) {
            $this->numero = $numero;
            
        }

        function getNumero(){
            return $this->numero;
        }


        function setBase($numero = 0){
            $this->numero = $numero;
        }

        function setTabla($tabla){
            $this->tabla = $tabla;
        }

        function getTabla(){
            return $this->tabla;
        }

        
        function generarTabla(){
            $numero = $this->getNumero();
            $tabla = array();
            for($i = 1; $i <= 15; $i++){
                $res = $i * $numero;
                $tabla[] = array($i,$res);
            }

            $this->setTabla($tabla);

        }
    }

    $numero = $_POST["numero"];
    $tabla = new Tabla($numero);
    
    $tabla->generarTabla();
    $resultado = $tabla->getTabla();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabla de Multiplicar</title>
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
            <h1>Tabla de Multiplicar</h1>   
        </div>
    </div>

     
    <div class="container">
        
        <div class="card">           
            <div class="card-body">
                <a class="btn btn-success" href="../html/tabla.html" role="button">Generar Otra</a>
                <a class="btn btn-primary" href="../index.html" role="button">Listado de Programas</a>
            </div>
        </div>  

        <div class="card">
            <div class="card-header">
                Tabla Generada del <span class="badge badge-danger"><?php echo  $tabla->getNumero(); ?> </span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Numero</th>
                        <th>*</th>
                        <th>i</th>
                        <th>=</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        foreach($resultado as $valor){
                            echo "<tr><td>" . $numero ."</td>";
                            echo "<td>*</td>";
                            echo "<td>" . $valor[0] . "</td>";
                            echo "<td>" . $valor[1] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>   

        <div class="card">           
            <div class="card-body">
                <a class="btn btn-success" href="../html/tabla.html" role="button">Generar Otra</a>
                <a class="btn btn-primary" href="../index.html" role="button">Listado de Programas</a>
            </div>
        </div>   
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>
</body>
</html>