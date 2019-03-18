#include "liste.h"

#include <stdio.h>
#include <stdlib.h>

client * creer_client(int id){
	client *c = malloc(sizeof(client));
	c->identifiant = id;
	c->suivant = NULL;
	c->precedent = NULL;
	return c;
}

void detruire_client(client *c){
	free(c);
}

listeClient* init_listeClient(){
	listeClient *l = malloc(sizeof(listeClient));
	l->premier = NULL;
	l->dernier = NULL;
	l->taille = 0;
	return l;
}

int vide_listeClient(listeClient *l){
	return (l->taille)?0:1;
}

int cardinal_listeClient(listeClient *l){
	return l->taille;
}

void ajouterDebut_listeClient(listeClient *l, int id){
	client *c = creer_client(id);
	if(vide_listeClient(l))
		l->dernier=c;
	else{
		c->suivant = l->premier;
		l->premier->precedent = c;
	}
	l->premier = c;
	l->taille++;
}

client* extraireDebut_listeClient(listeClient *l){
	client *c = l->premier;
	if(!vide_listeClient(l)){
		l->premier = c->suivant;
		c->suivant = NULL;
		l->taille--;
		if(vide_listeClient(l))
			l->dernier = NULL;
		else
			l->premier->precedent = NULL;
	}
	return c;
}

client* extraireFin_listeClient(listeClient *l){
	client *c = l->dernier;
	if(vide_listeClient(l)){
		l->dernier = c->precedent;
		c->precedent = NULL;
		l->taille--;
		if(vide_listeClient(l))
			l->premier = NULL;
		else
			l->dernier->suivant = NULL;
	}
	return c;
}

void detruire_listeClient(listeClient *l){
		while(!vide_listeClient(l))
			detruire_client(extraireDebut_listeClient(l));
		free(l);
}
