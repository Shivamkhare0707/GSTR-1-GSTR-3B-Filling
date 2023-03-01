<?php
$connection = mysqli_connect('localhost', 'root', '', 'test');
if (!$connection) {
  die("Database connection failed");
}

$currentMonth = date('m');

function currentMonth(){
    $currentMonth = date('ym');
    $currentMonthOfFiling = "3B".date('ym',strtotime("-1 month"));
    
    $currentYear = date('y');
    $currentYearMonth = date('m');
    if ($currentYearMonth <= 3) {
        $currentYearStarting =  date('y',strtotime("-1 year"));    
    echo " Current Year starting is :"."$currentYearStarting"."<br>";
    }
}

currentMonth();

$result  = 0;

switch ($currentMonth ) {
    case "Apr":
        $cnt = "SELECT* FROM `gst_clients` WHERE `Apr` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "May":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `May` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
    case "Jun":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Jun` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;

    case "Jul":
        $cnt = "SELECT * FROM `gst_clients` WHERE `Jul` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Aug":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Aug` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Sep":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Sep` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Oct":
        $cnt = "SELECT * FROM `gst_clients` WHERE `Oct` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Nov":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Nov` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Dec":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Dec` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Jan":
        $cnt = "SELECT * FROM `gst_clients` WHERE `Jan` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Feb":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Feb` = 'F' ";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
    case "Mar":
        $cnt = "SELECT * FROM `gst_clients` WHERE  `Mar` = 'F'";
        $result = mysqli_query($connection, $cnt);
$result = mysqli_num_rows($result);
        break;
}



echo " Current Month is :"."$currentMonth"."<br>";
echo " Current Month of Filing is :"."$currentMonthOfFiling";



?>

