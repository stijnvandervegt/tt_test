## Test opdracht

Dit project draait op het PHP Framework Laravel [Laravel website](http://laravel.com/docs).

## Installatie
Om het project te installeren is het belangrijk de volgende taken uit te voeren:
* `composer install`
* `npm install`
* `gulp`

## Database
De database instellingen kunnen in de .env file gezet worden. De .env file moet in de root folder van de applicatei komen en je kunt een voorbeeld kopieren van de .env.example file. 
Nadat de database ingesteld is kun je `php artisan migrate` uitvoeren om alle tables in de database te zetten.

## Server
Om de applicatie snel te draaien kun je de volgende taak uitvoeren: `php artisan serve` 

## Folder structure
De frontend bestanden bevinden zich in de resourses folder. In de assets folder staan alle less bestanden, javascript bestanden, images en fonts. Deze bestanden worden doormiddel van Gulp en Elixir gecompiled en in de public map geplaatst. 

In de resources/views folder bevinden zich alle blade views. 
