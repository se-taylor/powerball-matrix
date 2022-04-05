import wget
import os

urls = ['https://data.ny.gov/api/views/d6yy-54nr/rows.csv?accessType=DOWNLOAD']

path = 'p-a-t-h/csv/Lottery_Powerball_Winning_Numbers__Beginning_2010.csv'

for url in urls:
    filename = path
    if os.path.exists(filename):
        os.remove(filename)
    wget.download(url, out=filename)