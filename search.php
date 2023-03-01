<?php    include "in/header.php"  ?>
<?php 
if(isset($_POST['query'])){

    $output = '';
    $query = "SELECT * FROM `gst_clients` WHERE trade_name LIKE '%" . $_POST['query'] . "%' ";
    $result = mysqli_query($connection, $query);
    $output = '<ul class = "list-unstyled">';
    if(mysqli_num_rows($result)> 0){
        while(  $row =  mysqli_fetch_array($result)){
            $output .= '<li>'.$row["trade_name"].'</li>';           
        }
    }
    else{
        $output .= '<li>Not Found</li>';
    }
    $output .= "</li>";
    echo $output;
    }
?>