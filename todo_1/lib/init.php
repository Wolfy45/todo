<?php

/* 
 * initialisation des contrôlleurs
 * 
 */


//afficher les messager d'erreur
ini_set('display_errors',1);
error_reporting(E_ALL);

//inclure les tables de données
include"class/table.php";
include"model/user.php";
include"model/superviseur.php";
include"model/tache.php";
include"model/etat.php";


//intialiser la session

session_start();

//connexion à la bdd
$bdd = new PDO("mysql:host=localhost;dbname=projets_todo_qperrichon;charset=UTF8","qperrichon-exam","Aorus@42170");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);