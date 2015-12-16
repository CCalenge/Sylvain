# TP Bonus

### Last login

- Ajouter un champ `last_login`, DATETIME, dans la base de données
- Lorsque l'utilisateur se connecte avec succès, mettre à jour la BDD avec la date et l'heure de la connection. Afficher cette information sur le profil: "Dernière connexion : dd/mm/yyyy à hh:mm"

### Sécurité

Utiliser MD5 (pas recommandé) ou bcrypt [`bcrypt`]: <http://php.net/password_hash> pour sécuriser les mots de passes
### Inscription

Créer une page inscription.php avec le formulaire:

- login (obligatoire)
- mot de passe (obligatoire)
- confirmation mot de passe (obligatoire)
- prénom (facultatif)
- nom (facultatif)
- avatar (facultatif)
- bouton submit

Vérifier si:

- le login n'est pas vide et n'existe pas déjà en BDD
- les 2 mots de passes ne sont pas vides et correspondent entre eux

En cas d'erreur, afficher un message
