# LATIHAN1DPBO2022
Kumpulan source code tugas latihan praktikum mata kuliah Desain dan Pemrograman Berorientasi Objek (DBPO) tahun 2022

## Identitas
- Nama : Yosafat
- NIM  : 2009929
- Prodi : Ilmu Komputer C2

## Janji
Saya Yosafat (2009929) mengerjakan evaluasi Tugas Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Latihan 1. Point a
**Soal** : Buat program untuk membuat daftar mahasiswa yang memiliki atribut NIM, Nama, Jenis Kelamin, Program Studi, dan Semester, menggunakan bahasa PHP!

### Analisis
Berdasarkan soal point a, maka dapat diidentifikasi beberapa hal yaitu sebagai berikut:
1. Membuat program berupa daftar mahasiswa dengan beberapa atribut dalam bahasa PHP menggunakan paradigma pemrograman berorientasi objek atau OOP. Dikarenakan akan menggunakan paradigma pemrograman berorientasi objek, maka pada program yang dibuat membutuhkan kelas yang terdiri dari atribut NIM, Nama, Jenis Kelamin, Program Studi, dan Semester sesuai dengan ketentuan pada soal
2. Sebuah kelas terdiri dari beberapa atribut dan method. Adapun atribut NIM dan Semester dibuat dengan tipe data integer karena data yang dimasukkan berupa numerik. Sedangkan untuk atribut Nama, Jenis Kelamin, dan Program Studi dibuat dengan tipe data string karena data yang akan dimasukkan berupa deret/kumpulan karakter. 
3. Kemudian method yang akan digunakan antara lain, Constructor, Setter, Getter, dan Destructor. Setter dan Getter digunakan dalam program untuk mengimplementasikan konsep enkapsulasi pada OOP. Constructor adalah method yang pertama kali dijalankan ketika sebuah objek diinstasi, constructor ini dibuat dengan menggunakan parameter berupa atribut sesuai dengan tipe datanya masing-masing. Sedangkan method Setter adalah method yang digunakan untuk mengubah data atau atribut (Write mode) yang terdapat pada kelas. Method Getter digunakan untuk mengambil/membaca data atau atribut yang terdapat pada kelas. Sedangkan destructor adalah method yang dijalankan ketika sebuah objek dihapus.

### Desain
Berdasarkan analisis terhadap point a, maka program dapat didesain sebagai berikut:
1. Program terdiri dari 2 file, yaitu file index.php dan file kelas Mahasiswa.php
2. File index.php merupakan program dengan fungsi utama yang akan dijalankan pertama kali, pada file ini perlu untuk meng-import file kelas yaitu Mahasiswa.php, selanjutnya instasi objek dengan nama mahasiswa1. Kemudian untuk menambahkan data pada objek maka akan dipanggil method setter. Terakhir untuk menampilkan data objek maka akan dipanggi method getter.
3. File Mahasiswa.php merupakan program yang didesain untuk membuat kelas dari objek yang akan dibentuk pada file index.php. Pada file ini terdapat deklarasi kelas, atribut private, dan beberapa method yang digunakan untuk membuat sebuah objek

## Latihan 1. Point b
**Soal** : Buat program untuk membuat daftar tim sepakbola yang memiliki atribut nama tim, negara asal tim, tahun berdiri tim, serta pemain, menggunakan setiap bahasa (C++, PHP, Python dan Java)!

### Analisis
Berdasarkan soal point b, maka dapat diidentifikasi beberapa hal yaitu sebagai berikut:

### Desain
Berdasarkan analisis terhadap point b, maka program dapat didesain sebagai berikut:

