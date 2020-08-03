<header class="shadow-lg">
    <a href="afficher_accueil.php" class="logo">TODO <span class="medium-hiddden">- Organisateur de tâche</span></a>
    <?php if($title != "Connection"){ ?>
    <div id="menu_hamb" class="menu_hamb">
        <div class="barre"></div>
        <div class="barre"></div>
        <div class="barre"></div>
    </div>
    <?php } ?>
    <?php if(!empty($_SESSION['connecte'])){?> 
    <div class="flex align-items-center medium-hiddden">
        <a href="deconnection.php" class="btn btn-outline-primary">Deconnection</a>
    </div>
     <?php } ?>
</header>