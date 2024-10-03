<?php

include 'variables.php'; // Import file dari variables

$studentNames = array($mahasiswa1->name, $mahasiswa2->name, $mahasiswa3->name, $mahasiswa4->name, $mahasiswa5->name); // Masukkan data di array dari nama masing-masing kelima object

function greet($names) {
    foreach ($names as $name) { // Lakukan looping untuk greeting
        echo "Hello, $name!<br>";
    }
}

greet($studentNames);