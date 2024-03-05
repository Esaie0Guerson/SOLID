# nous avons introduit une classe FlyingBird pour représenter 
# les oiseaux capables de voler. La classe Penguin, qui représente les pingouins, 
# n'hérite plus de la classe Bird.

class Bird:
    def fly(self):
        pass

class FlyingBird(Bird):
    def fly(self):
        pass

class Penguin(Bird):
    pass.
