<?php
    /*
    * PROGRMAMA: instancia.php
    * OBJETIVO: Crea objetos de la clase Persona
    * FECHA: 02-15-2019
    * PROGRAMADOR: Luis Yovany Romo
    */

    #Incluye el archivo que tiene la clase
    include("persona.php");

    #Instancia un objeto de la clase persona
    $persona = new persona();

    #Cambia el valor del atributo nombre, invocando el método setNombre
    $persona->setNombre("Juanito");
    
    #Invoca los métodos getNombre y setNombre de la clase Persona
    echo "<div>Nombre : " . $persona->getNombre() ."</div>";
    echo "<div>Edad : " . $persona->getEdad() ."</div>";