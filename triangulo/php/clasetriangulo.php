<?php
    /*
    * PROGRMAMA: claseTriangulo.php
    * OBJETIVO: implementar la clase triángulo
    * FECHA: 02-15-2019
    * PROGRAMADOR: Luis Yovany Romo
    */
    class Triangulo 
    {
        private $base;
        private $altura;
        private $area;
    
        #Método constructor
        public function __construct($base, $altura)
        {
            $this->base = $base;
            $this->altura = $altura;
            $this->area = 0;
        }

        

        /**
         * Get the value of base
         */ 
        public function getBase()
        {
            return $this->base;
        }

        /**
         * Set the value of base
         *
         * @return  self
         */ 
        public function setBase($base)
        {
            $this->base = $base;

            return $this;
        }

        /**
         * Get the value of altura
         */ 
        public function getAltura()
        {
            return $this->altura;
        }

        /**
         * Set the value of altura
         *
         * @return  self
         */ 
        public function setAltura($altura)
        {
            $this->altura = $altura;

            return $this;
        }

        /**
         * Get the value of area
         */ 
        public function getArea()
        {
            return $this->area;
        }

        /**
         * Set the value of area
         *
         * @return  self
         */ 
        public function setArea($area)
        {
            $this->area = $area;

            return $this;
        }

        public function calcularArea(){
            #Recupera los valores de los atibutos en variables locales
            $base = $this->getBase();
            $altura = $this->getAltura();

            #Calcula el área
            $area = ($base * $altura)/2;
            
            #Cambia el valor del atributo área con el contebido de la variable local area
            $this->setArea($area);
        }
    }


