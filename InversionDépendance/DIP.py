# la classe Car dépend directement de la classe Engine, 
# ce qui rend la classe Car étroitement couplée à une implémentation 
# concrète du moteur. Cela rend difficile la substitution ou la modification 
# du moteur sans affecter la classe Car.


class Engine:
    def start(self):
        return "Engine starting"
class Car:
    def __init__(self):
        self.engine = Engine()
    def start(self):
        return self.engine.start()

# Utilisation de la classe Car
car = Car()
print(car.start())  # Output: Engine starting
