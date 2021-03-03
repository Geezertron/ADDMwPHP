<?php
   
           $fname = $_GET['fname'];
           $lname = $_GET['lname'];
           $uname = $_GET['username'];
           $email = $_GET['email'];
           $pword = $_GET['password'];
           
           
 $servername ="localhost";
 $username = "root";
 $password = "";
 $dbname = "college";
 
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 if ($conn->connect_error){
     die("connection failed: ".$conn->connect_error);
 }
 
$sql = "insert into users(fname,lname,uname,email,password)values('$fname','$lname','$uname','$email','$pword')";

if ($conn->query($sql) === true){
    echo "ADDED: ".$fname. ", ". $lname. ", ". $uname. ", ". $email. ", ". $pword. ", ";
} else {
    echo "ERROR: ".$sql."<br>".$conn->error;
}
        
 $conn->close();

 header("refresh:3; url=404.php");
 /*  

    
    $host = 'localhost';
    $dbname = 'college';
    $username = 'root';
    $password = '';


    $con = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);

   
           $fname = $_GET['fname'];
           $lname = $_GET['lname'];
           $username = $_GET['username'];
           $email = $_GET['email'];
           $pword = $_GET['password'];
   
 $query = $con ->prepare("
          insert into users (First name, Last name, Username, Email, Password)
          values (:fname, :lname, :username, :email, :pword)
          
");  


$success = $query->execute([
        'fname' => $fname,
        'lname' => $lname,
        'username' => $username,
        'email' => $email,
        'pword' => $pword
        ]);
        
        
        
        
       */ 
        











  
   
   
   
?>

