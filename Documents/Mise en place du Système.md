# Mise en place du Système:

## Configuration de raspberry Pi 3:
### Composant
- Raspberry Pi 3 model B
- Ecran 7''
- Caméra 5px
- Clavier
- Carte SD 8Go

### Activation de ssh, wifi, camera ...
Exécuter la commande `sudo raspi-config`dans le terminal et activer les.
### Installation de Rasbian pour Raspberry Pi 3
- Rendez-vous sur le site officiel de Raspberry Pi et télécharger l'image [Raspbian](https://www.raspberrypi.org/downloads/).
- Créer une carte SD bootable sur l'image télécharger.

### Configuration de l'écran 7''
Connecté votre Raspberry Pi su une autre écran et non pas sur l'écran 7'' et vous ouvriez le fichier de configuration avec `sudo nano /boot/config.txt` et vous rajouter ses ligne suivantes:
``` bash
...
hdmi_groupe=2
hdmi_mode=87
hdmi_cvt 800 480 60 6 0 0 0
...
```
et vous enregistrer votre fichier avec `Ctrl + X` puis`Y` ou bien `O` .
Redémarrer le Raspberry en la branchant sur l'écran 7'

### Configuration de démarrage direct ( sans mot de passe)
A chaque démarrage de raspberry le système demande d'entrer le mot de passe ou bien d’appuyer sur `Ctrl + D`.
Pour enlevé cette option on doit modifier le fichier de montage avec `sudo nano /etc/fstab`
le fichier avant modification:
``` bash
proc	/proc	proc	defaults	0	0
PARTUUID=1f454273-01  /boot	  vfat	  defaults	0	2
PARTUUID=1f454273-02  /		  ext4    defaults,noatime 0  1
# a swapfile is not a swap partition, no line here
#   use  dphys-swapfile swap[on|off]  for that
```
le fichier après modification:
`1` => `0` dans la troisième ligne
```bash
proc	/proc	proc	defaults	0	0
PARTUUID=1f454273-01  /boot	  vfat	  defaults	0	2
PARTUUID=1f454273-02  /		  ext4    defaults,noatime 0  0
# a swapfile is not a swap partition, no line here
#   use  dphys-swapfile swap[on|off]  for that
```
## Installation de eclipse
Pour l'installation de eclipse il suffit de écrire ces lignes de commande ci dessous dans le terminal<br>
`sudo apt-get update`<br>
`sudo apt-get install eclipse`

## Test de la bonne fonctionnement de la caméra
Une fois la caméra est branché, tester que la caméra est détecter avec la commande suivante:
`vcgencmd get_camera`
la commande nous affiche le nombre de caméra que peut supporter la raspberry et le nombre de caméra détecté comme ci dessous
```fortran
pi@raspbettypi:~ $ vcgencmd get_camera
supportes=1 detected=1
```
Et pour prendre une photo, avec la commande suivante:
`raspistill -o image.jpg`
Une image sera enregistrer sous le nom de `image.jpg`.

## Les prochaines étapes
- Faire fonctionner la caméra en temps réelle et sans arrêt
- Implémentation du programme de la reconnaissance faciale dans la Raspberry en modifiant quelque lignes de commande
- Implémentation de l’application JAVA dans la Raspberry
- Implémentation des listes et de toutes les fonctionnalité dans la Raspberry 
