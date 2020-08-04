# todo
Organisateur de tâche

Application de  gestion de tâch "A faire" , permettant a des collaboratteurs de gérer ce qu'ils ont a faire,mais aussi de confier des  tâches à d'autres collègues en fonction des besoins

Une tâche comporte les informations suivantes :
 une date/heure de création
 l’auteur (le demandeur)
 qui doit la faire (cela peut bien sûr être l’auteur)
 une échéance (date/heure)
 une description
 un motif de refus
 une indication d’état (à faire / en cours / faite / refusée / refusée et abandonnée)
Lorsqu’un utilisateur se connecte, il dispose d’un tableau de bord comportant :
 ses tâches en retard (à mettre en évidence)
 ses tâches en cours (triées par ordre de priorité)
 ses tâches à faire (triées par ordre de priorité)
 les tâches qu’il a demandées (avec une indication très claire de leur état d’avancement)
 les tâches refusées
 un formulaire pour créer une nouvelle tâche
Quand on clique sur une tâche à faire (donc qui nous est affectée), on a le détail dans une popup.
Si la tâche nous a été envoyée par quelqu’un d’autre, on peut la refuser (et indiquer le motif du refus)
On peut aussi faire avancer l’état d’une tâche : donc une tâche à faire peut être déclarée « en cours » ou
« faite », une tâche en cours peut être déclarée « faite ».
Une tâche dont on est le créateur et encore à l’état « à faire » peut être supprimée.
Bien sûr, si une tâche est « en cours », elle ne peut plus être refusée.
Pour les tâches que l’on a confié et qui ont été refusées on a la possibilité de les réaffecter à quelqu’un
d’autre : cela génère une duplication de la tâche, à la date/heure du moment, et on peut choisir un
nouveau destinataire, changer l’échéance et modifier la description.
On peut aussi la passer à l’état « refusée et abandonnée » .
Chaque utilisateur dispose aussi de boutons ou d’un menu pour afficher l’historique complet des tâches
qu’il a créées, et l’historique complet des tâches qui lui ont été demandées.
Les superviseurs peuvent voir toutes les tâches (mais pas les modifier).
