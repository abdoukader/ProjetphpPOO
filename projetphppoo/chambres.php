<?php
    
    class Chambres{
        private $numchambre;

        public function __construct($numchambre)
        {
            $this->numchambre=$numchambre;
        }

        /**
         * Get the value of numchambre
         */ 
        public function getNumchambre()
        {
                return $this->numchambre;
        }

        /**
         * Set the value of numchambre
         *
         * @return  self
         */ 
        public function setNumchambre($numchambre)
        {
                $this->numchambre = $numchambre;

                return $this;
        }
    }
?>
