<?php include('db_connect.php'); ?>
<?php
function ordinal_suffix1($num)
{
  $num = $num % 100; // protect against large numbers
  if ($num < 11 || $num > 13) {
    switch ($num % 10) {
      case 1:
        return $num . 'st';
      case 2:
        return $num . 'nd';
      case 3:
        return $num . 'rd';
    }
  }
  return $num . 'th';
}
$astat = array("Not Yet Started", "On-going", "Closed");
?>
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <p style="text-indent: 5px;"> Welcome <?php echo $_SESSION['login_name'] ?>!</p>

      <div class="col-md-5">
        <div class="callout callout-info" style="border-left-color: #f74780;">
          <h5>Academic Year: <?php echo $_SESSION['academic']['year'] . ' <br> Semester: ' . (ordinal_suffix1($_SESSION['academic']['semester'])) ?> Semester</h5>
          <h6>Evaluation Status: <?php echo $astat[$_SESSION['academic']['status']] ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">

<div class="col-12 col-sm-6 col-md-3">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3><?php echo $conn->query("SELECT * FROM student_list")->num_rows; ?></h3>

        <p>Total Students</p>
      </div>
      <div class="icon">
        <i class="fa ion-ios-people-outline"></i>
      </div>
    </div>
  </div>


  <div class="col-12 col-sm-6 col-md-3">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3><?php echo $conn->query("SELECT * FROM dean_list ")->num_rows; ?></h3>

        <p>Total Deans</p>
      </div>
      <div class="icon">
        <i class="fa fa-user-friends"></i>
      </div>
    </div>
  </div>

  
  <div class="col-12 col-sm-6 col-md-3">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3><?php echo $conn->query("SELECT * FROM class_list")->num_rows; ?></h3>

        <p>Total Classes</p>
      </div>
      <div class="icon">
        <i class="fa fa-list-alt"></i>
      </div>
    </div>
  </div>
</div>