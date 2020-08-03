<div  class="col-12 mb-3 p-3">
    <div class="flex flex-wrap align-items-center list-tache2 justify-content-center  bg-ard p-3 rounded shadow-lg">
        <div class="col-md-6">
            <p><span class="min_title">Titre :</span> <?= htmlentities($tache->titre)?></p>
            <p><span class="min_title">Création :</span> <?= htmlentities($tache->creation)?></p>
            <p><span class="min_title">Echeance :</span> <?= htmlentities($tache->echeance)?></p>
        </div>
        <div class="col-md-6">
            <p><span class="min_title">Etat :</span> <?= htmlentities($tache->etat->nom_etat)?></p>
            <p><span class="min_title">Auteur :</span> <?= htmlentities($tache->auteur->nom . " " . $tache->auteur->prenom)?></p>
            <p><span class="min_title">Destinataire :</span> <?= htmlentities($tache->destinataire->nom . " " . $tache->destinataire->prenom)?></p>
        </div>
        <div class='separator'></div>
        <p><span class="min_title">Description :</span><br><br> <?= htmlentities($tache->description)?></p>
    </div>
</div>

