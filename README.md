# Library Searcher
> This website application can provide plenty of convenience for users to find their desired library. 
They can find detailed information and other people's comments on the website.  


## Table of contents
* [General info](#general-info)
* [Getting Started](#getting-started)
* [Built With](#built-with)
* [Authors](#authors)
* [References](#references)

## General info
**Motivation**
- A website can help people to find the library.
- Provide convenience for users who prefer to visit traditional libraries.

**Purposes and functions**
- Whateve age, education level and status they are,users can use this web easily
- Users can sign up and login in
- Users can check the detailed information of the libraries
- They can see other user's comment on libraries

## Getting Started

Step 1: Run Spark Slave #1
- Open a new SSH terminal and type the following command:
`
sudo docker run --hostname=sparkslave1 --net infs3208 --ip 172.45.0.3 -ti infs3208/slaveenv /bin/bash
`
- In the started docker “sparkslave1”, run the following command:
```
bash /root/init.sh
source /etc/profile
```

Step 2: Run Spark Slave #2
- Open a new SSH terminal and type the following command:
`
sudo docker run --hostname=sparkslave2 --net infs3208 --ip 172.45.0.4 -ti infs3208/slaveenv /bin/bash
`
- In the started docker “sparkslave2”, run the following command:
```
bash /root/init.sh
source /etc/profile
```

Step 3: Run Spark Master
- Open a new SSH terminal and type the following command:
`
sudo docker run --hostname=sparkmaster --net infs3208 --ip 172.45.0.2 -p 8888:8888 -p 50070:50070 -p8088:8088 -p 8042:8042 -p 4040:4040 -p 3307:3306 -ti -v ~/ccproject:/root/infs3208 infs3208/masterenv /bin/bash
`
- In the started docker “sparkmaster”, run the following command:
```
source /etc/profile
bash /root/init.sh
```
> Note: You should use source to enable environment before running the bash shell.

Step 4: SQL connect
Start the MySQL by using:
```
service mysql start
```
Add a MySQL JDBC connector:
`
cd /root/spark/jars
`
`
wget https://storage.googleapis.com/infs3208/dockerenv/mysql-connector-java-5.1.48-bin.jar
`
`
chmod 777 mysql-connector-java-5.1.48-bin.jar
`
Restart the cluster and Jupyter Notebook:
```
cd /root/spark/sbin
stop-all.sh
start-all.sh
```

Step 5: Copy the file “demo.txt” from master docker to HDFS with a new name:
`
cd infs3208/data
hdfs dfs –copyFromLocal ~/infs3208/data/librarydata.json /test/librarydata.hdfs.json
`
Check the copy file whether exist:
`
hdfs dfs -ls /test
`

Step 6: Reconnect jupyter notebook and connect mysql
1. Reconnect Jupyter notebook:
```
bash /root/init.sh
```
2. Import the related package(Pra 9 example):
```
import org.apache.spark.sql.SQLContext
import java.util.Properties
import java.sql.DriverManager
import java.sql.Connection
import org.apache.spark.sql.{Row, SparkSession}
import org.apache.spark.sql.types._
import scala.collection.mutable
import java.text.SimpleDateFormat
```
3. Configure MySQL connection:
```
val spark = new SparkSession.Builder().appName("studentmangement").getOrCreate()
val sc = spark.sparkContext
var url = "jdbc:mysql://localhost:3306/hive"
val sqlContext = new SQLContext(sc)
val properties = new Properties()
properties.setProperty("user","hive")
properties.setProperty("password","hive")
properties.setProperty("useSSL","false")
```
4. Test Connection:
```
import spark.sqlContext.implicits._
import org.apache.spark.sql.functions._
import org.apache.spark.mllib.linalg.Vectors
import org.apache.spark.mllib.stat.Statistics
var tableName = "ROLES"
val dataFrame = sqlContext.read.jdbc(url, tableName,properties)
dataFrame.select("ROLE_ID","ROLE_NAME").show()
```

Step 7: create shema project of my sql
exit notebook again by `ctrl c + y` :
```
mysql -u root
create user 'project'@'%' identified by 'project';
create schema project default character set utf8 collate utf8_general_ci;
GRANT ALL PRIVILEGES ON project.* TO 'project'@'%';
flush privileges ;
```
Create user table and comment table:
```
sql>
CREATE TABLE `project`.`comment` ( `id` INT(10) NOT NULL  PRIMARY KEY, `user` VARCHAR(30) NOT NULL , `content` VARCHAR(100) NOT NULL , `time` DATETIME(0) NOT NULL ) ENGINE = MyISAM;
CREATE TABLE `project`.`user` ( `username` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL ) ENGINE = MyISAM;
```
Reconnect jupyter notebook:
```
bash /root/init.sh
```

## Setup
> set up PHP connect to Spark SQL in GCP:
> set SQL remote access authority
1. Start SQL by entering 'service mysql start' in the sparkmaster, 
2. Then enter into a document using 'vim /etc/mysql/mysql.conf.d/mysqld.cnf',
3. Find out the bind-address(127.0.0.1) and change it to '0.0.0.0'.
4. Press 'i' to edit the document, then press 'esc' and enter ':wq' and ENTER, it will save the document and exit.


## Built With
* Docker
* Mysql
* Spark Sql
* HDFS
* Jupyter notebook
* HTML
* CSS
* JavaScript
* PHP
* Advanced Analytic Tool: machine learning in Spark MLlib to analyse which library users prefer to go from different location.
* Advanced web technologies: server-side scripting to display a series of markers (derived from SLQ data on an OpenStreetMap map) and show the location of libraries. 
This means a combination of PHP, SQL and JavaScript.

## Authors
* Jinyuan Chen ID: s4575810
* Jing Long ID: s44020495
* Jinghong Wang ID: s44562799

## References
JavaScript plugin Leaflet:
> Quick Start Guide – Leaflet – a JavaScript library for interactive maps. Retrieved from https://leafletjs.com/examples/quick-start/

Free photos from pexels.com:
> Interior view of Library [Image] (2017). Retrieved from https://www.pexels.com/photo/interior-view-of-library-1837726/

> People at Library Sitting Down at Tables [Image] (2014). Retrieved from https://www.pexels.com/photo/people-at-library-sitting-down-at-tables-757855/

> Chair Beside Book Shelves [Image] (2019). Retrieved from https://www.pexels.com/photo/chair-beside-book-shelves-2041540/

> Assorted Books on Shelf [Image] (2018). Retrieved from https://www.pexels.com/photo/assorted-books-on-shelf-1290141/

> Library Filled With Bookcases [Image] (2017). Retrieved from https://www.pexels.com/photo/ancient-antique-architectural-design-architecture-442420/

> Stack of Books in Shelf [Image] (2015). Retrieved from https://www.pexels.com/photo/stack-of-books-in-shelf-256559/

> Library Photo [Image] (2018). Retrieved from https://www.pexels.com/photo/library-photo-1319854/

> Library High Angle Photro [Image] (2016). Retrieved from https://www.pexels.com/photo/library-high-angle-photro-159775/

> Assorted Books on Shelf [Image] (2018). Retrieved from https://www.pexels.com/photo/assorted-books-on-shelf-1370295/

> Photography of Library Interiror [Image] (2015). Retrieved from https://www.pexels.com/photo/bookcase-books-bookshelves-hallway-270571/

> Row of Books in Shelf [Image] (2014). Retrieved from https://www.pexels.com/photo/row-of-books-in-shelf-256541/

> Books on Wooden Shelves Inside Library [Image] (2018). Retrieved from https://www.pexels.com/photo/books-on-wooden-shelves-inside-library-2908984/
