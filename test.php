<?php

    require './personnage.php';

    //CREATION DU PREMIER OBJET NOMME HARRY :
    $Harry = new personnage('Harry', 100, 20, 10, 100, ['invisibility_cape', 'magic_stick', 'nimbus2000']);

    // echo $Harry->afficher_stats();
    // var_dump($Harry->afficher_stats());


    //CREATION DU DEUXIEME OBJET NOMME HERMIONE :
    $Hermione = new personnage('Hermione', 100, 20, 10, 100, ['spell_book', 'magic_stick']);

    // var_dump($Hermione);


    $Hermione -> setItem ("basic_broom");
    //  var_dump($Hermione);

    //UTILISATION DE LA METHODE D'AJOUT D'ITEM DANS UN TABLEAU :

    // $Harry -> add_item("broken_glasses");
    // var_dump($Harry->afficher_stats());


    //UTILISATION DE LA METHODE POUR RETIRER UN ITEM D'UN TABLEAU :

    // $Harry -> unset ("broken_glasses");
    // var_dump($Harry->afficher_stats());



   

