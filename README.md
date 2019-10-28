# 1. Symfony-Applikationen

Checken Sie das Repository aus, um den Playground zu installieren und Ihre Änderungen durchzuführen.

Dokumentieren Sie ihr Vorgehen stichpunktartig.

# 2. CRUD-Features integrieren
## 2.1. User
 >* User anzeigen
 >* User bearbeiten
 >* User löschen

## 2.2. Company

 >* Company anzeigen
 >* Company bearbeiten
 >* Company löschen

# 3. ORM-Customizing (Doctrine)

Unsere MySQL-Datenbank-Cluster benötigen für Replikationen zwangsläufig, die Existenz eines Primärschlüssels.
Führen Sie die im Projekt enthaltene Migration auf eine MySQL-Datenbank aus und konfigurieren Sie das Projekt entsprechend.
Erweitern Sie die Doctrine-Implementierung so, dass automatisch für alle verwendeten Entities geprüft wird das tatsächlich ein Primärschlüssel in der Datenbank angelegt ist.
Die Verwendung der Entity Company soll demnach sofort eine Exception werfen, um diese Rahmenbedingung sicherzustellen.

