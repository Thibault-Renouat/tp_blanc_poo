I) Partie théorique : 

Encapsulation / Abstraction (2 points)
1) En POO, expliquez à quoi sert le principe d’encapsulation. Expliquez moi un exemple concret d’utilisation (0.5 pts)

    -Grâce à l'encapsulation, on facilite l'utilisation de l'application par l'utilisateur. Exemple: Dans une voiture, l'utilisateur à juste à appuyer sur l'accélerateur pour faire avancer la voiture, ce n'est pas lui qui gère l'injection d'essence, l'arrivée d'air, le refroidissement du moteur....

2) Donnez les 3 visibilités possibles pour des attributs (0.5 pts)

    -Publi, Private, Protected

3) Quels sont les éléments que l’on peut trouver dans un objet de type exception (donnez 4 éléments) (0.25 pts / elements correctes)

    - ???? pas compris la question ( try, catch, attributs et fonctions ??...)
    
Les interfaces (2 points)
4) Déterminez ce qu’est une interface et son utilité en programmation orienté objet. (1 pts)

    - une interface sert à lister les fonctions que doit intégrer une classe donnée.
    Cette interface est abstraite, elle ne contient que des attributs publics et ne peut pas avoir le même nom qu'une classe

5) Comment créer une interface en PHP et comment l’utiliser ? (1 pts)

    -on utilise le mot clé interface pour la créer et on utilise le mot clé implements dans la class qu'on veut créer

Les classes abstraites (2 points)

6) Définissez ce qu’est une classe abstraite et son utilité en POO. (0.5 pts)
    
    -En programmation orientée objet
(POO), une classe abstraite est une
classe dont l'implémentation n'est pas
complète et qui n'est pas instanciable.
Elle sert de base à d'autres classes
dérivées (héritées).

7) Comment créer une classe abstraite en PHP ? (0.5 pts)
    
    - on utilise le mot clé abstract 

Les méthodes magiques (2 points)
8) Comment peut on reconnaitre une méthode magique dans une classe (0.5 pts)

    -elles commencent par 2 underscores __        



9) Citez moi 4 méthodes magiques et décrivez leur implémentation en PHP (0.5 pts)

    __construct
    __set
    __get
    __isset

10) Pour chacune d’entre elle, expliquez à quelle moment elle est appelée. (0.5 pts)

    __construct  : appelée avec le mot clé new 
    __set   : appelée lors de la modification d’un attribut qui n’existe pas ou
qui est privé
    __get   : appelée lorsque l'on veut accéder à un attribut qui n’existe pas
    __isset : Appelée quand on appel la fonction isset sur un attribut


11) Expliquez l’utilité de la fonction serialize et unserialize en POO. (0.5 pts)

    - avec serialize et unserialize on peut transformer un objet en chaine de caractères et inversement. On peut s'en servir par exemple pour sauvegarder des données de session  

Le modèle MVC (2 points)
12) Quel est l’intérêt de programmer en utilisant un modèle MVC (0.5pts)

    Structurer notre projet
    Utiliser des standard
    Rendre la maintenance facile
    Travail à plusieurs
    Evolutif

13) Dans un modèle MVC que vais je retrouver dans le M (0.5pts)

    M pour Model

14) Dans un modèle MVC que vais-je retrouver dans le V (0.5pts)

    V pour la vue (view)

15) Dans un modèle MVC que vais-je retrouver dans le C (0.5pts)

    C pour le contrôleur (controller) 
