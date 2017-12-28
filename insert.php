<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dmpcs"; // Database name 
$tbl_name="mail"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// Insert data into mysql 
$sql="INSERT INTO mail (Name, Email, Subject, Message)VALUES('$name', '$email', '$subject', '$message')";
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