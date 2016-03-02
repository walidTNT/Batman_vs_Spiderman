<?php

$hero1 = array( "nom"=>"batman", "force"=>12, "vitesse"=>10, "vie"=>"1800" );
$hero2 = array( "nom"=>"spiderman", "force"=>8, "vitesse"=>8, "vie"=>"1800" );

//On vérifie que les héros sont bien en vie avant la début de la partie
if ($hero1['vie'] >= 0 && $hero2['vie'] >= 0)
{	
	//Début de la boucle
	$i = 0;
	
	while($hero1['vie'] >= 0 && $hero2['vie'] >= 0)
	{	
		if($i % $hero1['vitesse'] == 0)
		{
			$hero2['vie'] -= $hero1['force'];
		}
		else if($i % $hero2['vitesse'] == 0)
		{
			$hero1['vie'] -= $hero2['force'];
		}
		$i++;
	}
	
	//Affichage du résultat
	if($hero1['vie'] >= 0)
		echo 'Le héros vainqueur est '.$hero1['nom'].' !';
	else
		echo 'Le héros vainqueur est '.$hero2['nom'].' !';
	return;
}
