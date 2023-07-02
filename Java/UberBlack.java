import java.util.ArrayList;
import java.util.Map;

public class UberBlack extends Car{ // extends hace la herencia explicita
    private Map<String,Map<String,Integer>> typeCarAccepted;
    private ArrayList<String> seatsMaterial;

    // CONSTRUCTOR 
    public UberBlack(String license,Account driver,Map<String,Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
    
    // GETTERS AND SETTERS
    public Map<String, Map<String, Integer>> getTypeCarAccepted() {
        return typeCarAccepted;
    }

    public void setTypeCarAccepted(Map<String, Map<String, Integer>> typeCarAccepted) {
        this.typeCarAccepted = typeCarAccepted;
    }

    public ArrayList<String> getSeatsMaterial() {
        return seatsMaterial;
    }

    public void setSeatsMaterial(ArrayList<String> seatsMaterial) {
        this.seatsMaterial = seatsMaterial;
    }
    
    
}
