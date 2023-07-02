import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car{
    Map<String,Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatsMaterial;
    // private Integer passenger;

    public UberVan(String license,Account driver){
        super(license, driver);
    }
    public UberVan(String license,Account driver,Map<String,Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }


    @Override // con esta palabra reservada se sobreescribe el metodo de la clase padre
    public void setPassengerEval(Integer passenger){
        if(passenger==6){
            super.setPassenger(passenger);
            System.out.println("Se asignaron 6 pasajeros");
        }else{
            System.out.println("Necesitamos asignar 6 pasajeros");
        }
    }
    
    
}
