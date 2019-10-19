import sys
import csv 
  
fields = ['Name', 'Phone Number','Email ID','College Name','Event','Branch'] 
data1=sys.argv[1]
data2=sys.argv[2]
data3=sys.argv[3]
data4=sys.argv[4]
data5=sys.argv[5]
data6=sys.argv[6]
data7=sys.argv[7]
# data rows of csv file 
rows = [ [data1, data2, data3, data4, data5,data6,data7]] 
  
# name of csv file 
filename = "name_records.csv"
  
# writing to csv file 
with open(filename, 'a') as csvfile: 
    # creating a csv writer object 
    csvwriter = csv.writer(csvfile) 
      
    # writing the fields 
   # csvwriter.writerow(fields) 
      
    # writing the data rows 
    csvwriter.writerows(rows)


#print(result)
