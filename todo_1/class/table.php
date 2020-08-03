<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table
 *
 * @author eleve
 */
class table {
    protected $table;
    protected $champs =[];
    protected $valeurs=[];
    protected $id;
    protected $liens=[];
    protected $objetLiens;
    
    public function __construct($id=null) {
        // Fonction magique directemen appeler après un "new"
        if(!empty($id)){
            $this->loadFromId($id);
        }
        
    }
    
    public function __isset($champs) {
        //appeller quand on essaie un isset ou un empty sur objet vide;
        return empty  ($this->valeurs[$champs]);
        
    }
    
    public function __get($champs) {
        //appeller quand ont essaie d'acceder à un champs
        return $this->get($champs);
        
    }
    
    public function __set($champs,$valeurs){
        //appeller quand ont essaie d'instancier un champ
        $this->set($champs,$valeurs);
        return $this->get($champs);
    }
    
    public function get($champs) {
        //permet de rcuperer le champ d'un objet
        
        //on verifie si c'est un lien
        if(isset($this->liens[$champs])){
            return $this->getLiens($champs);
        }
        //on verifie si c'est l'id
        if($champs == "id"){
            return $this->id;
        }
        //on verifie que le champs existe dans la table
        else if (! in_array($champs, $this->champs)) {
            echo"le champs $champs n'existent pas dans la table $this->table L62";
            return "";
        }
        //si le champs existe dans la table on retourne sa valeur
        else if(isset($this->valeurs[$champs])){
            return $this->valeurs[$champs];
        }
        else{
            return "";
        }
    }
    
    public function set($champs,$valeurs) {
        //permet d'instancier le champ d'un objet
        //on verifie si c'est l'id
        if($champs =="id"){
            $this->id=$valeurs;
            return true;
        }
        //on verifie que le champs existe dans la table
        elseif (! in_array($champs, $this->champs)) {
            echo"le champs $champs n'existent pas dans la table $this->table L87";
            return false;
        }
        //si le champs existe dans la table on retourne sa valeur
        else{
            $this->valeurs[$champs]=$valeurs;
            return true;
        } 
    }
    
    public function getLiens($champs) {
        //permet de retourner l'objet pointé par un champs
        
        //on verifie que l'objet n'est pas deja crée
        if(isset($this->objetLiens[$champs])){
            return $this->objetLiens[$champs];
        }
        
        //sinon on crée l'objet
        
        //on récupè le nom
        $nomCible = $this->liens[$champs];
        
        //on récupère l'idsi il exise
        if(isset($this->valeurs[$champs])){
            $idCible = $this->valeurs[$champs];
        }else{
            $idCible=null;
        }
        
        //on crée l'objet
        $cible = new $nomCible($idCible);
        
        //on instancie l'objet
        $this->objetLiens[$champs]= $cible;
        
        //o retourne l'objet créé
                
        return $cible;        
    }
    
    public function loadFromTab($tab) {
        //permet de récuperer les valeurs des champs d'un tableau
        
        //on verifie si c'est l'id
        if(isset($tab['id'])){
           $this->id = $tab['id'];
        }
        //pour chaque champs
        foreach ($this->champs as $nomChamps){
            if (isset($tab[$nomChamps])){
                $this->set($nomChamps,$tab[$nomChamps]);
            }
        } 
        
    }
    
    public function loadFromId($id) {
        //rôle : chargez un objet dans la bdd depuis sont id
        //retour : objet chargé
        //paramètre : id de l'objet
        
        //construction sql
        $sql= "SELECT * FROM `{$this->table}` WHERE `id` = :id";
        $param= [ ":id" => $id];
        
        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }
        //on récupère la 1er ligne de resultat
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        
        
        return $this->loadFromTab($ligne);
        
    }
    
    public function insert() {
        //rôle : crée l'objet dans la bdd
        //retour : true si ok , false sinon
        //param: néant;
        
        //construction sql
        $sql= "INSERT INTO `{$this->table}` SET ";
        $set=[];
        $param= [];
        
        //créeles données du set et des param:
        foreach ($this->champs as $nom){
            $set[]="`$nom` = :$nom";
            if(isset($this->valeurs[$nom])){
                $param[":$nom"]=$this->valeurs[$nom];
            }else{
                $param[":$nom"]="";
            }
        }
        
        //finir la construction sql
        $sql.=implode(",",$set);
        
        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }

        return true;
        
    }
    
    public function update($id) {
        //rôle : crée l'objet dans la bdd
        //retour : true si ok , false sinon
        //param: néant;
        
        //construction sql
        $sql= "UPDATE `{$this->table}` SET ";
        $set=[];
        $param=[":id"=>$id];
        
        //créeles données du set et des param:
        foreach ($this->champs as $nom){
            $set[]="`$nom` = :$nom";
            if(isset($this->valeurs[$nom])){
                 $param[":$nom"]=$this->valeurs[$nom];
            }else{
                $param[":$nom"]="";
            }
        }
        
        //finir la construction sql
        $sql.=implode(", ",$set);
        
        $sql.=" WHERE `id` = :id";

        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }

        return true;
        
    }
    
    public function delete($id) {
        //rôle : crée l'objet dans la bdd
        //retour : true si ok , false sinon
        //param: néant;
        
        //construction sql
        $sql= "DELETE FROM `{$this->table}` WHERE `id` = :id ";
        $param=[":id"=>$id];

        //préparation et execution sql
        global $bdd;
        $req=$bdd->prepare($sql);
        if(! $req->execute($param)){
            echo "Erreur dans la requete sql $sql";
            return false;
        }

        return true;
        
    }
    
}
