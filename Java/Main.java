public class Main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        Car carro = new Car();
        carro.license = "AMQ124";
        carro.passenger = 4;
        System.out.println("Car Licensia: "+carro.license);

        Car carro2 = new Car();
        carro2.license = "ADS543";
        System.out.println("Licencia carro2: "+carro2.license);

        carro2.printDataLicencia();


        Car auto = new Car("AFE421", new Account("Juan Luis", "DSO3452345"));
        auto.passenger = 3;
        auto.printData();


    }
}