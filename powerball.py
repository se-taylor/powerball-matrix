import pandas as pd
import csv
from datetime import datetime

#Read new powerball csv
df = pd.read_csv('p-a-t-h/csv/Lottery_Powerball_Winning_Numbers__Beginning_2010.csv',
            index_col='Draw Date',
            parse_dates=['Draw Date'],
            header=0,
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.sort_values(["Draw Date"], axis=0, ascending=[False], inplace=True)
print(df)
df.to_csv('p-a-t-h/csv/powerball.csv', mode='w')


#Read orig and append to new
df = pd.read_csv('p-a-t-h/csv/powerball_orig.csv',
            index_col='Draw Date',
            parse_dates=['Draw Date'],
            header=0,
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.sort_values(["Draw Date"], axis=0, ascending=[False], inplace=True)

df.to_csv('p-a-t-h/csv/powerball.csv', mode='a', header=None)

with open('p-a-t-h/csv/powerball.csv', newline='') as f:
    csvread = csv.reader(f)
    

#Powerball Clean
df = pd.read_csv('p-a-t-h/csv/powerball.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_clean.csv', header=None)


#Monday
df = pd.read_csv('p-a-t-h/csv/powerball.csv')
df['Multiplier'] = df['Multiplier'].astype('Int64')

df = df[pd.to_datetime(df['Draw Date']).dt.weekday == 0]

df.to_csv('p-a-t-h/csv/powerball_monday.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/powerball_monday.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_monday_clean.csv', header=None)


#Wednesday
df = pd.read_csv('p-a-t-h/csv/powerball.csv')
df['Multiplier'] = df['Multiplier'].astype('Int64')

df = df[pd.to_datetime(df['Draw Date']).dt.weekday == 2]

df.to_csv('p-a-t-h/csv/powerball_wednesday.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/powerball_wednesday.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_wednesday_clean.csv', header=None)


#Saturday
df = pd.read_csv('p-a-t-h/csv/powerball.csv')
df['Multiplier'] = df['Multiplier'].astype('Int64')

df = df[pd.to_datetime(df['Draw Date']).dt.weekday == 5]

df.to_csv('p-a-t-h/csv/powerball_saturday.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/powerball_saturday.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_saturday_clean.csv', header=None)


#2015-10-07 New Ten
df = pd.read_csv('p-a-t-h/csv/powerball.csv')
df['Multiplier'] = df['Multiplier'].astype('Int64')

df = df[pd.to_datetime(df['Draw Date']) > '2015-10-07']

df.to_csv('p-a-t-h/csv/powerball_ten.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/powerball_ten.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_ten_clean.csv', header=None)


#2015-10-07 Nine Less
df = pd.read_csv('p-a-t-h/csv/powerball.csv')
df['Multiplier'] = df['Multiplier'].astype('Int64')

df = df[pd.to_datetime(df['Draw Date']) < '2015-10-07']

df.to_csv('p-a-t-h/csv/powerball_nine.csv', mode='w', index=None)

df = pd.read_csv('p-a-t-h/csv/powerball_nine.csv',
            index_col='Winning Numbers',
            header=0,
            usecols = [1, 2],
            names=['Draw Date', 'Winning Numbers', 'Multiplier'])

df['Multiplier'] = df['Multiplier'].astype('Int64')
df.to_csv('p-a-t-h/csv/powerball_nine_clean.csv', header=None)