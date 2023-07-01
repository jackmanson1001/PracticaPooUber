from account import Account

class Car(Account):
    id          = int 
    license     = str
    driver      = Account  
    passenger   = str

def __init__(self,license,driver):
    super.__init__(driver)
    self.license = license
