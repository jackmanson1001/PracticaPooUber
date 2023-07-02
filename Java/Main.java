public class Main{
    public static void main(String[] args) {
        // System.out.println("Hola Mundo");

        Car carro = new Car();
        carro.setLicense("AMQ124"); ;
        carro.setPassenger(4);
        System.out.println("Car Licensia: "+carro.getLicense());

        Car carro2 = new Car();
        carro2.setLicense("ADS543");
        System.out.println("Licencia carro2: "+carro2.getLicense());

        carro2.printDataLicencia();

        Car auto = new Car("AFE421", new Account("Juan Luis", "DSO3452345"));
        auto.setPassenger(3);
        auto.printData();

        UberX miUberX = new UberX("JASS720",new Account("jackmanson", "H12349"),4, "kia", "Sportage");
        miUberX.printData();

        Card miCard = new Card("jack", "123456789", "123", "12/06/2025");
        miCard.printValidationNomCard();

        UberVan uberVan1 = new UberVan("QUESO234",new Account("jackmanson","64313131456")); // UberVan herreda el constructor de la super clase o padre
        uberVan1.setPassengerEval(4);
        uberVan1.setPassengerEval(6);

    }
}