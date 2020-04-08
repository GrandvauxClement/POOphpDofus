<?php
    class Animal{
        public  $name;
        public $jeuxVideo;
        protected $force;
        protected $nourriture = ['herbe','viande','les 2'];

        public function __construct($name,$jeuxVideo, $force)
        {
            $this->name = $name;
            $this->jeuxVideo = $jeuxVideo;
            $this->force = $force;
        }

        public function courir() {
            $this->force -= 1;
        }
        public function manger(){
            $choixNourriture = array_rand($this->nourriture, 1);
            return $choixNourriture;
        }
        public function marcher() {
            $this->force -= 1;
        }

        public function sauter() {
            $this->force -= 1;
        }
        public function getForce(){
            return $this->force;
        }

        public function getAllInfo() {
            return $this;
        }
        public function __destruct()
        {
            echo ('Destruction de notre animal');
        }

    }
?>