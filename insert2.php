<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user"; // Database name 
$tbl_name="newsletter"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$email=$_POST['email'];

// Insert data into mysql 
$sql="INSERT INTO newsletter (email)VALUES('$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
    header( 'Location: index.html' );
}

else {
echo "ERROR 404";
}
?> 

<?php 
// close connection 
mysql_close();
?>