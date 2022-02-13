<?php

include "Mahasiswa.php";

// instansi objek mahasiswa 1 kemudian masukkan data menggunakan setter
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNIM(2009929);
$mahasiswa1->setNama("Yosafat");
$mahasiswa1->setJenisKelamin("Laki-laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

// tampilkan data mahasiswa 1 menggunakan getter
echo "Mahasiswa 1". "<br>";
echo "NIM           : ". $mahasiswa1->getNIM(). "<br>";
echo "Nama          : ". $mahasiswa1->getNama(). "<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getJenisKelamin(). "<br>";
echo "Prodi         : ". $mahasiswa1->getProdi(). "<br>";
echo "Semester      : ". $mahasiswa1->getSemester(). "<br>";


echo "<br>". "**********************************". "<br>". "<br>";

// instansi objek mahasiswa 2 kemudian masukkan data menggunakan setter
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setNIM(2000009);
$mahasiswa2->setNama("YOS");
$mahasiswa2->setJenisKelamin("Laki-laki");
$mahasiswa2->setProdi("Ilmu Komedi");
$mahasiswa2->setSemester(14);

// tampilkan data mahasiswa 2 menggunakan getter
echo "Mahasiswa 2". "<br>";
echo "NIM           : ". $mahasiswa2->getNIM(). "<br>";
echo "Nama          : ". $mahasiswa2->getNama(). "<br>";
echo "Jenis Kelamin : ". $mahasiswa2->getJenisKelamin(). "<br>";
echo "Prodi         : ". $mahasiswa2->getProdi(). "<br>";
echo "Semester      : ". $mahasiswa2->getSemester(). "<br>";

?>
