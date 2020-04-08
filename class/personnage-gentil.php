<?php

    class PersonnageGentil extends Personnage {

        public function __construct($jeuVideo, $nom, $force, $distanceObjectif = 100)
        {
            parent::__construct($jeuVideo, $nom, $force, $distanceObjectif);
        }

        public function subirAttaque($valeurAttaque) {
            echo('Je subi une attaque de '. $valeurAttaque);
            $this->force -= $valeurAttaque;
        }
    }