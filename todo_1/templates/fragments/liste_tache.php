<div  class="col4 mb-3 p-3">
    <div class="flex flex-wrap align-items-center list-tache justify-content-center  bg-sticker p-3 rounded ">
        <?php include"templates/fragments/notification_etat.php" ?>
        <p><span class="min_title">Titre :</span> <?= htmlentities($tache->titre)?></p>
        <p><span class="min_title">Etat :</span> <?= htmlentities($tache->etat->nom_etat)?></p>
        <p><span class="min_title">Auteur :</span>  <?= htmlentities($tache->auteur->nom . " " . $tache->auteur->prenom)?></p>
        <p><span class="min_title">Echeance :</span> <?= htmlentities($tache->echeance)?></p>
        <button onclick="fadeToggle('<?=htmlentities($tache->id)?>')" class="btn btn-2">Voir detail</button>
    </div>
</div>
<article id="<?=htmlentities($tache->id)?>" class='d-none popup-tache'>
    <div class="flex flex-wrap bg-ard shadow-lg rounded p-3 mb-3">
        <h1 class="col-12">Titre :<?= htmlentities($tache->titre)?></h1>
        <div class="col-md-6">
            <p><span class="min_title">Description :</span><br><br><?= htmlentities($tache->description)?></p>
        </div>
        <div class="col-md-6">
            <p><span class="min_title">Auteur :</span> <?= htmlentities($tache->auteur->nom . " " . $tache->auteur->prenom)?></p>
            <p><span class="min_title">Etat :</span> <?= htmlentities($tache->etat->nom_etat)?></p>
            <p><span class="min_title">Création :</span>  <?= htmlentities($tache->creation)?></p>
            <p><span class="min_title">Echeance :</span> <?= htmlentities($tache->echeance)?></p>  
        </div>
        <div>
            <button onclick="fadeToggle('<?=htmlentities($tache->id)?>')" class="btn btn-outline-primary mr-3 mb-3">Fermer</button>
            <?php if($tache->destinataire->id == $_SESSION['id_user'] and $tache->etat->id == "1" OR $tache->etat->id == "2"){?>
            <button onclick="toggle('form_etat<?=htmlentities($tache->id)?>')" class="btn btn-outline-primary mr-3 mb-3">Actualiser l'etat de la tâche</button>
            <?php } ?>
            <?php if($tache->auteur->id == $_SESSION['id_user'] and $tache->etat->id == "1"){?>
            <a href="delete_tache.php?id=<?= htmlentities($tache->id) ?>" class="btn btn-outline-primary mr-3 mb-3">Supprimer</a>
            <?php } ?>
            <?php if($tache->auteur->id != $_SESSION['id_user'] and $tache->etat->id != "2"){?>
            <button onclick="toggle('form_refus<?=htmlentities($tache->id)?>')" class="btn btn-outline-primary mr-3 mb-3">Refuser la tâche</button>
            <div id="form_refus<?=htmlentities($tache->id)?>" class='d-none mt-3'>
                <form method="post" action="refuser_tache.php">
                    <label for="motif_refus">Indiquez le Motif du refus :</label>
                    <textarea name="motif_refus" class="form-control mb-3" required placeholder="Indiquez le motif du refus"></textarea>
                    <input hidden name="id" value="<?= htmlentities($tache->id)?>">
                    <input type="submit" class="btn btn-outline-primary" Value="Valider">
                </form>
            </div>    
            <?php } ?>
            <?php if($tache->destinataire->id == $_SESSION['id_user'] and $tache->etat->id == "1" OR $tache->etat->id == "2"){?>
            <div id="form_etat<?=htmlentities($tache->id)?>" class='d-none mt-3'>
                <form method="post" action="modif_etat_tache.php">
                    <label for="etat">Etat de la tâche :</label>
                    <select required class="form-control mb-3" name="etat">
                        <?php if($tache->etat->id !="2"){?> <option value="2">En cours</option> <?php } ?>
                        <option value="3">Faite</option>
                    </select>
                    <input hidden name="id" value="<?= htmlentities($tache->id)?>">
                    <input type="submit" class="btn btn-outline-primary" Value="Modifier Etat">
                </form>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="fond-opaque" onclick="fadeToggle('<?=htmlentities($tache->id)?>')"></div>
</article>


