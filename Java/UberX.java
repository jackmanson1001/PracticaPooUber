public class UberX extends Car{ // extends es para la herencia explicita
    private String brand;
    private String model;

    // CONSTRUCTOR
    public UberX(String license,Account driver,Integer passenger,String brand,String model){
        super(license, driver,passenger);
        this.brand = brand;
        this.model  = model;
    }

    // GETTERS AND SETTERS
    public String getBrand() {
        return brand;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }
    
    // METHODS AND ACTION 
    @Override
    public void printData(){
        System.out.println("Licencia: "+super.getLicense()+" Name Driver: "+super.getDriver()+" Pasajeros: "+super.getPassenger()+
        " Marca: "+getBrand()+" Modelo: "+getModel());
    }

}
