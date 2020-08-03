<!DOCTYPE html>
<!--
Page de création d'utilisateur
attendu en formulaire : nom,prenom,email,password

-->
<html>
    <?php include 'templates/fragments/head.php' ?>
    <body>
        <!--- header ---->
        <?php include 'templates/fragments/header.php' ?>
        <section class='container'>
             <div class='separator medium-hiddden'></div>
            <!--- nav ---->
            <div class="menu flex align-items-center mt-2 mb-2 medium-hiddden">
                <nav class="flex align-items-center">
                    <a href="afficher_accueil.php">Tableaux de bord</a>
                    <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                    <a href="afficher_historique.php">Historique</a>
                </nav>
            </div>
            <!--- nav medium --->
            <div id="menu" class="d-none">
                <div class="menu flex align-items-center mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="afficher_accueil.php">Tableaux de bord</a>
                        <a href='afficher_modif_mdp.php'>Modifier Mot de passe</a>
                        <a href="afficher_historique.php">Historique</a>
                        <a href="deconnection.php" class="btn btn-outline-primary ml-3">Deconnection</a>
                    </nav>
                    <div class="fond-menu bg-ard large-hidden"></div>
                </div>
            </div>
            <div class='separator medium-hiddden'></div>
            <!-- ajouter utilisateur --->
            <article class='espace2 bg-ard rounded shadow-lg p-3'>
                <h1>Ajouter un utilisateur</h1>
                <div class='separator'></div>
                <form method='post' action='insert_user.php'>
                    <label for='nom'>Nom :</label>
                    <input type='text' name='nom' class='form-control' required placeholder='indiquez le Nom'>
                    <label for='prenom'>Prenom :</label>
                    <input type='text' name='prenom' class='form-control' required placeholder='indiquez le Prenom'>
                    <label for='email'>Email :</label>
                    <input type='email' name='email' class='form-control' required placeholder="indiquez l'Email">
                    <label for='password'>Mot de passe :</label>
                    <input type='password' name='password' class='form-control' required placeholder='indiquez le Mot de passe'>
                    <label for="superviseur" >Est-ce un Superviseur ?</label>
                    <select for="superviseur" name="superviseur" required class='form-control'>
                        <option  value="1">Oui</option>
                        <option  value="2">Non</option>
                    </select>
                    <div class="flex justify-content-center mt-3">
                        <input type="submit" value="crée utilisateur" class="btn btn-outline-primary">
                    </div>
                </form>
                <div class="flex justify-content-center mt-3">
                    <a href="afficher_accueil.php" class="btn btn-outline-primary">Retour</a>
                </div>
            </article>
        </section>
        <!---- footer --->
        <?php include 'templates/fragments/footer.php' ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/aos.js" type="text/javascript"></script>
    <script src="js/js.js" type="text/javascript"></script>
</html>
