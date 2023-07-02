public class UberPool extends Car{
    private String brand;
    private String model;
    
    // CONSTRUCTOR
    public UberPool(String license,Account driver,String brand,String model){
        super(license, driver);
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
    
    

    
}
