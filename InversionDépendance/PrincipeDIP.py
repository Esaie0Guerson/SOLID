# Pour respecter le principe DIP, nous allons introduire une abstraction 
# pour le moteur (par exemple, une interface EngineInterface) 
# et modifier la classe Car pour dépendre de cette abstraction plutôt
#  que d'une implémentation concrète du moteur.

class EngineInterface:
    def start(self):
pass
# Implémentation concrète du moteur
class Engine(EngineInterface):
    def start(self):
        return "Engine starting"

# Modification de la classe Car pour dépendre de l'abstraction EngineInterface
class Car:
    def __init__(self, engine: EngineInterface):
        self.engine = engine

    def start(self):
        return self.engine.start()

# Utilisation de la classe Car avec une implémentation concrète du moteur
engine = Engine()
car = Car(engine)
print(car.start())  # Output: Engine starting
