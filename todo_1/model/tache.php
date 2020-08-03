<?php


/**
 * Description of tache
 *
 * @author eleve
 */
class tache extends table {
    protected $table="tache";
    protected $champs=["titre","auteur","destinataire","etat","description","motif_refus","creation","echeance"];
    protected $liens= ["auteur" => "user","destinataire"=>"user","etat"=>"etat"];
    
    public function listerTacheRetard($id){
        //rôle: lister les tâche dont on est le destinataire
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `destinataire` = :destinataire AND `Etat` ='2' AND NOW() > `echeance` or `destinataire` = :destinataire AND`Etat` ='1' AND NOW() > `echeance`";
        $param= [":destinataire" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    
    public function listerTache($id){
        //rôle: lister les tâche dont on est le destinataire
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `destinataire` = :destinataire ORDER BY  `echeance` DESC";
        $param= [":destinataire" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    
    public function listerTacheSup(){
        //rôle: lister les tâche dont on est le destinataire
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` ORDER BY  `echeance` DESC";
        $param=[];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    
    public function listerTacheAuteur($id){
        //rôle: lister les tâche dont on est l'auteur
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `auteur` = :auteur AND `Etat` ='2' OR `auteur` = :auteur AND `Etat` ='1' ORDER BY `echeance` DESC";
        $param= [":auteur" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    public function listerTacheEnCours($id){
        //rôle: lister les tâche dont on est le destinataire et dont l'etat est en cours
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `destinataire` = :destinataire AND `Etat` ='2' AND NOW() < `echeance`";
        $param= [":destinataire" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    public function listerTacheAfaire($id){
        //rôle: lister les tâche dont on est le destinataire et dont l'etat est A faire
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `destinataire` = :destinataire AND `Etat` ='1' AND NOW() < `echeance`";
        $param= [":destinataire" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    public function listerTacheRefuser($id){
        //rôle: lister les tâche dont on est le destinataire et dont l'etat est refusée
        //retour : listes des tache
        //paramaètre : id de l'utilisateur en cour
        
        //construction sql;
        $sql="SELECT * FROM `{$this->table}` WHERE `destinataire` = :destinataire AND `Etat` ='4' OR `auteur` = :auteur AND `Etat` ='5'  ORDER BY `echeance`";
        $param= [":destinataire" =>$id , ":auteur" =>$id];
        
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
            $tache = new tache;
            
            $tache->id= $tabligne["id"];
            $tache->auteur= $tabligne["auteur"];
            $tache->destinataire= $tabligne["destinataire"];
            $tache->etat= $tabligne["etat"];
            $tache->description= $tabligne["description"];
            $tache->motif_refus= $tabligne["motif_refus"];
            $tache->creation= $tabligne["creation"];
            $tache->echeance= $tabligne["echeance"];
            $tache->titre= $tabligne["titre"];
            
            //on remplit la liste avec la ligne dobjet charger
            $liste[]=$tache;
            
        }
        
        return $liste;         
        
    }
    
}
