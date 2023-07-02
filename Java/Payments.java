public class Payments {
    private Integer id;
    private String nomTitular;

    // CONSTRUCTOR
    public Payments(String nomTitular){
        this.nomTitular = nomTitular;
    }

    // GETTERS AND SETTERS
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNomTitular() {
        return nomTitular;
    }

    public void setNomTitular(String nomTitular) {
        this.nomTitular = nomTitular;
    }

    
}
