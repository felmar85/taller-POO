<?php
    class Persona 
    {
        private $nombre;
        private $edad;
        
        public function __construct()
        {
            $this->nombre = "Luis";
            $this->edad = 12;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of edad
         */ 
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Set the value of edad
         *
         * @return  self
         */ 
        public function setEdad(int $edad)
        {
                $this->edad = $edad;

                return $this;
        }
    }
    