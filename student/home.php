<?php include('db_connect.php');
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
$astat = array("Not Yet Started", "Started", "Closed");
?>

<div class="col-12">
  <div class="card">
    <div class="card-body">
      <p style="text-indent: 5px;">Welcome <?php echo $_SESSION['login_name'] ?>!</p>
      <div class="col-md-5">
        <div class="callout callout-info" style="border-left-color: #f74780;">
          <h5><b>Academic Year: <?php echo $_SESSION['academic']['year'] . ' <br> Semester: ' . (ordinal_suffix1($_SESSION['academic']['semester'])) ?> Semester</b></h5>
          <h6><b>Evaluation Status: <?php echo $astat[$_SESSION['academic']['status']] ?></b></h6>
        </div>
      </div>
    </div>
  </div>
</div>