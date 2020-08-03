<!DOCTYPE html>
<!--
Page de modification du mot passe
-->
<html>
    <?php include "templates/fragments/head.php" ?>
    <body>
        <!--- header ---->
        <?php include "templates/fragments/header.php" ?>
        <section class="container">
            <div class='separator medium-hiddden'></div>
            <!--- nav ---->
            <div class="menu flex align-items-center medium-hiddden mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="afficher_accueil.php">Tableaux de bord</a>
                        <?php if($user->superviseur->id == "1"){?> <a href="afficher_form_user.php">Crée un utilistateur</a> <?php } ?>
                        <a href="afficher_historique.php">Historique</a>
                    </nav>
                </div>
            <!--- nav medium ----->
            <div id="menu" class="d-none">
                <div class="menu flex align-items-center mt-2 mb-2">
                    <nav class="flex align-items-center">
                        <a href="afficher_accueil.php">Tableaux de bord</a>
                        <?php if($user->superviseur->id == "1"){?> <a href="afficher_form_user.php">Crée un utilistateur</a> <?php } ?>
                        <a href="afficher_historique.php">Historique</a>
                        <a href="deconnection.php" class="btn btn-outline-primary ml-3 large-hidden">Deconnection</a>
                    </nav>
                    <div class="fond-menu bg-ard large-hidden"></div>
                </div>
            </div>
            <div class='separator medium-hiddden'></div>
            <!--- formulaire de modification de mot de passe --->
            <article class="flex flex-wrap justify-content-center espace rounded bg-ard shadow-lg">
                <form method="post" action="update_mdp.php" class="p-3">
                    <h1 class="col-12 text-center mt-3">Modifier mon mot de passe</h1>
                    <div class="separator"></div>
                    <label for="password">Votre mot de passe actuel:</label>
                    <input type="password" required name="password" class="form-control mb-3">
                    <label for="n_password">Votre nouveau mot de passe :</label>
                    <input type="password" required name="n_password" class="form-control mb-3">
                    <label for="c_password">Confimer votre mot de passe :</label>
                    <input type="password" required name="c_password" class="form-control mb-3">
                    <input type="submit" value="Valider" class="btn btn-outline-primary col-12">
                </form>
                <div class="flex justify-content-center mt-3 mb-3 col-12">
                    <a href="afficher_accueil.php" class="btn btn-outline-primary">Retour</a>
                </div>
            </article>
        </section>
        <!--- footer ---->
        <?php include "templates/fragments/footer.php" ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/aos.js" type="text/javascript"></script>
    <script src="js/js.js" type="text/javascript"></script>
</html>
