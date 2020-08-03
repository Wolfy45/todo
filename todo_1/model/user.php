<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author eleve
 */
class user extends table{
    protected $table="user";
    protected $champs=["nom","prenom","email","password","superviseur"];
    
    protected $liens= ["superviseur" => "superviseur"];
    
    public function hash($password) {
        //hasher le password de l'utlisateur lors de la création de compte
        $this->password = password_hash($password,PASSWORD_DEFAULT);
        return true;
        
    }
    
    public function chekLogin($email,$password) {
        //rôle : verifier les information de connexion
        //retour : true si ok, false sinon
        
        //on charge le user par l'email
        if($this->LoadFromEmail($email)){
            //si retour true on verifie le mdp
            if (!password_verify($password, $this->password)){
                return false; //si mdp faux
            }else{
               return true;//si mdp ok
            }     
        }
        return true;//on retourne true
        
    }
 
    
    public function LoadFromEmail($email) {
        //rôle : chargez un user par son email
        //retour : objet charger 
        //param : $email -> email de l'utilisateur
        
        //construction sql
        $sql="SELECT * FROM `{$this->table}` WHERE `email` = :email ";
        $param =[":email" => $email];
        
        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }
        //on récupère la 1er ligne de resultat
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        
        
        $this->loadFromTab($ligne);
        
        return true;
 
        
    }
    
    public function listerUser(){
        //rôle: lister les utilisateur
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}";
        $param= [];
        
        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }
        //on récupère la 1er ligne de resultat
        $lignes = $req->fetchALL(PDO::FETCH_ASSOC);
        
        //on crée une liste vide;
        $liste=[];
        
        //pour chaque ligne de la liste
        foreach ($lignes as $tabligne){
            //on crée l'objet
            $user = new user;
            
            $user->id= $tabligne["id"];
            $user->nom= $tabligne["nom"];
            $user->prenom= $tabligne["prenom"];

            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$user;
            
        }
        
        return $liste;         
        
    }
}
