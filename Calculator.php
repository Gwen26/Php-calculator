<?php

/**
* 
*/
require('./php-add-lib/AddCommand.php');
require('./php-multi-lib/MultiCommand.php');




if($a != NULL AND $b != NULL) // Puis on vérifie leur valeur ...
    {
        if($choix == division AND $b == 0)
        {
            echo 'On peut pas diviser par 0 voyons !';
        }
        else
        {  
            if($choix == addition)
            {
            $resultat = AddCommand::add($a, $b);
            echo 'La somme de ces deux nombres est '.$resultat;
            }
             
             
            if($choix == multiplication)
            {  
            $resultat = MultiCommand::($a, $b);
            echo 'Le produit de ces deux nombres est '.$resultat;
            }
        }
        }
    else // Si les champs n'ont pas étaient renseigné, on affiche un message d'erreur ...
    {
    echo 'Veuillez renseigner tous les champs.';
    }
}

?>