from Tim import Tim

print("===== MASUKKAN DATA TIM ke-1 =====\n*Notes = maks 2 kata untuk nama tim\n")

# deklarasi array of string untuk insputan data nama tim dan pemain
nama = [0]*2
pemain = [0]*11

# inputan data nama tim oleh user
print("Nama Tim      :")
idx = 1
for i in range(2):
    print("Kata ke-", idx, end = ": ")
    nama[i] = input()
    idx+=1
    
# deklarasi array of string untuk inputan data negara dan tahun
# inputan data negara dan tahun tim oleh user
negara = input("Negara Asal   : ")
tahun = input("Tahun Berdiri : ")

# inputan data nama pemain tim oleh user
print("Pemain        :")
index = 1
for i in range(11):

    print(index, end = ". ")
    pemain[i] = input()

    index+=1

# instansi objek tim1 dengan memanggil constructor
tim1 = Tim(nama, negara, tahun, pemain)

# panggil method display untuk menampilkan data tim sepak bola menggunakan method getter
tim1.display()