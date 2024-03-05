# Pour respecter le principe ISP, nous devons diviser 
# l'interface en interfaces plus petites et spécifiques, 
# de sorte que chaque classe puisse implémenter uniquement les méthodes dont elle a besoin

class Workable:
    def work(self):
        pass

class Eatable:
    def eat(self):
        pass

class Manager(Workable):
    def work(self):
        print("Manager working")
