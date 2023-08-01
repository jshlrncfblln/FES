<style>

p{  
  color: black;
font-weight: 1px;
}

.nav-pills .nav-link.active{
background-color: lightgrey;

}

.nav-icon{
color:black;

}

</style>
  <aside class="main-sidebar border" style="background-color:	white;">
    <div class="dropdown">
      <a href="index.php?page=home" class="brand-link">
        <h3 class="text-center p-0 m-0" style="color: black;"><b>Registrar Panel</b></h3>
      </a>
      <p style="margin-top:70px;"></p>
      <div style="text-align: center; margin-bottom:-40px;">
      <img src="assets/img/logo.png" alt="ccsjdm logo" width="120px" height="120px">
</div>
    </div>
    <div class="sidebar" >
      <nav class="mt-2" style="color: #eb6d00;">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="index.php?page=home" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt" ></i>
                <p class="fw-normal" style="color:black;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=subject_list" class="nav-link nav-subject_list">
              <i class="nav-icon fas fa-th-list"></i>
              <p class="fw-normal" style="color:black;">
                Subjects
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=class_list" class="nav-link nav-class_list">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Classes
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="./index.php?page=student_list" class="nav-link nav-edit_student">
            <i class="nav-icon fas fa-users"></i>
                <p class="fw-normal" style="color:black;">
                Student list
              </p>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a href="./index.php?page=report" class="nav-link nav-report">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Faculty Report
              </p>
            </a>
          </li>


          <li class="nav-item dropdown">
            <a href="./index.php?page=departmentalreport" class="nav-link nav-departmentalreport">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Departmental Report
              </p>
            </a>
          </li>


          <li class="nav-item dropdown">
            <a href="./index.php?page=overallreport" class="nav-link nav-overall-report">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Overall Report
              </p>
            </a>
          </li>

      </nav>
                
   
      <p style="margin-top: 370px; text-align: center; color: grey;">Copyright &copy; 2023 <a href="https://csjdm.gov.ph/government/departments/city-college-of-san-jose-del-monte/" target="_blank;" style="color:grey; "><br>City College of San Jose Del Monte</a>
     <br> All rights reserved.
</p>
        </ul>
      
    </div>
  </aside>
  
  <script>
    $(document).ready(function() {
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if (s != '')
        page = page + '_' + s;
      if ($('.nav-link.nav-' + page).length > 0) {
        $('.nav-link.nav-' + page).addClass('active')
        if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
          $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
          $('.nav-link.nav-' + page).parent().addClass('menu-open')
        }

      }

    })
  </script>