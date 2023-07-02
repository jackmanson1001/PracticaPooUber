public class Car {
    private Integer     id;
    private String  license;   
    private Account  driver;   
    private Integer passenger;

    public Car(){} // Constructor vacio

    public Car(String license, Account driver){ // constructor que solicita datos
        this.license = license;
        this.driver = driver;
    }
    public Car(String license, Account driver,Integer passenger){ // constructor que solicita datos
        this.license = license;
        this.driver = driver;
        this.passenger = passenger;
    }

    // GETTERS AND SETTERS
    public Integer getId() {
        return id;
    }
    public void setId(Integer id) {
        this.id = id;
    }
    public String getLicense() {
        return license;
    }
    public void setLicense(String license) {
        this.license = license;
    }
    public Account getDriver() {
        return driver;
    }
    public void setDriver(Account driver) {
        this.driver = driver;
    }
    public Integer getPassenger(){
        return passenger;
    }
    public void setPassenger(Integer passenger){
        this.passenger = passenger;
    }
    
    // METODOS Y ACCIONES
    public void setPassengerEval(Integer passenger){
        if(passenger==4){
            this.passenger = passenger;
            System.out.println("Se asignaron 4 pasajeros");
        }else{
            System.out.println("Necesitamos asignar 4 pasajeros");
        }
    }

    public void printDataLicencia(){
        System.out.println("Licencia: "+this.license);
    }
    
    public void printData(){
        System.out.println("=====================================================================");
        System.out.println("Licencia: "+license+" Name Driver: "+driver.getName()+"Pasajeros: "+passenger);
    }

    
}
