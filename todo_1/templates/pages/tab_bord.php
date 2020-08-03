<!DOCTYPE html>
<!--
Tableaux de bord de l'utilisateur.
Menu 
liste des tâche par état
-->
<html>
    <!-- head ---->
    <?php include 'templates/fragments/head.php' ?>
    <body>
        <!---- header --->
        <?php include 'templates/fragments/header.php' ?>
        <section class="container">
            <h1 class="text-center">TODO - Tableaux de bord</h1>
            <div class="separator "></div>
            <!---- nav ----->
            <div class="menu flex align-items-center medium-hiddden mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="#retard">En Retard</a>
                        <a href="#cours"  >En Cours</a>
                        <a href="#afaire">A Faire</a>
                        <a href="#demande" >Demander</a>
                        <a href="#refuser"  >Refuser</a>
                        <a href="#form_tache">Crée une tâche</a>
                        <?php if($user->superviseur->id == "1"){?> <a href="afficher_form_user.php">Crée un utilistateur</a> <?php } ?>   
                        <a href="afficher_historique.php">Historique</a>
                        <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                    </nav>
                </div>
            <!---- nav medium ---->
            <div id="menu" class="d-none">
                <div class="menu flex align-items-center mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="#retard" id="btn_retard">En Retard</a>
                        <a href="#cours"  id="btn_cours">En Cours</a>
                        <a href="#afaire"  id="btn_afaire">A Faire</a>
                        <a href="#demande"  id="btn_demande">Demander</a>
                        <a href="#refuser"  id="btn_refuser">Refuser</a>
                        <a href="#form_tache"  id="btn_tache">Crée une tâche</a>
                        <?php if($user->superviseur->id == "1"){?> <a href="afficher_form_user.php">Crée un utilistateur</a> <?php } ?>   
                        <a href="afficher_historique.php">Historique</a>
                        <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                        <a href="deconnection.php" class="btn btn-outline-primary ml-3 large-hidden">Deconnection</a>
                    </nav>
                    <div class="fond-menu bg-ard large-hidden"></div>
                </div>
            </div>
            <div class="separator medium-hiddden"></div>
            <article id="retard" class="flex flex-wrap">
                <h2 class="col-12">Tâches en retards</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_retard.php"?>
            </article>
            <article id="cours" class="flex flex-wrap">
                <h2 class="col-12">Tâches en cours</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_cours.php"?>
            </article>
            <article id="afaire" class="flex flex-wrap">
                <h2 class="col-12">Tâches à faire</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_afaire.php"?>
            </article>
            <article id="demande" class="flex flex-wrap">
                <h2 class="col-12">Tâches demandées</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_auteur.php"?>
            </article>
            <article id="refuser" class="flex flex-wrap">
                <h2 class="col-12">Tâches Refusées</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_refusee.php"?>
            </article>
            <!---- fomulaire de création de tâche ------>
            <article id="form_tache" class="mb-5" >
                <h2>Crée une Tâche</h2>
                <div class="separator"></div>
                <form method='post' action='insert_tache.php' class='bg-ard rounded shadow-lg mt-3 p-3'>
                    <label for="titre" >Ajouter un titre :</label>
                    <input type="text" required name="titre" class="form-control mb-3" placeholder="Indiquez le titre">
                    <label for="description">Description de la tâche :</label>
                    <textarea name="description" class="form-control mb-3" required placeholder="Votre texte ici"></textarea>
                    <label for="destinataire">Destinataire :</label>
                    <select for="destinataire" name="destinataire" required class="form-control mb-3">
                        <option value="<?= htmlentities($_SESSION['id_user'])?>">MOI</option>
                        <?php include "templates/fragments/lister_user_option.php"?>
                    </select>
                    <label for="echeance">Fin de la tâche :</label>
                    <?php $d=strtotime("+1day"); $date=date("yy-m-d",$d); ?>
                    <input type="date" name="echeance" min='<?= htmlentities($date)?>' class="form-control mb-3" required>
                    <div class='flex justify-content-center mb-3'>
                        <input type="submit" class="btn btn-outline-primary" value="Crée tâche">
                    </div>
                </form>
            </article>
            <?php if(!(empty($alert_mdp))){ ?>
                <script>alert('Le mot de passe a été modifier avec succés')</script>
            <?php } ?>    
        </section>
        <?php include 'templates/fragments/footer.php' ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/aos.js" type="text/javascript"></script>
    <script src="js/js.js" type="text/javascript"></script>
</html>
