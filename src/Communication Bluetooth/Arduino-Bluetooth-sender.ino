#include <SoftwareSerial.h>

SoftwareSerial mySerial(11, 10);
int rbuttonState = 0;           // état du bouton rouge
int bbuttonState = 0;           // état du bouton bleu
int ybuttonState = 0;           // état du bouton jaune

int rledpin = 8;                // 8 : pin de la led rouge
int bledpin = 9;                // 9 : pin de la led bleu
int yledpin = 12;               // 12: pin de la led jaune

int rbutton = 4;                // 4 : pin du bouton rouge
int bbutton = 3;                // 3 : pin du bouton bleu
int ybutton = 2;                // 2 : pin du bouton jaune

void setup()
{
  pinMode(rledpin, OUTPUT);
  pinMode(bledpin, OUTPUT);
  pinMode(yledpin, OUTPUT);
  
  pinMode(rbutton, INPUT);
  pinMode(bbutton, INPUT);
  pinMode(ybutton, INPUT);

  mySerial.begin(9600);
  Serial.begin(9600);
}

void loop()
{
  // read the input pin
  rbuttonState = digitalRead(rbutton);
  bbuttonState = digitalRead(bbutton);
  ybuttonState = digitalRead(ybutton);

  ledOn(rbuttonState, rledpin);
  ledOn(bbuttonState, bledpin);
  ledOn(ybuttonState, yledpin);
}

// allumé la led correspondante et envoyé le signal avec Bluetooth
void ledOn(int state, int pin)
{
  if(state == LOW)
  {
    Serial.println("LOW");
    digitalWrite(pin, LOW);
  }else
  {
    Serial.println("HIGH");
    digitalWrite(pin, HIGH);
    if(pin==8)
      mySerial.println("fatah");
    if(pin==9)
      mySerial.println("mohamed");
    if(pin==12)
      mySerial.println("faouzi");
  }
}
