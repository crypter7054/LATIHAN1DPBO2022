<?php

include "Tim.php";

    // instansi objek tim1
    $tim1 = new Tim();

    // panggil setter untuk mengisi data tim sepak bola
    $tim1->setTim("Manchester United");
    $tim1->setNegara("Inggris");
    $tim1->setTahun("1878");
    $tim1->setPemain("D.Gea, Dalot, Varane, Maguire, Telles, McTominay, Fred, Pogba, Fernandes, Rashford, Ronaldo");

    // panggil method display untuk menampilkan data tim sepakbol
    $tim1->display();

?>