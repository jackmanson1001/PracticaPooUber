public class UberX extends Car{ // extends es para la herencia explicita
    String brand;
    String model;

    public UberX(String license,Account driver,String brand,String model){
        super(license, driver);
        this.brand = brand;
        this.model  = model;
    }
}
