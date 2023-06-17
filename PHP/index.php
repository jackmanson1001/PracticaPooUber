<?php
    require_once('Car.php');
    require_once('Account.php');
    
    $auto = new Car("ERGG1235", new Account("Juan Luis","234523452"));
    $auto->passenger = 4;
    // $auto->printData();
    $auto->getLicense();
    
     echo "NO ESTA FUNCIONANDO CON LOS GETTERS AN SETTERS";

?>