<?php

class Tim{

    // deklarasi atribut private
    private $namaTim = "";
    private $negaraAsal = "";
    private $tahunBerdiri = "";
    private $pemain = "";

    // deklarasi constructor
    public function __construct($inputNamaTim = "", $inputNegaraAsal = "", $inputTahunBerdiri = "", $inputPemain = ""){        
        $this->namaTim = $inputNamaTim;
        $this->negaraAsal = $inputNegaraAsal;
        $this->tahunBerdiri = $inputTahunBerdiri;
        $this->pemain = $inputPemain;
    }

    // deklarasi setter sebagai method Write
    public function setTim($namaTim){
        $this->namaTim = $namaTim;
    }
    public function setNegara($negaraAsal){
        $this->negaraAsal = $negaraAsal;
    }
    public function setTahun($tahunBerdiri){
        $this->tahunBerdiri = $tahunBerdiri;
    }
    public function setPemain($pemain){
        $this->pemain = $pemain;
    }

    // deklarasi getter sebagai method Read Only    
    public function getTim(){
        return $this->namaTim;
    }
    public function getNegara(){
        return $this->negaraAsal;
    }
    public function getTahun(){
        return $this->tahunBerdiri;
    }
    public function getPemain(){
        return $this->pemain;
    }

    // deklarasi method untuk menampilkan data menggunakan method getter
    public function display(){
        echo "\n ===== DATA TIM =====". "<br>";

        echo "Nama Tim      : ". $this->getTim(). "<br>";
        echo "Negara Asal   : ". $this->getTahun(). "<br>";
        echo "Tahun Berdiri : ". $this->getTahun(). "<br>";
        echo "Pemain        : ". $this->getPemain(). "<br>";

        echo "\nDATA BERHASIL DISIMPAN :D\n". "<br>";
    }

    // deklarasi destruktor
    public function __destruct(){

    }
}

?>
