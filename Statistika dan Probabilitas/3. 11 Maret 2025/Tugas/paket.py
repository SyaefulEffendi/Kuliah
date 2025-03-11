import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

mean = 5
std_deviasi = 2
paket = np.random.normal(mean, std_deviasi, 1000)

df = pd.DataFrame(paket, columns=['Waktu Pengiriman'])
print(df.head())

paket3hari = np.sum(df['Waktu Pengiriman'] <= 3)
print(f"Waktu Pengiriman kurang dari 3 hari : {paket3hari:.2f}")

paket47hari = np.sum((df['Waktu Pengiriman'] >= 4) & (df['Waktu Pengiriman'] <= 7))
print(f"Waktu Pengiriman Antara 4-7 hari : {paket47hari:.2f}")

plt.figure(figsize=(8, 6))
sns.histplot(df['Waktu Pengiriman'], kde = True, color='red')
plt.title('Distribusi Waktu Pengiriman Paket')
plt.xlabel('Waktu Pengiriman (hari)')
plt.ylabel('Frekuensi')
plt.show()

plt.figure(figsize=(8, 6))
sns.ecdfplot(df['Waktu Pengiriman'], color = 'blue')
plt.title('Probabilitas Komulatif Waktu Pengiriman')
plt.xlabel('Waktu Pengiriman (hari)')
plt.ylabel('Probabilitas Komulatif')
plt.show()