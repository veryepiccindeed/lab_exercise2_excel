<?php

include ("variables.php");
$currentYear = date("Y");

$mahasiswaList = array($mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4, $mahasiswa5);

foreach ($mahasiswaList as $mahasiswa) {
    $birthYear = date("Y", strtotime($mahasiswa->dateofbirth));
    $age = $currentYear - $birthYear;

    if ($age > 18) {
        echo "Umur " . $mahasiswa->name . " dewasa <br>";
    } else {
        echo "Umur " . $mahasiswa->name . " masih kecil<br>";
    }
}

?>