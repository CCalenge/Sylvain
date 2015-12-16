# TP update

### HTML + PHP

Lorsque l'on clique sur le bouton "Modifier", on permet à l'utilisateur de complèter / modifier ses informations


### Méthode 1: PHP uniquement

Le lien "Modifier" amène sur la page `update.php`

Cette page contient un formulaire avec les champs prénom, nom, 2 boutons <radio> pour le profil (public / privé) et un champ upload pour l'image. ([Voir cours](https://openclassrooms.com/courses/upload-de-fichiers-par-formulaire))

***Rappel***

Si les champs ne sont pas vides en base de données, on utilisera leur valeur pour pré-remplir les `<input>` (sauf pour l'avatar)

Lorsque l'utilisateur valide le formulaire, insérer ou mettre à jour les données en base de données (Rappel, son `id` est stocké en SESSION).

Ramener ensuite l'utilisateur sur son profil (header, profil.php) et afficher le message "Votre profil a bien été mis à jour".

Afficher les modifications dans les champs du profil (avatar, nom, prénom, type de profil -public ou privé-)

### Méthode 2: Jquery UI + PHP

Au clic sur le bouton "Modifier", afficher un [popup](https://jqueryui.com/dialog/#modal-confirmation) contenant le  formulaire (cf. Méthode 1), avec un bouton "Annuler" et un bouton "Valider".

Comme dans la méthode 1, si des données existent en BDD, s'en servir pour remplir les `<input>

SI l'utilisateur annule, refermer la popup, sinon traiter les informations en PHP (le formulaire a pour action la page `profil.php`), insérer / mettre à jour la BDD, et afficher le message "Votre profil a bien été mis à jour". Si votre code est correct, les informations devraient automatiquement être mises à jour.

Passer au [TP bonus](bonus.md)