<div  class="col4 mb-3 p-3">
    <div class="flex flex-wrap align-items-center list-tache justify-content-center bg-sticker p-3 rounded">
        <div class="refuser"></div>
        <p><span class="min_title">Titre :</span> <?= htmlentities($tache->titre)?></p>
        <p><span class="min_title">Etat :</span> <?= htmlentities($tache->etat->nom_etat)?></p>
        <p><span class="min_title">Destinataire:</span>  <?= htmlentities($tache->destinataire->nom . " " . $tache->destinataire->prenom)?></p>
        <p><span class="min_title">Echeance :</span> <?= htmlentities($tache->echeance)?></p>
        <button onclick="fadeToggle('<?=htmlentities($tache->id)?>')" class="btn btn-2">Voir detail</button>
    </div>
</div>
<article id="<?=htmlentities($tache->id)?>" class='d-none popup-tache'>
    <div class="flex flex-wrap bg-ard shadow-lg rounded p-3 mb-3">
        <h1 class="col-12">Titre :<?= htmlentities($tache->titre)?></h1>
        <div class="col-md-6">
            <p><span class="min_title">Description :</span><br><br><?= htmlentities($tache->description)?></p>
            <p><span class="min_title">Motif du refus :</span><br><br><?= htmlentities($tache->motif_refus)?></p>
        </div>
        <div class="col-md-6">
            <p><span class="min_title">Auteur :</span> <?= htmlentities($tache->auteur->nom . " " . $tache->auteur->prenom)?></p>
            <p><span class="min_title">Destinataire:</span>  <?= htmlentities($tache->destinataire->nom . " " . $tache->destinataire->prenom)?></p>
            <p><span class="min_title">Etat :</span> <?= htmlentities($tache->etat->nom_etat)?></p>
            <p><span class="min_title">Création :</span>  <?= htmlentities($tache->creation)?></p>
            <p><span class="min_title">Echeance :</span> <?= htmlentities($tache->echeance)?></p>  
        </div>
        <div class='col-12 mb-3'>
            <button onclick="fadeToggle('<?=htmlentities($tache->id)?>')" class="btn btn-outline-primary mr-3 mb-3">Fermer</button>    
            <?php if($tache->auteur->id == $_SESSION['id_user']){?>
            <a href="modif_etat_abandonner.php?id=<?=htmlentities($tache->id)?>" class="btn btn-outline-primary mr-3 mb-3">Refuser et abandonnée</a>
            <button onclick="toggle('from_reaf<?=htmlentities($tache->id)?>')" class="btn btn-outline-primary mb-3">Réaffecter la tâche</button>
        </div>
        <div id="from_reaf<?=htmlentities($tache->id)?>" class='col-12 d-none'>
            <form method="post" action="insert_tache.php">
                <label for="titre" >Modifier le titre :</label>
                <input type="text" required name="titre" class="form-control mb-3" Value="<?= htmlentities($tache->titre)?>">
                <label for="description">Modifier description de la tâche :</label>
                <textarea name="description" class="form-control mb-3" required ><?= htmlentities($tache->description)?></textarea>
                <label for="destinataire">Modifier destinataire :</label>
                <select for="destinataire" name="destinataire" required class="form-control mb-3">
                    <option value="<?= htmlentities($_SESSION['id_user'])?>">MOI</option>
                    <?php include "templates/fragments/lister_user_option.php"?>
                </select>
                <label for="echeance">Modifier l'échéance :</label>
                <?php $d=strtotime("+1day"); $date=date("yy-m-d",$d); ?>
                <input type="date" name="echeance" min='<?= htmlentities($date)?>' class="form-control mb-3" required>
                <div class='flex justify-content-center mb-3'>
                    <input type="submit" class="btn btn-outline-primary" value="Valider">
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    <div class="fond-opaque" onclick="fadeToggle('<?=htmlentities($tache->id)?>')"></div>
</article>


