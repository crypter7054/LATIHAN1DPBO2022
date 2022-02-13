public class Tim {

    // deklarasi atribut private
    private String[] namaTim = new String[2];
    private String negaraAsal;
    private String tahunBerdiri;
    private String[] pemain = new String[11];

    
    // deklarasi konstruktor
    public Tim(String[] inputNamaTim, String inputNegaraAsal, String inputTahunBerdiri, String[] inputPemain){
        
        for (int i = 0; i < 2; i++) {
            this.namaTim[i] = inputNamaTim[i];
        }
    
        this.negaraAsal = inputNegaraAsal;
        this.tahunBerdiri = inputTahunBerdiri;

        for (int i = 0; i < 11; i++) {
            this.pemain[i] = inputPemain[i];
        }
    }

    // deklarasi getter sebagai method Read Only
    public String getTim(int temp){
        return this.namaTim[temp];
    }
    public String getNegara(){
        return this.negaraAsal;
    }
    public String getTahun(){
        return this.tahunBerdiri;
    }
    public String getPemain(int temp){
        return this.pemain[temp];
    }

    
    // deklarasi setter sebagai method Write
    public void setTim(String[] namaTim){

        for (int i = 0; i < 2; i++) {
            this.namaTim[i] = namaTim[i];
        }
    }
    public void setNegara(String negaraAsal){
        this.negaraAsal = negaraAsal;
    }
    public void setTahun(String tahunBerdiri){
        this.tahunBerdiri = tahunBerdiri;
    }
    public void setPemain(String[] pemain){
                
        for (int i = 0; i < 11; i++) {
            this.pemain[i] = pemain[i];
        }
    }

    // deklarasi method display untuk menampilkan data menggunakan method getter
    public void display(){
        
        System.out.println("\n===== DATA TIM =====");
        
        // tampilan untuk nama tim
        System.out.println("Nama Tim      : ");

        for (int i = 0; i < 2; i++) {
            System.out.println(this.getTim(i));
        }

        // tampilan untuk negara asal dan tahun berdiri tim
        System.out.println("Negara Asal   : " + this.getNegara());
        System.out.println("Tahun Berdiri : " + this.getTahun());

        // tampilan untuk pemain
        System.out.println("Pemain        : ");

        int index = 1;
        for (int i = 0; i < 11; i++) {
            System.out.print(index);
            System.out.print(". ");
            System.out.println(this.getPemain(i));
            index++;
        }

        System.out.println("\nDATA BERHASIL DISIMPAN :D\n");
    }

}
    