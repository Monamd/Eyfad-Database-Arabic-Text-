import mysql.connector
from mysql.connector import Error


try:
    connection = mysql.connector.connect(host='localhost',
                                         database='test_upload_image',
                                         user='root',
                                         password='')
    if connection.is_connected():
        db_Info = connection.get_server_info()
        print("Connected to MySQL Server version ", db_Info)
        cursor = connection.cursor()
        

except Error as e:
    print("Error while connecting to MySQL", e)

        


def write_file(data, filename):
    with open(filename, 'wb') as f:
        f.write(data)

     
        
        
def read_blob(volunteerIdentifier, filename):
    # select photo column of a specific author
    query = "SELECT imagePath FROM image WHERE  volunteerID= %s"

    # read database configuration
    
    cursor.execute(query, (volunteerIdentifier,))
    photo = cursor.fetchone()[0]
    print(photo)

        # write blob data into a file
    write_file(photo, filename)
    
    
    #to get the num of words before update
    query_2 = "SELECT numOfWords FROM volunteer WHERE  volunteerID= %s"
    cursor.execute(query_2, (volunteerIdentifier,))
    numOfWords = cursor.fetchone()[0]
    print(numOfWords)#------------>testing
    
    #to update the number of words, 40--------->num of words in the templete
    numOfWords+=40
    print('numOfWords:',numOfWords)
    sql = "UPDATE volunteer SET numOfWords = %s WHERE volunteerID = %s"
    val = (numOfWords,volunteerIdentifier)
    
    cursor.execute(sql,val)
    connection.commit()
    
    print(cursor.rowcount, "record(s) affected")
 
##########################################################################################
    #testing
    query_3 = "SELECT numOfWords FROM volunteer WHERE  volunteerID= %s"
    cursor.execute(query_3, (volunteerIdentifier,))
    numOfWords = cursor.fetchone()[0]
    print(numOfWords)#-------------->testing
    
#########################################################################################
    
    cursor.close()
    connection.close()
    

    
      
        
read_blob(1000,"C:\\xampp\\htdocs\\test\\dcuments\\garth_stein_test_3.jpg")



mmm
