public class PayPal extends Payments{
    String email;

    public PayPal(String nombreTitular,String email){
        super(nombreTitular);
        this.email = email;
    }
    
}
