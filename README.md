imva_tobasket_redirect
======================

== Description ==
This module provides an additional form in the article administration to enter a target URL. Thus, you may redirect visitors to an
arbitrary website. Perfect, when an item is available in another store.

== Beschreibung ==
Dieses Modul erweitert die Artikelverwaltung um Eingabefelder für Ziel-URLs. Auf diese können Besucher umgeleitet werden


== Install==
*	On your shop's database, execute:

ALTER TABLE 'oxarticles' ADD 'te' VARCHAR( 256 ) NOT NULL;
ALTER TABLE 'oxarticles' ADD 'tz' TINYINT( 1 ) NOT NULL;

*	Copy the contents of /modules/ to your shop's module directory.
*	In the shop admin, go to Extensions => Modules and select imva.biz: Module Services (Build 201XXXXX)
*	In the section below click "activate".

== Installation==
*	Führen Sie auf der Shop-Datenbank folgende Befehle aus:

ALTER TABLE 'oxarticles' ADD 'te' VARCHAR( 256 ) NOT NULL;
ALTER TABLE 'oxarticles' ADD 'tz' TINYINT( 1 ) NOT NULL;

*	Kopieren Sie den Inhalt des Verzeichnisses /modules/ in das gleichnamige Shopverzeichnis.
*	Öffnen Sie den Shop-Admin und navigieren Sie zu Erweiterungen => Module; wählen Sieimva.biz: Module Services (Build 201XXXXX)
*	Klicken Sie auf "Aktivieren"


== System Requirements ==
*	Created for OXID eShop 4.6 and higher. (CE, PE, EE)
*	This module requires the 'imva.biz Module Services' extension which can be downloaded from Github. https://github.com/imva-biz/imva_services

== Systemvoraussetzungen ==
*	Für OXID-eShop 4.6 oder höher (CE, PE, EE)
*	Dieses Modul benötigt die Erweiterung 'imva.biz Module Services', die über Github bezogen werden kann. https://github.com/imva-biz/imva_services
