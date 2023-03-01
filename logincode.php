<?php  
include("in/header.php") ;
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password= $_POST['password'];

    

    $query  = "SELECT * FROM `users` Where `email` = '$email'";
    $query_run = mysqli_query(   $connection,$query );
    $count = mysqli_num_rows($query_run);  

    $query1  = "SELECT * FROM `users` Where  `password` ='$password'";
    $query_run1 = mysqli_query(   $connection,$query1 );
    $count1 = mysqli_num_rows($query_run1);
 
    
if($count!=1){
    $_SESSION['Status']="email Invalid";
    $_SESSION['Status_code']="error";
    header("Location: Register.php?error=Email is missing"); 
    }else if($count1!=1){
        
            $_SESSION['Status']="password Invalid";
            $_SESSION['Status_code']="error";
            header("Location: login.php?error=Password is missing");   
        }else{  
            $query  = "SELECT * FROM `users` Where `email` = '$email' And `password` ='$password'";
            $result = mysqli_query($connection, $query);
                    if (!$result) {
                        die('Query FAILED' . mysqli_error());
                    } else {
                                   $_SESSION['Status']="Registerd/Inserted successfully";
                                   $_SESSION['Status_code']="success";
                                    while ($row = mysqli_fetch_assoc($result)) {
                                      $_SESSION['f_name'] =  $row['f_name']."<br>";                                     
                                      $_SESSION['email'] =  $row['email']."<br>";
                                      $_SESSION['cid'] =  $row['cid']."<br>";
                                      $_SESSION['mobile'] =  $row['mobile']."<br>";
                                      $_SESSION['role'] =  $row['role']."<br>";
                                      $_SESSION['image'] =  $row['image'];"<br>";
                                      
                    
                    } 
                    }                 

            header("Location:  blank.php");
}



 }else{
$_SESSION['Status']="Access denied";
header("Location: login.php");
 }

