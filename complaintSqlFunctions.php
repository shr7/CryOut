<?php
	   require 'FileAComplaint.html';
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
			if(murder selected)
			{$type='murder';}
			else if(domestic violence selected)
			{$type='domestic violence';}
			else if(sexual harrasment selected)
			{$type='sexual harrasment';}
			else if(assault selected)
			{$type='assault';}
			else if(theft selected)
			{$type='theft'}
			else{$type=$_GET['other'];}
			
			if(medical checked)
				$medical=1;
				else $medical=0;
			if(police checked)
				$police=1;
				else $police=0;
			if(counselling selected)
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