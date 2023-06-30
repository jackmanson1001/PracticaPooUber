<?php
    require_once('Car.php');
    require_once('UberX.php');
    require_once('UberPool.php');
    
    $auto = new Car("ERGG1235", new Account("Juan Luis","234523452"));
    $auto->passenger = 4;
    $auto->printData();
    
    echo "NO ESTA FUNCIONANDO CON LOS GETTERS AN SETTERS EN PRIVADO";

    echo "===============================";

    $uberX = new UberX("FD1234",new Account("Andres Herrera","HAD333"),"Chevrolet","Spark");
    $uberX->printData();

    $uberPool = new UberPool("FD1234",new Account("Jack Manson","HAD345333"),"Doge","Full");
    $uberPool->printData();
?>




