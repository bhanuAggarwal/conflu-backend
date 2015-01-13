<?php
	require_once("database.php");
	session_start();
	if(isset($_SESSION['username'])) {
		if(empty($_POST['eventid'])) {
			//Register new Event
			$sql = "insert into events(author,eventname,description,rules,coordinator1,coordinator2,phone1,phone2,
					time,venue,category) values('$_SESSION[username]','$_POST[eventName]','$_POST[eventdescription]'
					,'$_POST[eventRules]','$_POST[coordinator1]','$_POST[coordinator2]','$_POST[phone1]'
					,'$_POST[phone2]','$_POST[time]','$_POST[venue]','$_POST[category]')";
			
			$result = $db->query($sql);
			//echo $result;
			if($result ) 
				header("Location:../html/event.html");
		}
		else {
			//Update the Existing Event
			$sql = "update events set eventname = '$_POST[eventName]',description = '$_POST[eventdescription]', rules = '$_POST[eventRules]'
					,coordinator1 = '$_POST[coordinator1]', coordinator2 = '$_POST[coordinator2]'
					,phone1 = '$_POST[phone1]',phone2 = '$_POST[phone2]'
					,time = '$_POST[time]',venue = '$_POST[venue]',category = '$_POST[category]' 
					where eventid = '$_POST[eventid]'";
			
			$result = $db->query($sql);
			//echo $result;
			header("Location:../html/event.html");
		}
	
	}
	else {
		header("Location:../");
	}

?>