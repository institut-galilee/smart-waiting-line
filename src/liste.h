#ifndef _LISTE_H
#define _LISTE_H


typedef struct Sclient{
	int identifiant;
	struct Sclient *suivant, *precedent;
} client;

typedef struct SlisteClient {
	int taille;
	client *premier, *dernier;
}listeClient;

client * creer_client(int id);
void detruire_client(client *c);

listeClient* init_listeClient();
void detruire_listeClient(listeClient *);
int vide_listeClient(listeClient *l);
int cardinal_listeClient(listeClient *l);
void ajouterDebut_listeClient(listeClient *l, int id);
client* extraireDebut_listeClient(listeClient *l);
client* extraireFin_listeClient(listeClient *l);

#endif
