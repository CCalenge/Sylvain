# Mise en place

### BDD


- Créer une nouvelle base de données "tp-php"
- Créer une table `user`
- Y ajouter les champs suivants:
  - `id`, INT (11), index PRIMARY, en auto_increment
  - `login`, VARCHAR(15), NOT NULL
  - `password`, VARCHAR (30), NOT NULL
  - `firstname`, VARCHAR (20), NULL
  - `lastname`, VARCHAR (20), NULL
  - `avatar`, VARCHAR (30), DEFAULT "avatar.jpg"
  - `public`, BOOLEAN, DEFAULT 1

Rappel: si `public` vaut 1, le profil est public, s'il vaut 0 il est privé

### Données

Inserer les données suivantes dans la table `user`:

- `login`: "user"
- `password`: "password"

Télécharger une image 100x100 et la nommer avatar.jpg
Placer l'image dans le dossier `images`

**Attention à la structure de votre dossier, il doit être correctement rangé!**

-> Créer les dossiers `images`, `js` et `php`

Passer au [TP login](login.md)