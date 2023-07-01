public class Card extends Payments{
    String numberCard;
    String cvv;
    String date;
    boolean Validation;

    public Card(String nomTitular,String numberCard,String cvv,String date){
        super(nomTitular);
        this.numberCard = numberCard;
        this.cvv = cvv;
        this.date = date;
    }

    public void printValidationNomCard(){
       System.out.println("El nombre del titular del pago es "+super.nomTitular);
    }
}
