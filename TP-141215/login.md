# TP login

### HTML

Créer la page **login.php**, et y ajouter le formulaire:

- champ login
- champ password
- bouton submit

**Penser aux `<label>`**

Ajouter un `<p>` pour recevoir les eventuels messages d'erreur.

Au clic, le formulaire utilise la méthode POST et renvoie sur la page `login.php`

### PHP

1. Vérifier que les champs `login` et `password` ne sont pas vides. Si c'est le cas, afficher une erreur. [fonction isset](http://php.net/manual/fr/function.isset.php)
2. Vérifier que le login indiqué existe dans la BDD. Si ce n'est pas le cas, afficher une erreur
3. Vérifier que le password indiqué correspond bien au login. Si ce n'est pas le cas afficher une erreur
4. Si le login et le mot de passe sont bons, stocker l'identifiant de l'utilisateur en [SESSION] (http://php.net/manual/fr/session.idpassing.php) et renvoyer l'utilisateur sur la page `profil.php` [header](http://php.net/manual/fr/function.header.php)

Passer au [TP profil](profil.md)