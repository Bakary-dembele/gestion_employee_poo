<?php

require_once "AbstractEmployee.php";
require_once "Equipier.php";
require_once "Manager.php";
require_once "Directeur.php";

echo "____________________________Equiper___________________________________________ .\n\n";
$bakary = new Equipier("DEMBELE", "Bakary", 35, 30);
$bakary;
$bakary->prendreNavette(40);
$bakary->allerDejeune();
$bakary->prendreCaf();
$bakary->nombreEnfant(2);
$bakary->conges() ."\n\n";

echo "____________________________Manger___________________________________________ .\n\n";
$marc = new Manager("Dupont", "Marc", 45, 30);
$marc;
$marc->seDePlacer(50);
$marc->allerDejeune();
$marc->prendreCaf();
$marc->nombreEnfant(2);
$marc->conges();
$marc->organiserReunion();



echo "_________________________________Directeur______________________________________ .\n\n";
$harouna = new Directeur("Harouna", "Traore", 45, 30);
$harouna;
$harouna->seDePlacer(70);
$harouna->allerDejeune();
$harouna->prendreCaf();
$harouna->nombreEnfant(3);
$harouna->conges();
$harouna->organiserReunion();
$harouna->licencier($bakary);

