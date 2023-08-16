  <style>
    .user-img {
      border-radius: 50%;
      height: 25px;
      width: 25px;
      object-fit: cover;
    }
  </style>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-[#FBA1B7] shadow-md">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if (isset($_SESSION['login_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars text-white"></i></a>
        </li>
      <?php endif; ?>
      <li>
        <a class="nav-link text-white" href="index.php?page=home" role="button">
          <large><b><?php echo $_SESSION['system']['name'] ?></b></large>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
          <span>
            <div class="d-felx badge-pill">
        
              <p style="color: white;"><b><?php echo ucwords($_SESSION['login_firstname']) ?><?php echo " "?><?php echo ucwords($_SESSION['login_lastname']) ?></b>
              <span class="fa fa-angle-down ml-2"></span></p>
            </div>
          </span>
        </a>
        <div class="dropdown-menu p-2 font-base space-y-2" aria-labelledby="account_settings" style="left: -2.5em;">
          <a class="dropdown-item hover:bg-rose-100" href="javascript:void(0)" id="manage_account"><i class="fa fa-cog"></i> Manage Account</a>
          <a class="dropdown-item hover:bg-rose-100" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <script>
    $('#manage_account').click(function() {
      uni_modal('Manage Account', 'manage_user.php?id=<?php echo $_SESSION['login_id'] ?>')
    })
  </script>