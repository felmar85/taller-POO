<?php
    /*
    * PROGRMAMA: claseTriangulo.php
    * OBJETIVO: implementar la clase triángulo
    * FECHA: 02-15-2019
    * PROGRAMADOR: Luis Yovany Romo
    */
    class Notas 
    {
        private $c1n1;
        private $c1n2;
        private $c1n3;
        private $c1n4;
        private $c2n1;
        private $c2n2;
        private $c2n3;
        private $c2n4;
        private $c3n1;
        private $c3n2;
        private $c3n3;
        private $c3n4;
    
        #Método constructor
        public function __construct($c1n1,$c1n2,$c1n3, $c1n4,$c2n1, $c2n2, $c2n3, $c2n4, $c3n1, $c3n2, $c3n3, $c3n4)
        {
            
            $this->c1n1=0;        
            $this->c1n2=0;
            $this->c1n3=0;
            $this->c1n4=0;
            $this->c2n1=0;
            $this->c2n2=0;
            $this->c2n3=0;
            $this->c2n4=0;
            $this->c3n1=0;
            $this->c3n3=0;
            $this->c3n4=0;
        }


        /**
         * Get the value of c1n1
         */ 
        public function getC1n1()
        {
                return $this->c1n1;
        }

        /**
         * Set the value of c1n1
         *
         * @return  self
         */ 
        public function setC1n1($c1n1)
        {
                $this->c1n1 = $c1n1;

                return $this;
        }


        

        /**
         * Get the value of c1n2
         */ 
        public function getC1n2()
        {
                return $this->c1n2;
        }

        /**
         * Set the value of c1n2
         *
         * @return  self
         */ 
        public function setC1n2($c1n2)
        {
                $this->c1n2 = $c1n2;

                return $this;
        }   

        /**
         * Get the value of c1n3
         */ 
        public function getC1n3()
        {
                return $this->c1n3;
        }

        /**
         * Set the value of c1n3
         *
         * @return  self
         */ 
        public function setC1n3($c1n3)
        {
                $this->c1n3 = $c1n3;

                return $this;
        }
      


        /**
         * Get the value of c1n4
         */ 
        public function getC1n4()
        {
                return $this->c1n4;
        }

        /**
         * Set the value of c1n4
         *
         * @return  self
         */ 
        public function setC1n4($c1n4)
        {
                $this->c1n4 = $c1n4;

                return $this;
        }
        

        /**
         * Get the value of c2n1
         */ 
        public function getC2n1()
        {
                return $this->c2n1;
        }

        /**
         * Set the value of c2n1
         *
         * @return  self
         */ 
        public function setC2n1($c2n1)
        {
                $this->c2n1 = $c2n1;

                return $this;
        }
        

        /**
         * Get the value of c2n2
         */ 
        public function getC2n2()
        {
                return $this->c2n2;
        }

        /**
         * Set the value of c2n2
         *
         * @return  self
         */ 
        public function setC2n2($c2n2)
        {
                $this->c2n2 = $c2n2;

                return $this;
        }
        

        /**
         * Get the value of c2n3
         */ 
        public function getC2n3()
        {
                return $this->c2n3;
        }

        /**
         * Set the value of c2n3
         *
         * @return  self
         */ 
        public function setC2n3($c2n3)
        {
                $this->c2n3 = $c2n3;

                return $this;
        }
        

        /**
         * Get the value of c2n4
         */ 
        public function getC2n4()
        {
                return $this->c2n4;
        }

        /**
         * Set the value of c2n4
         *
         * @return  self
         */ 
        public function setC2n4($c2n4)
        {
                $this->c2n4 = $c2n4;

                return $this;
        }
        

        /**
         * Get the value of c3n1
         */ 
        public function getC3n1()
        {
                return $this->c3n1;
        }

        /**
         * Set the value of c3n1
         *
         * @return  self
         */ 
        public function setC3n1($c3n1)
        {
                $this->c3n1 = $c3n1;

                return $this;
        }
        

        /**
         * Get the value of c3n2
         */ 
        public function getC3n2()
        {
                return $this->c3n2;
        }

        /**
         * Set the value of c3n2
         *
         * @return  self
         */ 
        public function setC3n2($c3n2)
        {
                $this->c3n2 = $c3n2;

                return $this;
        }
        

        /**
         * Get the value of c3n3
         */ 
        public function getC3n3()
        {
                return $this->c3n3;
        }

        /**
         * Set the value of c3n3
         *
         * @return  self
         */ 
        public function setC3n3($c3n3)
        {
                $this->c3n3 = $c3n3;

                return $this;
        }

        

        /**
         * Get the value of c3n4
         */ 
        public function getC3n4()
        {
                return $this->c3n4;
        }

        /**
         * Set the value of c3n4
         *
         * @return  self
         */ 
        public function setC3n4($c3n4)
        {
                $this->c3n4 = $c3n4;

                return $this;
        }
    }
        