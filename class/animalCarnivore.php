<?php
    class AnimalCarnivore extends Animal {
        public function __construct($name, $jeuxVideo, $force)
        {
            parent::__construct($name,$jeuxVideo,$force);
        }
        public function combatNourriture(){
            $nourriture = parent::manger();
            if($nourriture == 'viande' || $nourriture == 'les 2'){
                echo('L animal carnivore a manger son steak ! <br>');
                $this->force +=1;
                return $this->force;
            }
        }
        public function __destruct()
        {
            echo('l animal carnivore est détruit');
        }
    }