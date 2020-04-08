<?php
    require_once 'include_class.php';

    $persoGentil = new PersonnageGentil('Dofus', 'Sadida', 100);
    $persoMechant = new PersonnageMechant('Dofus', 'Cra', 200, 20, 10, 20);

    while ($persoMechant->getForce() > 0 && $persoMechant->getDistanceObjectif()>0 &&
    $persoGentil->getForce() > 0 && $persoGentil->getDistanceObjectif() >0)
    {
        $attaque = $persoMechant->attaquer();

        $persoGentil->subirAttaque($attaque);

        if($persoGentil->getForce() <= 0) {
            echo('Le personnage gentil est mort !! <br>');
        }

        if($persoMechant->getForce() <= 0) {
            echo('Le personnage méchant est mort !! <br> ');
        }
    }

    $animalHerbivore = new AnimalHerbivore('Blop','Dofus','0');
    $animalCarnivore = new AnimalCarnivore('Guerre','Dofus','0');
    while($animalCarnivore->getForce() < 10 && $animalHerbivore->getForce()<10 ){
        $animalHerbivore->combatNourriture();
        $animalCarnivore->combatNourriture();
        var_dump($animalCarnivore);
        var_dump($animalHerbivore);
        if($animalCarnivore->getForce() == 10){
             echo('L\'animal carnivore gagne, il a fini de manger en 1er ');   
        }
        if($animalHerbivore->getForce() == 10) {
            echo('L\'animal herbivore gagne, il a fini en premier');
        }
    }
    
?>