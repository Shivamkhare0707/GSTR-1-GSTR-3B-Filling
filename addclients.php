<?php error_reporting(0); ?>
<?php
session_start();
$f_name = $_SESSION['f_name'];
$email =  $_SESSION['email'];
$cid =  $_SESSION['cid'];
$mobile = $_SESSION['mobile'];
$role =  $_SESSION['role'];
$image =    $_SESSION['image'];
?>

<?php include "in/header.php"  ?>
<?php include "in/sidebar.php"  ?>
<?php include "in/navbar.php"  ?>

<section id="content" style="font-family: 'Comfortaa', cursive;">
    <main>
        <section style=" font-family: 'Comfortaa', cursive;">
            <div class="container py-6">
                <div class="row">
                    <div class="col-lg-2 ">
                        <div class="card mb-2 table_row" style="border: 1px solid white;">
                            <div class="card-body text-center table_row">
                                <img src="assests/image/image_8.png" alt="avatar" class="rounded-circle img-fluid "
                                    style="border: 2px solid white; height:80px; width:80px; margin-bottom:8px;">
                            </div>
                            <ul class="list-group list-group-flush rounded-1 table_row">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <p style="font-size: 12px;  height:8px;">Accounts Client</p>

                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <p style="font-size: 12px; height:8px;">IT Client</p>

                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <p style="font-size: 12px; height:8px;">GSTIN Client</p>

                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center p-1 table_row">
                                    <p style="font-size: 12px; height:8px;">Audit Client</p>

                                </li>
                            </ul>


                        </div>
                    </div>




                    <div class="col-md-6 col-mb-8">
                        <div class="card">
                            <div class="card-body" style="font-size: 14px;">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Name:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">Aditi Singh</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Father's Name:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">Chandan Singh</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Date of Birth:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">06-12-2000</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Address:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">30,sushila parisar, amkhera road, jabalpur (Madhya Pradesh)</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Mobile:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">8305291774</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Email:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">aditi83052@gmail.com</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Aadhaar:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">3244-5441-1234</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Registration Date:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">02/11/2014</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-0"><b>Registration No.:</b></p>
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0">ASDFR4567A</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-mb-8">
                        <div class="card" style="margin-left: 20px;">
                            <div class="card-body" style="font-size: 14px;">
                                <h6 style="font-size:18px;font-weight:bold;text-align:center;">Contact Information</h6>
                            </div>
                            <div class="row">
                                <div class="col-4" style="font-size:14px;">
                                    <p class="mb-0"><b>Name:</b></p>
                                </div>
                                <div class="col-8" style="font-size:14px">
                                    <p class="mb-0">Aditi Singh</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4" style="font-size:14px">
                                    <p class="mb-0"><b>Mobile:</b></p>
                                </div>
                                <div class="col-8" style="font-size:14px">
                                    <p class="mb-0">8305291774</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4" style="font-size:14px">
                                    <p class="mb-0"><b>Email:</b></p>
                                </div>
                                <div class="col-8" style="font-size:14px">
                                    <p class="mb-0">aditi83052@gmail.com</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4" style="font-size:14px">
                                    <p class="mb-0"><b>Mode of contact:</b></p>
                                </div>
                                <div class="col-8" style="font-size:14px">
                                    <p class="mb-0">Whatsapp</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4" style="font-size:14px">
                                    <p class="mb-0"><b>Usual Time to contact.:</b></p>
                                </div>
                                <div class="col-8" style="font-size:14px">
                                    <p class="mb-0">9am to 10 pm</p>
                                </div>
                            </div>
                            <div><button type="button" class="btn btn-outline-primary">D.A.</button>
                                <button type="button" class="btn btn-outline-danger">D.K.</button>
                            </div>

                        </div>
                    </div>
                    <div style="width:50%;">
                      <span>
                        <table class="table table-light" style="margin: 5px; padding: 10px;">
                            <thead>
                                <tr class="table-light" style="font-size: 14px;">
                                    <th>Bank Name</th>
                                    <th>Account Holder</th>
                                    <th>Account Number</th>
                                    <th>IFSC <br> Code</th>
                                    <th>Account Type</th>
                                    </class=>
                            </thead>
                            <tbody style="font-size:12px;">
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                                <tr>
                                    <td>UNO</td>
                                    <td>Aditi Singh</td>
                                    <td>12345667899</td>
                                    <td>SBIN0005678</td>
                                    <td>Current</td>
                                </tr>
                            </tbody>
                        </table>
</span>
                        
                    </div>
                    <span>
                            <table class="table table-light " ; style="margin:5%; padding:0px; Width:100%;">
                                <thead>
                                    <tr style="font-size: 14px;">
                                        <th>Name</th>
                                        <th>Client Type</th>
                                        <th>Registration No.</th>
                                        <th>File No.</th>
                                </thead>

                                <tbody style="font-size:12px;">
                                    <tr>
                                        <td>Ayush Singh</td>
                                        <td>It Client</td>
                                        <td>12345667899</td>
                                        <td>M-19</td>

                                    </tr>
                                    <tr>
                                        <td>Ayush Singh</td>
                                        <td>It Client</td>
                                        <td>12345667899</td>
                                        <td>M-19</td>

                                    </tr>
                                    <tr>
                                        <td>Ayush Singh</td>
                                        <td>It Client</td>
                                        <td>12345667899</td>
                                        <td>M-19</td>

                                    </tr>
                                    <tr>
                                        <td>Ayush Singh</td>
                                        <td>It Client</td>
                                        <td>12345667899</td>
                                        <td>M-19</td>

                                    </tr>
                                </tbody>
                            </table>

</span>
                </div>
            </div>
            </div>
            </div>



        </section>

    </main>

</section>
<?php include "in/footer.php"  ?>