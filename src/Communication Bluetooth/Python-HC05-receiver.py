# _*_coding:utf-8_*_
#! /usr/bin/python

import os
os.system("sudo rfcomm connect 0 98:D3:34:90:84:41 &")

import boto3						# sending message
import serial						# Blutooth communication
import webbrowser					# Open browser
import mysql.connector					# sql connect
from datetime import datetime				# time
from mysql.connector import Error			# sql connect

# Transformer le temps en seconde
def toSecond(t):
	return (t.hour*60 + t.minute ) *60 + t.second

# Envoie de SMS en utilisant l'API AWS
client = boto3.client(
	"sns",
	aws_access_key_id="XXXXXXXXXXXXXXXXXXXX",
	aws_secret_access_key="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
	region_name="eu-west-1"
)

def sendsms(nameCust, num, name):
	message="Bonjour "+nameCust+"\nC'est votre tour, vous avez maximum 1 minute pour prendre votre chaise avec Mr."+name+"\n\nBarbershop.courbevoie\n"+str(datetime.now())
	if(client.publish(PhoneNumber=num, Message=message)):
		print("sms sent")


# Récupération des information de la base de donnée
def collectInformation(name):
	v1=""
	v2=""
	try:
		connection = mysql.connector.connect(host='localhost', user='root', password='root', database='salon')
		if connection.is_connected():
			mycursor = connection.cursor()
			query="SELECT * FROM "+name+" LIMIT 1"
			mycursor.execute(query)
			values = mycursor.fetchall()
			for v in values:
				v1 = v[1]
				v2 = "+33"+str(v[2])
			return v1, v2
	except Error as e:
		print("\n Error", e)
	finally:
		if connection.is_connected():
			mycursor.close()
			connection.close()


# Réception des information avec bluetooth
bluetoothSerial = serial.Serial("/dev/rfcomm0", baudrate=9600)
lastrecive = "";
temps = datetime.now().time()

while(True):
	r = bluetoothSerial.readline()
	# cette condition assure que le coiffeur ne peut pas appelé deux clients
	# successives, on l'oblige d'attendre le client 1 minute minimum.
	if(lastrecive!=r or toSecond(datetime.now().time())-toSecond(temps)>70):
		# Préparation de l'URL
		link = "http://localhost/Iot/Barbe-Shop.php?coiffeur="+r
		#Ouverture du navigateur avec l'URL
		webbrowser.open(link)
		# Collection des information de la base de donnée
		info=collectInformation(str(r))
		if(info[0] and info[1]):
			# l'envoie de message 
			sendsms(info[0], info[1], str(r))
	lastrecive=r
	temps = datetime.now().time()
