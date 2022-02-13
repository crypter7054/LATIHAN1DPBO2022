#include <iostream>
#include <string>

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *                                                                                                                                           
 *  Saya Yosafat (2009929) mengerjakan evaluasi Tugas Praktikum dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk          *
 *  keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.                                        *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

using namespace std;

// deklarasi kelas tim
class Tim{
    
    private:

        // deklarasi atribut
        string namaTim[2];
        string negaraAsal;
        string tahunBerdiri;
        string pemain[11];

    public:

        // deklarasi konstruktor
        Tim(string inputNamaTim[2], string inputNegaraAsal, string inputTahunBerdiri, string inputPemain[11]){
            for (int i = 0; i < 2; i++)
            {
                this->namaTim[i] = inputNamaTim[i];
            }
            
            this->negaraAsal = inputNegaraAsal;
            this->tahunBerdiri = inputTahunBerdiri;
            
            for (int i = 0; i < 11; i++)
            {
                this->pemain[i] = inputPemain[i];
            }  
        }

        // deklarasi getter sebagai method Read Only
        string getTim(int temp){

            return this->namaTim[temp];        
        }
        
        string getNegara(){
            return this->negaraAsal;
        }
        string getTahun(){
            return this->tahunBerdiri;
        }
        string getPemain(int temp){

            return this->pemain[temp];
        }

        // deklarasi setter sebagai method Write
        void setTim(string inputTim[2]){
            for (int i = 0; i < 2; i++)
            {
                this->namaTim[i] = inputTim[i];
            }
        }
        void setNegara(string inputNegara){
            this->negaraAsal = inputNegara;
        }
        void setTahun(string inputTahun){
            this->tahunBerdiri = inputTahun;
        }
        void setPemain(string inputPemain[11]){
            for (int i = 0; i < 11; i++)
            {
                this->pemain[i] = inputPemain[i];
            }            
        }

        // deklarasi method display untuk menampilkan data menggunakan method getter
        void display(){

            cout << "\n===== DATA TIM =====" << endl;
            
            cout << "Nama Tim      : ";

            for (int i = 0; i < 2; i++)
            {
                cout << this->getTim(i) << " ";
            }

            cout << endl;
            
            cout << "Negara Asal   : " << this->getNegara() << endl;
            cout << "Tahun Berdiri : " << this->getTahun() << endl;
            cout << "Pemain        : " << endl;
            
            int index = 1;

            for (int i = 0; i < 11; i++)
            {
                cout << index << ". " << this->getPemain(i) << endl;
                index++;
            }

            cout << "\nDATA BERHASIL DISIMPAN :D\n" << endl;
            
        }

        // deklarasi destruktor
        ~Tim(){
        }

};