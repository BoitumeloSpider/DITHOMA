<?php
extract($_POST);
$url="localhost";
$username="root";
$password="";
$dbname = "database";
$conn=mysqli_connect($url,$username,$password,$dbname);
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}
  $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
     if(mysqli_num_rows($sql)>0)
        {
            echo "Email Id Already Exists"; 
            exit;
        }
        else
        {
            $first_name =  $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $email = $_REQUEST['email'];
            $pass =$_REQUEST['pass'];
           $query="INSERT INTO register (First_Name, Last_Name, Email, Password) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)')";
               
           $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
                header ("Location: login.php");
          
        }
        
    
?>
