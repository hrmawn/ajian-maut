#include <SPI.h>
#include <Ethernet.h>

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = {192, 168, 1, 203 }; //Read the code explanation below
byte serv[] = {192, 168, 1, 1} ; //Read the code explanation below
EthernetClient cliente;

int r1,r2,r3,r4,r5,r6,r7,r8,r9,r10;
int kaki;
String data;

void setup() 
{
  Serial.begin(9600);
  while (!Serial) {;}

  Ethernet.begin(mac, ip);

}

void loop() 
{
  r1 = analogRead(0);
  r2 = analogRead(1);
  r3 = analogRead(2);
  r4 = analogRead(3);
  r5 = analogRead(4);
  r6 = analogRead(5);
  r7 = analogRead(7);
  r8 = analogRead(8);
  r9 = analogRead(9);
  r10 = analogRead(10);

  if (r10 < 200)
  {
    kaki = 30;
  }
  else if (r9 < 200)
  {
    kaki = 29;
  }
  else if (r8 < 200)
  {
    kaki = 28;
  }
  else if (r7 < 200)
  {
    kaki = 27;
  }
  else if (r6 < 200)
  {
    kaki = 26;
  }
  else if (r5 < 200)
  {
    kaki = 25;
  }
  else if (r4 < 200)
  {
    kaki = 24;
  }
  else if (r3 < 200)
  {
    kaki = 23;
  }
  else if (r2 < 200)
  {
    kaki = 22;
  }
  else if (r1 < 200)
  {
    kaki = 21;
  }
  else
  {
    kaki = 0;
  }
  
  if (cliente.connect(serv, 8095)) 
  { //Connecting at the IP address and port we saved before
    Serial.println("connected");
    
    cliente.println("HTTP/1.1");
    cliente.println("HOST: 192.168.1.1");
    
    cliente.print("GET /asep/update.php?"); //Connecting and Sending values to database
    cliente.print("ukuran=");
    cliente.print(kaki);

    cliente.println("Connecting: close");
    
    Serial.print("Kaki = ");
    Serial.println(kaki);
    cliente.stop(); //Closing the connection
  }
    
  else 
  {
    // if you didn't get a connection to the server:
    Serial.println("connection failed");
  }
  
  delay(1000);


}
