<?php
   define('DB_SERVER', 'localhost:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');
   define('DB_DATABASE', 'database');
   define('DB_BRANCH', 'kalyan', 'dombivli', 'thane', 'kurla')

   //
   $conn = $db = mysqli_connect(login_SERVER,login_USERNAME,login_PASSWORD,login_DATABASE,login_BRANCH);

   if($conn>connect_error){
    die("Connection failed: ".$conn->connect_error)
   }
   echo "Connection Successfully";
   
   mysqli_close($conn);
?>