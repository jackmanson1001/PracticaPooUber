public class PayPal extends Payments{
    private String email;

    // CONSTRUCTOR
    public PayPal(String nombreTitular,String email){
        super(nombreTitular);
        this.email = email;
    }
    
    // GETTES AND SETTERS
    public String getEmail(){
        return email;
    }

    public void setEmail(String email){
        this.email = email;
    }

    
}
