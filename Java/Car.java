public class Car {
    Integer     id;
    String  license;   
    Account  driver;   
    Integer passenger;

    public Car(){} // Constructor vacio

    public Car(String license, Account driver){ // constructor que solicita datos
        this.license = license;
        this.driver = driver;
    }

    void printDataLicencia(){
        System.out.println("Licencia: "+license);
    }

    void printData(){
        System.out.println("=====================================================================");
        System.out.println("Licencia: "+license+" Name Driver: "+driver.name);
    }

    
}
