<?php
session_start();
include('./db_connect.php');
ob_start();
// if(!isset($_SESSION['system'])){

$system = $conn->query("SELECT * FROM system_settings")->fetch_array();
foreach ($system as $k => $v) {
  $_SESSION['system'][$k] = $v;
}
// }
ob_end_flush();
?>
<?php
if (isset($_SESSION['login_id']))
  header("location:index.php?page=home");

?>
<?php include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
  <style>
    body {
      /* Set the background color with opacity */
      background-image: rgba(255, 255, 255, 0.5);

      /* Set background image properties as needed */
      background-repeat: no-repeat;
      background-size: cover;
      /* Additional properties if desired */
    }
  </style>
</head>


<body class="hold-transition login-page" style="background-image: url('assets/img/background-image.jpg');">

  <img src="assets/img/logo.png" alt="ccsjdm logo" width="120px" height="120px"><br>
  <h2><b><?php echo $_SESSION['system']['name'] ?></b></h2>
  City College of San Jose Del Monte
  <div class="login-box">
    <div class="login-logo">
      <a href="#" class="text-white"></a>
    </div>
    <!-- /.login-logo -->
    <div class="" >
      <div class="card-body login-card-body" style="border-radius: 5px; padding: 10px">
        <form action="" id="login-form">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" required placeholder="ID number">
            <div class="input-group-append">
              <div class="input-group-text">
                
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" required placeholder="Password">
            <div class="input-group-append">
            <div class="input-group-text">
                
                </div>
            
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="">Login As</label>
            <select name="login" id="" class="custom-select custom-select-sm">
              <option value="3">Student</option>
              <option value="2">Faculty</option>
              <option value="1">Admin</option>
              <option value="6">Registrar</option>
              <option value="5">Dean</option>
              <option value="4">Program Head</option>
            </select>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-block" style="width: 340; background-color: #F74780; color: white;"> Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <footer>
    <br>
    <br>
    Copyright &copy; 2023 <a href="https://csjdm.gov.ph/government/departments/city-college-of-san-jose-del-monte/" target="_blank" style="color:#f74780">City College of San Jose Del Monte. </a>
    All rights reserved.
  </footer>
  <!-- /.login-box -->
  <script>
    $(document).ready(function() {
      $('#login-form').submit(function(e) {
        e.preventDefault()
        start_load()
        if ($(this).find('.alert-danger').length > 0)
          $(this).find('.alert-danger').remove();
        $.ajax({
          url: 'ajax.php?action=login',
          method: 'POST',
          data: $(this).serialize(),
          error: err => {
            console.log(err)
            end_load();

          },
          success: function(resp) {
            if (resp == 1) {
              location.href = 'index.php?page=home';
            } else {
              $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
              end_load();
            }
          }
        })
      })
    })
  </script>
  <?php include 'footer.php' ?>

</body>

</html>