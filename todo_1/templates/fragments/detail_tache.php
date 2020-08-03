<div class="d-none">
    <div class="flex flex-wrap bg-ard shadow-lg rounded p-3 mb-3">
        <h3 class="col-12"><?= htmlentities($tache->titre)?></h3>
        <div class="col-md-6">
            <p>Description :<?= htmlentities($tache->description)?><br></p>
        </div>
        <div class="col-md-6">
            <p>Auteur : <?= htmlentities($tache->auteur->nom . " " . $tache->auteur->prenom)?></p>
            <p>Etat : <?= htmlentities($tache->etat->nom_etat)?></p>
            <p>Echeance : <?= htmlentities($tache->echeance)?></p>  
        </div>
        <div>
            <?php if($tache->auteur == $_SESSION['id_user'] and $tache->etat == "1"){?>
            <a href="delete_tache.php" class="btn btn-outline-primary">Supprimer</a>
            <?php } ?>
            <?php if($tache->auteur != $_SESSION['id_user'] and $tache->etat != "2"){?>
            <button id="btn_refus" class="btn btn-outline-primary">Refuser</button>
            <form method="post" action="refuser_tache.php">
                <label for="motif_refus">Indiquez le Motif du refus :</label>
                <textarea name="motif_refus" class="form-control mb-3" required placeholder="Indiquez le motif du refus"></textarea>
                <input hidden value="<?= htmlentities($tache->id)?>">
                <input type="submit" class="btn btn-outline-primary" Value="Refuser">
            </form>
            <?php } ?>
            <?php if($tache->etat == "1" or "2"){?>
            <form method="post" action="modif_etat_tache.php">
                <label for="etat">Etat de la tâche :</label>
                <select required class="form-control mb-3" name="etat">
                    <?php if($tache->etat !="2"){?> <option value="2">En cours</option> <?php } ?>
                    <option value="3">Faite</option>
                </select>
                <input hidden value="<?= htmlentities($tache->id)?>">
                <input type="submit" class="btn btn-outline-primary" Value="Modifier Etat">
            </form>
            <?php } ?>
        </div>
    </div>   
</div>    