import pandas as pd
data = {'Nama': ['Andi', 'Budi', 'Cici',
        'Diana', 'Eka'],'Usia': [22, 23, 21, 25, 24]}
df = pd.DataFrame(data)
rata_rata = df['Usia'].mean()
varians = df['Usia'].var()
print("Rata-rata Usia:", rata_rata)
print("Varians Usia:", varians)
