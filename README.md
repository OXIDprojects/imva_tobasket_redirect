imva_tobasket_redirect
======================

== Description ==
This module provides an additional form in the article administration to enter a target URL. Thus, you may redirect visitors to an
arbitrary website. Perfect, when an item is available in another store.
+++ IMPORTANT: This module requires the Module Services, see details below. +++

== Beschreibung ==
Dieses Modul erweitert die Artikelverwaltung um Eingabefelder für Ziel-URLs. Auf diese können Besucher umgeleitet werden
+++ WICHTIG: Dieses Modul benötigt die Erweiterung 'Module Services', Details siehe unten. +++


== Install==
*	Copy the contents of /modules/ to your shop's module directory.
*	Open the shop admin and go to Service => Tools and execute the following SQL commands:

ALTER TABLE 'oxarticles' ADD 'te' VARCHAR( 256 ) NOT NULL;
ALTER TABLE 'oxarticles' ADD 'tz' TINYINT( 1 ) NOT NULL;

*	Afterwards, click "update views" in the area below.
*	Go to Extensions => Modules and select "toBasket-Redirect".
*	In the section below click "activate".

== Installation==
*	Kopieren Sie den Inhalt des Verzeichnisses /modules/ in das gleichnamige Shopverzeichnis.
*	Öffnen Sie den Shop-Admin und navigieren Sie zu Service => Tools und führen Sie die folgenden SQL-Befehle aus:

ALTER TABLE 'oxarticles' ADD 'te' VARCHAR( 256 ) NOT NULL;
ALTER TABLE 'oxarticles' ADD 'tz' TINYINT( 1 ) NOT NULL;

*	Klicken Sie anschließend auf "Views jetzt updaten".
*	Navigieren Sie zu Erweiterungen => Module; wählen Sie "toBasket-Redirect".
*	Klicken Sie im Bereich unten auf "Aktivieren".


== System Requirements ==
*	Created for OXID eShop 4.6 and higher. (CE, PE, EE)
*	This module requires the 'imva.biz Module Services' extension which can be downloaded from Github. https://github.com/imva-biz/imva_services

== Systemvoraussetzungen ==
*	Für OXID-eShop 4.6 oder höher (CE, PE, EE)
*	Dieses Modul benötigt die Erweiterung 'imva.biz Module Services', die über Github bezogen werden kann. https://github.com/imva-biz/imva_services
