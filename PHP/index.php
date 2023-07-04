<?php
    require_once('Car.php');
    require_once('UberX.php');
    require_once('UberPool.php');
    require_once('Driver.php');
    require_once('UberVan.php');
    require_once('Trip.php');
    
    // $auto = new Car("ERGG1235", new Account("Juan Luis","234523452"));
    // $auto->passenger = 4;
    // $auto->printData();


    // $uberX = new UberX("FD1234",new Account("Andres Herrera","HAD333"),"Chevrolet","Spark");
    // $uberX->printData();
    // $uberX->setDataPassenger(4);
    // $uberX->printDataCar();


    // REVISAR ESTE ULTIMO
    $uberVan = new UberVan("YIH234",new Driver("Jack","234562346","jack@jack.com","1234"),null,null);
    $uberVan->setDataPassenger(6);
    $uberVan->printDataCar();

    // INSTANCIA DE TRIP PARA UN VIAJE ---> revisar como instanciar TRIP
    // $tripMe = new Trip(new User("Albert","F235321","albert@adl.com","1234"),new UberX($license,$driver,"Mazda","model 3"));

?>




