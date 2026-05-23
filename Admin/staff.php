<?php

include('../database/connect.php');

$message="";
$alertType="";

if(isset($_POST['btnsubmit'])){



$name = $_POST['txtname'];
$gender = $_POST['cmdgender'];
$phone = $_POST['txtphone'];
$email = $_POST['txtemail'];
$address = $_POST['txtaddress'];
$position = $_POST['txtposition'];
$role = $_POST['cmdrole'];

if(
    empty($name) || empty($gender) || empty($phone) || empty($email) || empty($address) || empty($position) || empty($role)
){

$message="All fields are required...";
$alertType="danger";
}else{

// 1. Generate a Random Password (9 characters, secure)
$passwordBytes = random_bytes(9);
$password = bin2hex($passwordBytes); 

// 2. Generate a Random Admission Number (e.g., 4 digits: LUTHR-2026-XXXXXXSTF)
$staff_id = 'LUTHR-' . date("Y") . '-' . random_int(1000, 9999) . 'STF';

//submit to database
 $insert_staff = $dbh->prepare("INSERT INTO staff (staff_id,fullname,gender,phone,email,address,position,role)  VALUES (?,?,?,?,?,?,?,?)");
 $saved= $insert_staff->execute([$staff_id, $name,$gender,$phone,$email,$address,$position,$role]);

 if ($saved){
  $message="Staff data saved successfully";
  $alertType="success";
 }else{
    $message="Problem saving Staff";
  $alertType="danger";
 }
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Registration </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
  <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
       <?php include('partials/navbar.php'); ?>
      </nav>

      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
         
       <?php include('partials/sidebar.php'); ?>


        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Staff Form</h4>

                           <!-- Bootstrap Alert -->
            <?php if(!empty($message)){ ?>
                <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php } ?>

                    <form class="forms-sample" method="POST" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Fullname</label>
                        <input type="text" name="txtname" class="form-control" id="exampleInputName1" placeholder="John Doe">
                      </div>

 <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-select" name="cmdgender" id="exampleSelectGender" required>
                                <option value="">-- Select Sex --</option>
                                <option value="male">Male</option>
                                 <option value="female">Female</option>
                        </select>

                      </div>
    <div class="form-group">
                        <label for="exampleInputCity1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputphone" name="txtphone" placeholder="0805773335">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" name="txtemail" class="form-control" id="exampleInputEmail" placeholder="Email">
                      </div>
                    
                        <div class="form-group">
                        <label for="exampleInputCity1">Address</label>
                        <input type="text" class="form-control" name="txtaddress" id="exampleInputCity1" placeholder="address">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputPassword">Position</label>
                        <input type="text" class="form-control" name="txtposition" id="exampleInputposition" placeholder="Position">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleSelectGender">Role</label>
                        <select class="form-select" name="cmdrole" id="exampleSelectrole" required>
                                <option value="">-- Select Role --</option>
                                <option value="Teaching">Teaching</option>
                                 <option value="Non-teaching">Non-Teaching</option>
                        </select>

                      </div>
                        
                      <button type="submit" class="btn btn-primary me-2" name="btnsubmit" >Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <?php include('partials/footer.php') ?>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="assets/vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>