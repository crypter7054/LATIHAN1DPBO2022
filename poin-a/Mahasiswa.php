<?php

class Mahasiswa{
    
    // deklarasi atribut private
    private $NIM = 0;
    private $Nama = "";
    private $Jenis_kelamin = "";
    private $Prodi = "";
    private $Semester = 0;

    // deklarasi konstruktor
    public function __construct($NIM = 0, $Nama = "", $Jenis_kelamin = "", $Prodi = "", $Semester = 0){
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Jenis_kelamin = $Jenis_kelamin;
        $this->Prodi = $Prodi;
        $this->Semester = $Semester;
    }

    // deklarasi setter sebagai method Write
    public function setNIM($NIM){
        $this->NIM = $NIM;
    }
    public function setNama($Nama){
        $this->Nama = $Nama;
    }
    public function setJenisKelamin($Jenis_kelamin){
        $this->Jenis_kelamin = $Jenis_kelamin;
    }
    public function setProdi($Prodi){
        $this->Prodi = $Prodi;
    }
    public function setNIM($Semester){
        $this->Semester = $Semester;
    }

    // deklarasi getter sebagai method Read Only
    public function getNIM(){
        return $this->NIM;
    }
    public function getNama(){
        return $this->Nama;
    }
    public function getJenisKelamin(){
        return $this->Jenis_kelamin;
    }
    public function getProdi(){
        return $this->Prodi;
    }
    public function getNIM(){
        return $this->Semester;
    }

    // deklarasi destruktor
    public function __destruct(){
        
    }
}

?>
