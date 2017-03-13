<?php
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '10034818');
 define('DBNAME', 'routeItdb');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }

?>