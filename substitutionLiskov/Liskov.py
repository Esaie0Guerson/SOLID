#la classe Penguin hérite de la classe Bird, 
# mais elle viole le principe de substitution de Liskov (LSP) 
# car elle remplace le comportement de la méthode fly() par une exception. 
# Cela signifie que les objets de type Penguin ne peuvent pas être substitués 
# aux objets de type Bird sans altérer le comportement du programme, 
# ce qui contrevient au principe LSP.


class Bird:
    def fly(self):
        pass
class Penguin(Bird):
    def fly(self):
        raise NotImplementedError("Penguins can't fly")
