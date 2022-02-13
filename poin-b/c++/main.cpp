#include <iostream>
#include <string>

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *  Saya Yosafat (2009929) mengerjakan evaluasi Tugas Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk          *
 *  keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.                                        *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

using namespace std;

#include "Tim.cpp"

int main(){

    // deklarasi string untuk inputan data tim sepak bola
    string nama[2], negara, tahun, pemain[11];

    cout << "===== MASUKKAN DATA TIM ke-1 =====\n*Notes = maks 2 kata untuk nama tim\n" << endl;

    // INPUTAN OBJEK PERTAMA
    // inputan data nama tim oleh user
    cout << "Nama Tim      : ";
    for (int i = 0; i < 2; i++)
    {
        cin >> nama[i];
    }
    
    // inputan data negara asal tim oleh user
    cout << "Negara Asal   : ";
    cin >> negara;

    // inputan data tahun berdiri tim oleh user
    cout << "Tahun Berdiri : ";
    cin >> tahun;

    // inputan data nama pemain tim oleh user
    cout << "Pemain        : \n";

    int index = 1;
    for (int i = 0; i < 11; i++)
    {
        cout << index << ". ";

        cin >> pemain[i];
        index++;
    };

    
    // instansi objek tim1 dengan memanggil constructor
    Tim tim1 = Tim(nama, negara, tahun, pemain);

    // panggil method display untuk menampilkan data tim sepak bola menggunakan method getter
    tim1.display();

    cout << "===== MASUKKAN DATA TIM ke-2 =====\n*Notes = maks 2 kata untuk nama tim\n" << endl;

    string nama2[2], negara2, tahun2, pemain2[11];

    // INPUTAN OBJEK KEDUA
    // inputan data nama tim oleh user
    cout << "Nama Tim      : ";
    for (int i = 0; i < 2; i++)
    {
        cin >> nama2[i];
    }
    
    // inputan data negara asal tim oleh user
    cout << "Negara Asal   : ";
    cin >> negara2;

    // inputan data tahun berdiri tim oleh user
    cout << "Tahun Berdiri : ";
    cin >> tahun2;

    // inputan data nama pemain tim oleh user
    cout << "Pemain        : \n";

    index = 1;
    for (int i = 0; i < 11; i++)
    {
        cout << index << ". ";

        cin >> pemain2[i];
        index++;
    };

    // instansi objek tim1 dengan memanggil constructor
    Tim tim2 = Tim(nama2, negara2, tahun2, pemain2);

    // panggil method display untuk menampilkan data tim sepak bola menggunakan method getter
    tim2.display();
    

    return 0;
}