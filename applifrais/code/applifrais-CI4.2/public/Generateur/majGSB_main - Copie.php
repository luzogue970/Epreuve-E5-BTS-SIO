﻿ Programme d'actualisation des lignes des tables,  
 cette mise à jour peut prendre plusieurs minutes...
 
 Mais quand ce message s'affiche ... bizarrement, 
 c'est pour dire que l'exécution du script est terminée !!!
 
 Comment expliquer cela ???
<?php
include("include/fct.inc.php");

/* Modification des paramètres de connexion */

$serveur='mysql:host=127.0.0.1';
$bdd='dbname=gsb_frais';   		
$user='gsb' ;    		
$mdp='gsb' ;	

/* fin paramètres*/

$pdo = new PDO($serveur.';'.$bdd, $user, $mdp);
$pdo->query("SET CHARACTER SET utf8"); 

set_time_limit(0);
creationFichesFrais($pdo);
creationFraisForfait($pdo);
creationFraisHorsForfait($pdo);
majFicheFrais($pdo);

?>