<?php
	//   require 'FileAComplaint.html';
	   		require 'connect.inc.php';
	//function to get values entered by user when button is pressed
	$type;
	$medical;
	$police;
	$counselling;
	$details;
	$name;
	$email;
	
	function getData()
		{
			if(!empty($_GET['type']))
			{
				if($_GET['type']=='murder')
				{$type='murder';}
				else if($_GET['type']=='domestic')
				{$type='domestic violence';}
				else if($_GET['type']=='sexual')
				{$type='sexual harrasment';}
				else if($_GET['type']=='assault')
				{$type='assault';}
				else if($_GET['type']=='theft')
				{$type='theft';}
			}
			else{$type=$_GET['other'];}
			
			if(!empty($_GET['medical']))
				$medical=1;
				else $medical=0;
			if(!empty($_GET['police']))
				$police=1;
				else $police=0;
			if(!empty($_GET['counselling']))
				$conselling=1;
				else $counselling=0;
				
			$details=$_GET['details'];
			$name=$_GET['name'];
			$email=$_GET['email'];
		}
		
		function addData($type,$medical,$police, $counselling, $details,$name,$email)
        {
            
            $sql = "INSERT INTO fileacomplaint(id, type, medical, police, counselling, details, name, email) VALUES ('','$type','$medical','$police','$counselling','$details','$name','$email')";
            if(mysqli_query($link, $sql)){
              echo "Complaint received. Will send help as soon as possible";
            } else{
                echo "ERROR: Complaint not received $sql. " . mysqli_error($link);
                }               
        }
	
?>