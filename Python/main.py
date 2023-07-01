# importando la clase
from account import Account
from car import Car

if __name__ == "__main__":
    print ("Hola mundo")
    
    #car = Car() #Instancia la clase Car
    #car.license = "JLI245" #Envia datos a variable nativa License
    #car.driver = "Julian Polo" #Envia datos a variable nativa Heredada driver
    #print(vars(car))

    car2 = Car("HDL235",Account("Jack","4214352"))
    print(vars(car2))
    print(vars(car2.driver))




