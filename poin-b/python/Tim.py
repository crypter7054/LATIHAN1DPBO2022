from operator import index

# deklarasi kelas
class Tim():

    # deklarasi atribut private
    __namaTim = [0]*2
    __negaraAsal = ""
    __tahunBerdiri = ""
    __pemain = [0]*11

    # deklarasi constructor
    def __init__(self, namaTim = [0]*2, negaraAsal = "", tahunBerdiri = "", pemain = [0]*11):
        
        for i in range(2):
            self.__namaTim[i] = namaTim[i]

        self.__negaraAsal = negaraAsal
        self.__tahunBerdiri = tahunBerdiri

        for i in range(11):
            self.__pemain[i] = pemain[i]

    # deklarasi setter sebagai method Write    
    def setTim(self, namaTim):
        for i in range(2):
            self.__namaTim[i] = namaTim[i]
    
    def setNegara(self, negaraAsal):
        self.__negaraAsal = negaraAsal
    
    def setTahun(self, tahunBerdiri):
        self.__tahunBerdiri = tahunBerdiri
    
    def setPemain(self, pemain):
        for i in range(11):
            self.__pemain[i] = pemain[i]


    # deklarasi getter sebagai method Read Only
    def getTim(self, temp = [0]*2):
        return self.__namaTim[temp]
    
    def getNegara(self):
        return self.__negaraAsal
    
    def getTahun(self):
        return self.__tahunBerdiri
    
    def getPemain(self, temp = [0]*11):
        return self.__pemain[temp]

    # deklarasi method display untuk menampilkan data menggunakan method getter
    def display(self):

        print("\n===== DATA TIM =====")

        # tampilan untuk nama tim
        print("Nama Tim      :", end = " ")
        
        for i in range(2):
            print(self.getTim(i), end = " ")


        # tampilan untuk negara asal dan tahun
        print("\nNegara Asal   : " + str(self.getNegara()))
        print("Tahun Berdiri : " + str(self.getTahun()))
        
        # tampilan untuk nama tim
        print("Pemain        :")

        index = 1

        for i in range(11):
            print(index, end = ". ")
            print(self.getPemain(i))
            index+=1

        print("\nDATA BERHASIL DISIMPAN :D\n")
    

    