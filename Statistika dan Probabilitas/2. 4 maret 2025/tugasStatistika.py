import numpy as np #import library numpy dan disingkat np untuk pemanggilannya
import pandas as pd #import library pandas dan disingkat pd untuk pemanggilannya
import matplotlib.pyplot as plt #import matplotlib.pyplot dan disingkat plt untuk pemanggilannya

mean = 50 #membuat variabel mean dengan isi 50
standar_deviasi = 5 #membuat variabel standar_deviasi dengan isi 5
nilai = np.random.normal(mean, standar_deviasi, 100) #membuat nilai acak menggunakan numpy sebanyak 100 angka acak

np_mean = np.mean(nilai) #menghitung rata-rata dari data acak yang dihasilkan
np_median = np.median(nilai) #menghitung median dari data acak yang dihasikan
np_std = np.std(nilai) #menghitung standar deviasi dari data acak yang dihasilkan

data = {'x': [5, 10, 15, 20, 25], 
        'y': [10, 20, 20, 30, 30]} #membuat variabel data yang berisi yang berisi dua list yaitu x dan y

df = pd.DataFrame(data) #membuat variabel data menjadi DataFrame menggunakan pandas

mean_x = df['x'].mean() #menghitung rata-rata dari kolom 'x' dalam DataFrame
median_x = df['x'].median() #menghitung median dari kolom 'x' dalam DataFrame
modus_x = df['x'].mode()[0] #menghitung modus dari kolom 'x' dalam DataFrame
                        #`mode()` mengembalikan Series, jadi kita mengambil nilai pertama dengan `[0]`

mean_y = df['y'].mean()# menghitung rata-rata dari kolom 'y' dalam DataFram
median_y = df['y'].median() #menghitung median dari kolom 'y' dalam DataFrame
modus_y = df['y'].mode()[0] #menghitung modus dari kolom 'y' dalam DataFrame
                        #`mode()` mengembalikan Series, jadi kita mengambil nilai pertama dengan `[0]`

print("Random Data : ", nilai) #mencetak data acak yang dihasilkan
print("Rata-Rata", np_mean) #mencetak rata-rata dari data acak
print("Standar Deviasi : ", np_std) #mencetak standar deviasi dari data acak
print("Median : ", np_median, '\n') #mencetak median dari data acak

print("Kolom X : ") #mencetak label untuk statistik kolom 'x'
print(f"Mean dari kolom x : {mean_x}") #mencetak rata-rata dari kolom 'x'
print(f"Median dari kolom x: {median_x}") #mencetak median dari kolom 'x'
print(f"Modus dari kolom x : {modus_x}\n") #mencetak modus dari kolom 'x'

print("Kolom Y : ") #mencetak label untuk statistik kolom 'y'
print(f"Mean dari kolom 'y': {mean_y}") #mencetak rata-rata dari kolom 'y'
print(f"Median dari kolom 'y': {median_y}") #mencetak median dari kolom 'y'
print(f"Modus dari kolom y : {modus_y}") #mencetak modus dari kolom 'y'

plt.plot(nilai) #membuat grafik garis dari data acak yang dihasilkan
plt.scatter([mean], [np_mean], label = "Rata-rata Target", color = "red") #menambahkan titik scatter berwartna merah untuk menandai rata-rata target
plt.scatter([np_median], [np_median], label = "Median Data", color = "green") #menambahkan titik scatter berwartna hijau untuk menandai median data
plt.title('Data Distribusi Normal') #menambahkan judul grafik ke 1
plt.xlabel('Ideks') #menambahkan label sumbu x
plt.ylabel('Nilai') #menambahkan label sumbu y
plt.legend() #menambahkan kotak kecil ke grafik ke 1
plt.show() #menampilkan grafik pertama

plt.step(df['x'], df['y'], where='post', color = 'blue', label = 'Data Points') #membuat step plot dari data x dan y
plt.axvline(x = mean_x, color = 'red', linestyle = '--', label = 'Mean X') #menambahkan garis vertikal berwarna merah untuk menandai rata-rata kolom x
plt.axvline(x = median_x, color = 'orange', linestyle = ':', label = 'Median X') #menambahkan garis vertikal berwarna oren untuk menandai median kolomx
plt.axhline(y = mean_y, color = 'green', linestyle = '--', label = 'Mean Y') #menambahkan garis horizontal berwarna hijau untuk menandai rata-rata kolom y
plt.axhline(y = median_y, color = 'purple', linestyle = ':', label = 'Median Y') #menambahkan garis horizontal berwarna ungu untuk menandai median y
plt.title('Step Plot dari X vs Y dengan Statistik') #menambahkan judul gratik ke 2
plt.xlabel('x') #menambahkan label pada sumbu x
plt.ylabel('y') #menambahkan label pada sumbu
plt.legend() #menambahkan kotak kecil ke grafik ke 2
plt.show() #menampilkan grafik kedua