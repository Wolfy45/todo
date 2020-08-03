<!DOCTYPE html>
<!--
Page de connection aux compte
-->
<html>
    <?php include "templates/fragments/head.php" ?>
    <body>
        <!--- header ---->
        <?php include "templates/fragments/header.php" ?>
        <section class="container">
            <!--- formulaire de connection --->
            <article class="flex flex-wrap justify-content-center connection">
                <form method="post" action="verif_connection.php" class="bg-ard shadow-lg">
                    <h1 class="col-12 text-center">Connection</h1>
                    <label for="email">Votre Email :</label>
                    <input type="email" required name="email" class="form-control mb-3">
                    <label for="password">Votre mot de passe :</label>
                    <input type="password" required name="password" class="form-control mb-3">
                    <input type="submit" value="Se connecter" class="btn btn-outline-primary col-12">
                </form>
            </article>
        </section>
        <!--- footer ---->
        <?php include "templates/fragments/footer.php" ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/aos.js" type="text/javascript"></script>
</html>
