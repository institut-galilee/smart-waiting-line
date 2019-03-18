# Programme de la reconnaissance faciale

Une fois vous avez télécharger ou cloner le dossier `facial recognition` vs trouvez des dossier vides qui contiennent que d'un seul fichier `README.md` Ces deux dossier ( `dataSet` et `recognizer`) sont indispensable pour la bonne fonctionnement du programme.

### Pour la première exécution de programme:
Pour charger la base de données ( le fichier dataSet) par vos phots, il suffit de suivre ces étapes:
- Etape 1: 
vous exécuter la commande `python face_dataSet.py` dans le terminal. Un message sera afficher qui vous demande  d'entrer l'ID, vous saisissez un id (Number) et une interface qui va s'afficher et commence à prendre  des photo et calcule le nombre des photos prises, au bout de 20 photos l'interface s'éteindra. <br> Si vous vous rendez dans le dossier `dataSet` vous trouvez les photos prises. <br> Vous ré exécuter le programme pour chaque personne qui à qui vous voulez le rajouter dans votre bases pour qu'il sera reconnus avec le programme de la reconnaissance faciale. 

- Etape 2:
 Une fois vous avez pris toutes les photos. <br>Vous exécuter la commande: `python trainer.py` et ne rien toucher. Le temps d'exécution de ce programme est proportionnel au nombres de photos dans votre dossier `dataSet`.
>**Rq:**
> - Si l'exécution vous affiche une erreur, penser à supprimer le fichier README.md dans le dossier `dataSet`.

Une fois le programme terminer. un fichier `trainingData.py` sera créer dans le dossier `recognizer`. 
> Ne s’inquiète pas pour la taille les infos écrites,. Le programme les comprend facilement 😉

- Etape 3:
Une fois vous avez finit toutes les étapes, maintenant vous pouvez exécuter la commande <br>`python recognition.py` qui va détecter votre visage en écrivant l'id qui vous avez rentrer au début. Si vous voulez qu'il affiche votre nom, il suffit d'éditer le fichier `recognition.py` en rajoutant et modifiant ce qui est commenter comme exemple.


### Pour les exécution suivantes :
pour les prochaine exécution de programme il suffit d'exécuter la commande <br>`python recognition.py` et l'interface s'allume en fonctionnant le programme de la reconnaissance faciale.

### Pour l'ajout d'un nouveau membre dans la base:
vous devez suivre la première partie ( Pour la première exécution du programme).
