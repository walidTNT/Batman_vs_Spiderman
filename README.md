# Batman_vs_Spiderman

Exercice d'algorithme codé en PHP

Ennoncé: 

Nous avons les 2 tableaux suivants :

$hero1 = array(
"nom"=>"batman", 
"force"=>12, 
"vitesse"=>10, 
"vie"=>"1800"
);
$hero2 = array(
"nom"=>"spiderman", 
"force"=>8, 
"vitesse"=>8, 
"vie"=>"1800"
);

Les deux héros (tableaux) s'affrontent dans un combat à mort (une boucle infinie)
Chaque héros donne un coup à l'autre toutes les X occurrences de boucle, X correspondant à sa vitesse.
A chaque coup, il inflige autant de dégâts à l'autre héros que sa caractéristique "force".
Les dégâts sont retirés de la "vie" de l'autre héros.

Quel héros va gagner la partie?

