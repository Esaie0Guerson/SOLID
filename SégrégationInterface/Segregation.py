# la classe Manager viole le principe de ségrégation 
# d'interface car elle est forcée d'implémenter une méthode (eat()) 
# qu'elle n'utilise pas. Cela peut rendre le code moins modulaire et plus 
# complexe à comprendre.

class Worker:
    def work(self):
        pass 
    def eat(self):
        pass
class Manager(Worker):
    def work(self):
        print("Manager working")
