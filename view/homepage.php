<?php

    $bdd= new MyDbManager();
if ($bdd->bddConnected=1){

    echo'BDD connectée :) <hr>';

}

    echo '<h1>Les bonnes Ravioles PHP</h1><br><br>';
    require 'parts/raviolesTable.php';


?>


