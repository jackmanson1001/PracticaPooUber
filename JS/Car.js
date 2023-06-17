function Car(license,driver){
    this.id;
    this.license = license;
    this.driver = driver;
    this.passenger;

}

// metodo para imprimir en consola
Car.prototype.printDataCar = function(){
    console.log(this.driver)
    console.log(this.driver.name)
    console.log(this.driver.document)
}
