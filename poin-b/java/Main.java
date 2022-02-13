import java.util.Scanner;

public class Main {
    
    public static void main(String[] args) {

        // deklarasi string untuk inputan data tim sepak bola
        String[] inputNamaTim = new String[2];
        String[] inputPemain = new String[11];
        String inputNegaraAsal, inputTahunBerdiri;

        // deklarasi scanner untuk membuat inputan user
        Scanner input = new Scanner(System.in);
            
        System.out.println("===== MASUKKAN DATA TIM ke-1 =====\n*Notes = maks 2 kata untuk nama tim\n");       

        // inputan data nama tim
        System.out.println("Nama Tim      : ");
        int idx = 1;
        for (int i = 0; i < 2; i++) {
            System.out.print("Kata ke-");
            System.out.print(idx);
            System.out.print(": ");

            inputNamaTim[i] = input.nextLine();
            idx++;
        }

        // inputan data negara asal tim oleh user
        System.out.print("Negara Asal   : ");
        inputNegaraAsal = input.nextLine();
        
        // inputan data tahun berdiri tim oleh user
        System.out.print("Tahun Berdiri : ");
        inputTahunBerdiri = input.nextLine();
        
        
        // inputan data nama pemain tim oleh user
        System.out.println("Pemain        :");
        int index = 1;
        for (int i = 0; i < 11; i++) {
            System.out.print(index);
            System.out.print(". ");
            inputPemain[i] = input.nextLine();
            index++;
        }       
        
        // instansi objek tim1 dengan memanggil constructor
        Tim tim1 = new Tim(inputNamaTim, inputNegaraAsal, inputTahunBerdiri, inputPemain);

        // panggil method display untuk menampilkan data tim sepak bola menggunakan method getter
        tim1.display();
    }
}
