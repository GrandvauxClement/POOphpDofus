<?php 
    class AnimalHerbivore extends Animal {
        public function __construct( $name, $jeuxVideo, $force)
        {
            parent::__construct($name, $jeuxVideo, $force);
        }
        public function combatNourriture(){
           $nourriture = parent::manger();
           if($nourriture =='herbe' || $nourriture =='les 2'){
               echo('l animal herbivore a manger de l\' herbe <br>');
               $this->force +=1 ;
               return $this->force;
           }
        }
        public function __destruct()
        {
            echo('L animal herbivore est detruit');
        }
    }