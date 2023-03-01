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

$connections;
$query = "Select * FROM gst_clientsss";
$result = mysqli_query($connection, $query);
$count =  mysqli_num_rows($result);
if ($count > 0) {
} else {
    header("Location: addUser.php?addUser");
}

?>
<?php include "in/sidebar.php" ?><?php include "in/navbar.php" ?>

<section id="content">

<main>
        <div class="page-content-wrapper-inner">
            <div class="col-lg">
                <div class="grid">
                    <p class="grid-header table_row"><b>Total <?php echo $count;  ?> Users</b>
                        

                        <?php
                        $query = $_POST['search'];
                        $result = mysqli_query($connection, "SELECT * FROM gst_clientsss WHERE trade_name LIKE '%$query%'"); ?>
                    </p>
                    <div class="page-content-wrapper-inner  table_row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="padding:50px;" class="table_row">
                                    <tr>
                                        <th class="pl-4" style= "text-align: left">Photo</th>
                                        <th>Party</th>
                                        <th>Contact</th>
                                        <th>Other Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $key => $value) {

                                    ?>
                                        <tr style="font-family: 'Comfortaa', cursive; " class="table_row">
                                            <td style="width:10%;">
                                                <div style="width:fit-content;">
                                                    <img class="profile-img img-xm" src="assests/image/image_8.png" alt="profile image" style=" border-radius: 70%; width:50px; height:50px; ">
                                                </div>
                                            </td>
                                            <td>   
                                            <small class="text-black font-weight-medium d-block" style="font-size: 16px"><?php echo $value['trade_name']; ?> </small>
    
                                                <small><span class="status-indicator rounded-indicator small bg-success"></span><?php echo $value['GSTIN'];   ?></span></small>
                                                <br>
                                                <small><span class="status-indicator rounded-indicator small bg-success"></span><?php echo $value['Contect_person'];   ?></span></small>

                                            </td>

                                            
                                            
                                            <th>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="text-info row"><span><small><?php echo $value['email'];   ?></small></span></div>
                                                        <div class="text-info row"><span><small>+91 <?php echo $value['mobile'];   ?></small></span></div>
                                                        <div class="text-info row">
                                                            <div class="col table_row"><a href="https://web.whatsapp.com/send?phone=91<?php echo $value['mobile'];   ?>&text="><i class="bi bi-whatsapp"></i></a>
                                                            </div>
                                                            <div class="col table_row"><a href="mailto:<?php echo $value['email'];   ?>"><i class="bi bi-envelope"></i></box-icon></a></div>
                                                            <div class="col table_row"><a href="tel:+91<?php echo $value['email'];   ?>"><i class="bi bi-telephone-forward"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </th>

                                            <th class="text-center">
                                                <div class="row" style="font-size:12px;">
                                                    <div class="col">
                                                        <div class="text-info right row">GST:</div>
                                                        <div class="text-info row">IT:</div>
                                                        <div class="text-info row">DSC:</div>
                                                        <div class="text-info row">Employee:</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="text-info row">M-99</div>
                                                        <div class="text-info row">M-99</div>
                                                        <div class="text-info row">M-99</div>
                                                        <div class="text-info row"><?php  
                                                        
                                                        $name = "SELECT u.f_name FROM users AS u LEFT JOIN gst_clientsss AS g ON u.cid = g.employee_id";
                                                        $ename = mysqli_query($connection, $name);
                                                        if($ename) {
                                                          while($row = mysqli_fetch_assoc($ename)) {
                                                            echo $row['f_name'];
                                                            break;
                                                          }
                                                        } else {
                                                          echo "Error: " . mysqli_error($connection);
                                                        }
                                                        

                                                        
                                                        ?></div>
                                                    </div>
                                                </div>
                                            </th>



                                        </tr>

                                    <?php } ?>








                                </tbody>
                            </table>
                            <!-- DELETE function USING AJEX -->

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </main>

</section>


<?php include "in/footer.php"  ?>


<script>


</script>