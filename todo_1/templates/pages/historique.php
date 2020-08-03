<!DOCTYPE html>
<!--
Page de l'historique de l'utilisateur

->liste des tache 
->liste des tache auteur
-->
<html>
    <?php include "templates/fragments/head.php" ?>
    <body>
        <!--- header ---->
        <?php include "templates/fragments/header.php" ?>
        <section class="container">
            <h1 class="text-center">TODO - Historique</h1>
            <div class="separator"></div>
             <!--- Nav --->  
             <div class="menu flex align-items-center medium-hiddden mt-2 mb-2">
                <nav class="flex align-items-center">
                    <a href="afficher_accueil.php">Tableaux de bord</a>
                    <a href="#tache">Mes tâches</a>
                    <a href="#auteur" >Tâche créées</a>
                    <?php if($user->superviseur->id == "1"){?>
                    <a href="#sup">Toutes les tâches</a>
                    <a href="afficher_form_user.php">Crée un utilistateur</a>
                    <?php } ?> 
                    <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                    <a href="deconnection.php" class="btn btn-outline-primary ml-3 large-hidden">Deconnection</a>
                </nav>
            </div>
             <!---- nav medium ---->
            <div id="menu" class="d-none">
                <div class="menu flex align-items-center mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="afficher_accueil.php">Tableaux de bord</a>
                        <a href="#tache" id="btn_tache">Mes tâches</a>
                        <a href="#auteur" id="btn_demande">Tâche créées</a>
                        <?php if($user->superviseur->id == "1"){?>
                        <a href="#sup" id="btn_cours">Toutes les tâches</a>
                        <a href="afficher_form_user.php">Crée un utilistateur</a>
                        <?php } ?> 
                        <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                        <a href="deconnection.php" class="btn btn-outline-primary ml-3 large-hidden">Deconnection</a>
                    </nav>
                    <div class="fond-menu bg-ard large-hidden"></div>
                </div>
            </div>    
            <div class="separator medium-hiddden"></div>
            <!--- Liste des tache que l'ont ma donner --->
            <article id='tache' class='flex flex-wrap'>
                <h2>Mes tâches donner</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache.php" ?>
            </article>
            <!--- Liste des tache que l'ont à créé --->
            <article id='auteur' class='flex flex-wrap'>
                <h2>Mes tâches crées</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_auteur.php" ?>
            </article>
            <?php if($user->superviseur->id == "1"){?>
            <!--- Liste de toutes les tâche --->
            <article id='sup' class='flex flex-wrap'>
                <h2>Toutes les tâches</h2>
                <div class="separator"></div>
                <?php include "templates/fragments/lister_tache_sup.php" ?>
            </article>
            <?php } ?> 
        </section>
        <!--- footer ---->
        <?php include "templates/fragments/footer.php" ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/aos.js" type="text/javascript"></script>
    <script src="js/js.js" type="text/javascript"></script>
</html>
