<style>

p{  
  color: black;
font-weight: 1px;
}

.nav-pills .nav-link.active{
background-color: #fecdd3;

}

.nav-icon{
color:black;

}

</style>
  <aside class="main-sidebar border" style="background-color:	white;">
    <div class="dropdown">
      <a href="index.php?page=home" class="brand-link">
        <h3 class="text-center p-0 m-0" style="color: black;"><b>Admin Panel</b></h3>
      </a>
      <p style="margin-top:70px;"></p>
      <div style="text-align: center; margin-bottom:-40px;">
      <img src="assets/img/logo.png" alt="ccsjdm logo" width="120px" height="120px">
    </div>
    </div>
    <div class="sidebar" >
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="index.php?page=home" class="nav-link nav-home hover:bg-rose-100">
              <i class="nav-icon fas fa-tachometer-alt" ></i>
                <p class="fw-normal" style="color:black;">
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=subject_list" class="nav-link nav-subject_list hover:bg-rose-100">
              <i class="nav-icon fas fa-th-list"></i>
              <p class="fw-normal" style="color:black;">
                Subjects
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=class_list" class="nav-link nav-class_list hover:bg-rose-100">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Classes
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=academic_list" class="nav-link nav-academic_list hover:bg-rose-100">
              <i class="nav-icon fas fa-calendar"></i>
                <p class="fw-normal" style="color:black;">
                Academic Year
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=questionnaire" class="nav-link nav-questionnaire hover:bg-rose-100">
              <i class="nav-icon fas fa-file-alt"></i>
                <p class="fw-normal" style="color:black;">
                Questionnaires
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=criteria_list" class="nav-link nav-criteria_list hover:bg-rose-100">
              <i class="nav-icon fas fa-list-alt"></i>
                <p class="fw-normal" style="color:black;">
                Evaluation Criteria
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="./index.php?page=criteria_list" class="nav-link nav-criteria_list ">
            <a href="#" class="nav-link nav-edit_user ">
            <i class="nav-icon fas fa-user-friends"></i>
                <p class="fw-normal" style="color:black;">
                Administrators
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_faculty">
              <i class="nav-icon fas fa-user-friends"></i>
                <p class="fw-normal" style="color:black;">
                Faculties
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_faculty" class="nav-link nav-new_faculty tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=faculty_list" class="nav-link nav-faculty_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_registrar">
              <i class="nav-icon fas fa-user-friends"></i>
                <p class="fw-normal" style="color:black;">
                Registrars
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_registrar" class="nav-link nav-new_registrar tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=registrar_list" class="nav-link nav-registrar_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_dean">
              <i class="nav-icon fas fa-user-friends"></i>
                <p class="fw-normal" style="color:black;">
                Deans
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_dean" class="nav-link nav-new_dean tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=dean_list" class="nav-link nav-dean_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_program_head">
              <i class="nav-icon fas fa-user-friends"></i>
                <p class="fw-normal" style="color:black;">
                Program Heads
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_program_head" class="nav-link nav-new_program_head tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=program_head_list" class="nav-link nav-program_head_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_student">
            <i class="nav-icon fas fa-users"></i>
                <p class="fw-normal" style="color:black;">
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_student" class="nav-link nav-new_student tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=student_list" class="nav-link nav-student_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                    <p class="fw-normal" style="color:black;">List</p>
                </a>
              </li>
            </ul>
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
                
   
      <p style="margin-top: 50px; text-align: center; color: grey;">Copyright &copy; 2023 <a href="https://csjdm.gov.ph/government/departments/city-college-of-san-jose-del-monte/" target="_blank;" style="color:grey; "><br>City College of San Jose Del Monte</a>
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