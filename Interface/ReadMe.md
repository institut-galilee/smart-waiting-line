# Tuto d'excution :
@(Execution)[Java|application]

- Téléchargez le dépôt de cette interface ou faites clone, 
- Téléchargez un éditeur  **Eclipse** ou **NetBeans** [here](https://www.clubic.com/telecharger-fiche429613-netbeans-1.html)
- Téléchargez WampServer (login: **root**, mot de passe :  vide) [here](http://www.wampserver.com/)
-  Importer la base de données [ici](https://github.com/institut-galilee/smart-waiting-line/blob/master/Interface/salon%20(1).sql)
#####**Dans l’éditeur** :
- Importez votre projet,
- vous trouverez un Dossier nommer **leb** fais Référence  au librairies utiliser que vous devez télécharger puis elle ne sont pas incluse dans l’éditeur, pour les ajouter c'est simple:
- cliquer droit sur votre projet: Propriétés> Librairies> add library> create> rentrer un nom> ensuite une fenetre va apparaitre et ajouter les jar du doc leb pour  JavaMail,(c'est pareil pour Zxing),>ok>ok
- Ajoutez une librairie SQL qui est déjà incluse dans l’éditeur comme suit:
- Propriétés> Librairies> add library> choisissez **MySQL JDBC Driver** Add library > ok
Une fois que vous avez préparez votre environnement de travail maintenant vous devez juste changer quelque ligne de code qui vont vous permettre d'envoyer un mail à partir de votre adresse personnel: 
allez dans la classe Register.java:
a partir de la ligne 243:
changer la ligne 245:  
####code Block
``` java
@requires_authorization
String user = "ecrivez votre mail @gmail.com";
```
ligne 246:
``` java
String pass = "le mot de passe de votre adresse";
```
ensuite:
``` java
String to = destinataire ;
String from = "votre mail encore une fois @gmail.com";
```
et les deux ligne d’après vous pouvez personnaliser, le sujet et le texte du message comme vous voulez.
Là vous pouvez cliquer sur Run et ça va vous donner la possibilité de vous enregistrer et d'envoyer un mail.
