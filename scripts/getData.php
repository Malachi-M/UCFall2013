<?php
require 'connect.php';

function getStudent() {
}

function getStudents() {
}

function getRequest() {
}

function getRequests() {
}

function getAssignment($con, $requestID, $volunteerID)
{
	$result = mysqli_query($con,"SELECT * FROM assignments");
	while($row = mysqli_fetch_array($result)) {
		if ($requestID == $row['requestID'] && $volunteerID == $row['volunteerID']) {
 		$assignID = $row['assignmentID'];
  		}
	}
	return $assignID;
}

function getAssignments($con){
	$sql="SELECT * FROM assignments"
	$result = mysqli_query($con,$sql);
	echo $result;
	return $result;
}

function getRequestAssignments($ID) {

}

function getRecommended(){

}

//getAssignment('$_POST[volunteerID]','$_POST[requestID]');

?>

?>
