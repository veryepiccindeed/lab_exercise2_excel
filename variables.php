<?php

class Mahasiswa {

public $name;
public $dateofbith;
public $sex;
public $gpa;
public $isStudent;

    function __construct($name, $dateofbirth, $sex, $gpa, $isStudent) {
        $this->name = $name;
        $this->dateofbirth = $dateofbirth;
        $this->sex = $sex;
        $this->gpa = $gpa;
        $this->isStudent = $isStudent;
    }

    function printMahasiswa() {
        echo "Nama:" . $this->name . "<br>"; 
        echo "Tanggal Lahir:" . $this->dateofbirth ."<br>";
        echo "Seggs:" . $this->sex . "<br>";
        echo "IPK:" . $this->gpa . "<br>";
        echo "Status Mahasiswa:" . ($this->isStudent ? "Yes" : " No") . "<br>";
    echo "<br>";
    }   
}

$mahasiswa1 = new Mahasiswa("asep", "2002-06-12", "belum", 3.99, true);
$mahasiswa2 = new Mahasiswa("dadang", "2001-05-10", "sudah", 3.75, true);
$mahasiswa3 = new Mahasiswa("suherman", "2000-04-08", "sudah", 3.85, true);
$mahasiswa4 = new Mahasiswa("mulyono", "1999-03-06", "belum", 3.90, true);
$mahasiswa5 = new Mahasiswa("budi", "2007-02-04", "sudah", 3.80, true);

$mahasiswa1->printMahasiswa();
$mahasiswa2->printMahasiswa();
$mahasiswa3->printMahasiswa();
$mahasiswa4->printMahasiswa();  
$mahasiswa5->printMahasiswa();

?>