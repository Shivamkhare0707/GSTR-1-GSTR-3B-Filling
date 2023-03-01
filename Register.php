<?php error_reporting(0); ?>
<?php include "in/header.php" ?>
<?php    
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['cid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>

<?php include "in/footer.php"  ?>
<?php include "alerts.php" ?>