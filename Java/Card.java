public class Card extends Payments{
    private String numberCard;
    private String cvv;
    private String date;
    private boolean Validation;

    // constructor
    public Card(String nomTitular,String numberCard,String cvv,String date){
        super(nomTitular);
        this.numberCard = numberCard;
        this.cvv = cvv;
        this.date = date;
    }

    //GETTERS AND SETTERS
    public String getNumberCard() {
        return numberCard;
    }

    public void setNumberCard(String numberCard) {
        this.numberCard = numberCard;
    }

    public String getCvv() {
        return cvv;
    }

    public void setCvv(String cvv) {
        this.cvv = cvv;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public boolean isValidation() {
        return Validation;
    }
    
    // METHODS AND ACTIONS
    public void printValidationNomCard(){
       System.out.println("El nombre del titular del pago es "+super.getNomTitular());
    }

    public void setValidation(boolean validation) {
        Validation = validation;
    }
}
