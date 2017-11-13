<?php
include('config.php');
$type = $_POST['type'];
if($type == 'new'){
	$startdate = $_POST['startdate'].'+'.$_POST['zone'];
	$title = $_POST['title'];
	$insert = mysqli_query($con,"INSERT INTO calendario_citas(`title`, `startdate`, `enddate`, `allDay`, `paciente_id`,`medico_id`) VALUES('$title','$startdate','$startdate','false', '1','1')");
	$lastid = mysqli_insert_id($con);
	echo json_encode(array('status'=>'success','eventid'=>$lastid));
}
if($type == 'changetitle'){
	$eventid = $_POST['eventid'];
	$title = $_POST['title'];
	$MEDICO = $_POST['MEDICO'];	//pendiente
	$PACIENTE = $_POST['PACIENTE'];	//pendiente
	$update = mysqli_query($con,"UPDATE calendario_citas SET title='$title', paciente_id='1', medico_id='1' where id='$eventid'");
	if($update)
		echo json_encode(array('status'=>'success'));
	else
		echo json_encode(array('status'=>'failed'));
}
if($type == 'resetdate'){
	$title = $_POST['title'];
	$startdate = $_POST['start'];
	$enddate = $_POST['end'];
	$eventid = $_POST['eventid'];
	$update = mysqli_query($con,"UPDATE calendario_citas SET title='$title', startdate = '$startdate', enddate = '$enddate' where id='$eventid'");
	if($update)
		echo json_encode(array('status'=>'success'));
	else
		echo json_encode(array('status'=>'failed'));
}
if($type == 'remove'){
	$eventid = $_POST['eventid'];
	$delete = mysqli_query($con,"DELETE FROM calendario_citas where id='$eventid'");
	if($delete)
		echo json_encode(array('status'=>'success'));
	else
		echo json_encode(array('status'=>'failed'));
}
if($type == 'fetch'){
	$events = array();
	$query = mysqli_query($con, "SELECT * FROM calendario_citas");
	while($fetch = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		$e = array();
		$e['id'] = $fetch['id'];
		$e['title'] = $fetch['title'];
		$e['start'] = $fetch['startdate'];
		$e['end'] = $fetch['enddate'];
		$allday = ($fetch['allDay'] == "true") ? true : false;
		$e['allDay'] = $allday;
		array_push($events, $e);
	}
	echo json_encode($events);
}
?>