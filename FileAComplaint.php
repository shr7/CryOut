<?php

//if(isset($_POST['type']))
error_reporting(0);
//print_r($_POST);
// die;
//}

?>
<!DOCTYPE html>
<?php
		require 'connect.inc.php';
		require 'complaintSqlFunctions.php';
		require_once 'FileAComplaint.html';

?>
<html>
    <head>
        <title>File A Complaint!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="People can file complaints on this page and ask for help">
        <meta name="keywords" content="Complaint, Help, CryOut">
        <meta name="author" content="Shreya">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/FileAComplaint.css" rel="stylesheet">
    </head>
    <body>
		
		<?php
			submit();
		?>		
		<div class="evidence">
			<h2>Any evidence? Upload a picture</h2>
			The pictures uploaded will be stored in our database and will help police or other organizations in further investigation of the case.
			<br><br>
		
		<div class="container">

    	<div class="row">
	      <?php 
	       	// scan "uploads" folder and display them accordingly
	       $folder = "uploads";
	       $results = scandir('uploads');
			foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
	       		<div class="col-md-3">
		       		<div class="thumbnail">
			       		<img src="'.$folder . '/' . $result.'" alt="...">
				       		<div class="caption">
				       		<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>
    	</div>
    	
		

	      <div class="row">
	      	<div class="col-lg-12">
	           <form class="well" action="upload.php" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file">Select a file to upload</label>
				    <input type="file" name="file">
				    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
				  </div>
				  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
	      </div>
		</div>  <!-- /container -->
		

		</div>
		
		
    </body>
</html>
