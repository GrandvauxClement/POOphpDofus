<?php
    class PersonnageMechant extends Personnage {
        private $forceAttaqueMin;
        private $forceAttaqueMax;

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif = 100, $forceAttaqueMax, $forceAttaqueMin)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
            $this->forceAttaqueMax = $forceAttaqueMax;
            $this->forceAttaqueMin = $forceAttaqueMin;
        }

        public function attaquer(){
            $this->force -= 10;
            echo('je lance une attaque');
            return rand($this->forceAttaqueMin, $this->forceAttaqueMax);
        }
    }
?>