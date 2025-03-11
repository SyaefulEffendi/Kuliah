import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

mean = 170
std_dev = 10
sample_size = 1000

heights = np.random.normal(mean, std_dev, sample_size)
df = pd.DataFrame(heights, columns=['Tinggi Badan'])
print(df.head())

plt.figure(figsize=(8 , 6))
sns.histplot(df['Tinggi Badan'], kde=True, color='blue')
plt.title('Distribusi Tinggi Badan dalam Populasi')
plt.xlabel('Tinggi Badan (cm)')
plt.ylabel('Frekuensi')
plt.show()

prob = np.sum((df['Tinggi Badan'] >= 160) & (df['Tinggi Badan'] <= 180))
print(f"Probabilitas tinggi badan antara 160cm dan 180cm : {prob:.2f}")

plt.figure(figsize=(8, 6))
sns.ecdfplot(df['Tinggi Badan'], color = 'green')
plt.title('Probabilitas Komulatif Tinggi Badan')
plt.xlabel('Tinggi Badan (cm)')
plt.ylabel('Probabilitas Komulatif')
plt.show()

print(df['Tinggi Badan'].describe())