<?php

include "Mahasiswa.php"

// instansi objek mahasiswa dengan memanggil contructor dan setter
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNIM(2009929);
$mahasiswa1->setNama(Yosafat);
$mahasiswa1->setJenisKelamin(Laki-laki);
$mahasiswa1->setProdi(Ilmu Komputer);
$mahasiswa1->setSemester(4);

// tampilkan objek menggunakan getter
echo "Mahasiswa 1". "<br>";
echo "NIM           : ". $mahasiswa1->getNIM(). "<br>";
echo "Nama          : ". $mahasiswa1->getNama(). "<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getJenisKelamin(). "<br>";
echo "Prodi         : ". $mahasiswa1->getProdi(). "<br>";
echo "Semester      : ". $mahasiswa1->getSemester(). "<br>";

?>