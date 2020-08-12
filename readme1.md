Partie théorique (10 point)

1) Ecrire une interface qui obligera une classe à implémenter la fonction login prenant en paramètre un user et un password (0.5 point) 

    <?php

    interface UserInterface {


        public function login($user, $password);

    }


2)Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les paramètres qu’elles prennent. (1.5 points) 

    Voir l'autre fichier text


3) Je suis une méthode magique appelé implicitement à la fin d’un script. Qui suis-je ? (1 point)

    - __destruct()


4)  Je suis une classe qui pourra être hérité mais qui ne pourra pas être instancier (impossible de faire new ...). Qui suis-je et comment faire pour me créer ? (1 point)

    Je suis une classe abstraite et on utilose le mot clé abstract pour me créée



5) Donnez 3 types de visibilité sur un attribut expliquez la différence. (1.5 points) 


    public : accessible partout
    private: accessible seulenment dans la classe
    Protected:  comme private sauf que les enfants de la classe peuvent aussi y accéder


6) Expliquez ce qu’est une exception. Décrire les éléments qui la compose (1 point)




7) Dans un modèle MVC quel est le rôle du router. Quelle est la variable super globale qu’il utilise pour accomplir son rôle ? (1 point)


    le routeur permet de renvoyer depuis la vue vers le bon controleur qui lui accèdera au model
    on utilise la variable super globale _GET (passage des paramètres dans l'URL)



