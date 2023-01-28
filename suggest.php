<?php

$people[] = "John Doe";
$people[] = "Jane Smith";
$people[] = "Michael Brown";
$people[] = "Emily Johnson";
$people[] = "Matthew Williams";
$people[] = "Nicholas Jones";
$people[] = "Ashley Garcia";
$people[] = "David Martinez";
$people[] = "Jessica Rodriguez";
$people[] = "Brian Lee";
$people[] = "Kevin Moore";
$people[] = "Amanda Taylor";
$people[] = "Brandon Anderson";
$people[] = "Karen Thomas";
$people[] = "Jonathan Hernandez";
$people[] = "Cynthia Perez";
$people[] = "Adam Cooper";
$people[] = "Sophia Edwards";
$people[] = "Jack Carter";
$people[] = "Madison Mitchell";
$people[] = "Ethan Perez";
$people[] = "Riley Roberts";
$people[] = "Derek Turner";
$people[] = "Rachel Phillips";
$people[] = "Jasmine Campbell";
$people[] = "Gavin Parker";
$people[] = "Kayla Evans";
$people[] = "Isaiah Edwards";
$people[] = "Fiona Collins";
$people[] = "Mason Ramirez";
$people[] = "Avery Lewis";
$people[] = "Evelyn Green";
$people[] = "Hannah Baker";
$people[] = "Jacob Rivera";
$people[] = "Mackenzie Gray";
$people[] = "Adrian Ramos";
$people[] = "Katherine Freeman";
$people[] = "Nathan Wells";
$people[] = "Alondra Cox";
$people[] = "Jordan Howard";
$people[] = "Gabrielle Torres";
$people[] = "Kimberly Peterson";
$people[] = "Isaac Cook";
$people[] = "Jaden Gomez";
$people[] = "Aaliyah Kelly";
$people[] = "Luke Sanders";
$people[] = "Dawson Hall";
$people[] = "Maxwell Harris";
$people[] = "Makayla Clark";
$people[] = "Zoe Lewis";
$people[] = "Sofia Perez";
$people[] = "Jayden Roberts";
$people[] = "Jazmin Turner";
$people[] = "Eli Phillips";
$people[] = "Brooklyn Campbell";
$people[] = "Jasmin Parker";
$people[] = "Rylee Evans";
$people[] = "Kendall Edwards";
$people[] = "Aubree Collins";
$people[] = "Hayden Ramirez";
$people[] = "Mila Lewis";
$people[] = "Aurora Green";
$people[] = "Gianna Baker";
$people[] = "Julian Rivera";
$people[] = "Bella Gray";
$people[] = "Adalynn Ramos";
$people[] = "Aubree Freeman";
$people[] = "Makenzie Wells";
$people[] = "Gavin Cox";
$people[] = "Paige Howard";
$people[] = "Kaylee Torres";
$people[] = "Avery Peterson";
$people[] = "Brooklyn Cook";
$people[] = "Peyton Gomez";
$people[] = "Audrey Kelly";

$q = $_REQUEST["q"];

$suggestion = "";

if ($q !== "") {
 $q   = strtolower($q);
 $len = strlen($q);
 foreach ($people as $person) {
  if (stristr($q, substr($person, 0, $len))) {
   if ($suggestion == "") {
    $suggestion = $person;
   } else {
    $suggestion .= ", $person";
   }
  }
 }
}

echo $suggestion === "" ? "No suggestion" : $suggestion;
