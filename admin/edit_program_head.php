<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM program_head_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_program_head.php';
?>