<!DOCTYPE html>
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
        <div class="type" class="complaintType">
		<h2>Complaint Type</h2>
		<form action="FileAComplaint.php" method="GET">
			<fieldset>
				<!--<legend id="title5" class="desc">Type of complaint</legend> -->
				<div>
				<input id="radioDefault_5" name="Field5" type="hidden" value="">
				<div>
					<input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="1">
					<label class="choice" for="Field5_0">Murder/Homicide</label>
				</div>
				<div>
					<input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="2">
					<label class="choice" for="Field5_1">Domestic Violence</label>
				</div>
				<div>
					<input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="3">
					<label class="choice" for="Field5_2">Sexual Harassment</label>
				</div>
				<div>
					<input id="Field5_3" name="Field5" type="radio" value="Fourth Choice" tabindex="4">
					<label class="choice" for="Field5_3">Assault/Violence</label>
				</div>
				<div>
					<input id="Field5_4" name="Field5" type="radio" value="Fifth Choice" tabindex="5">
					<label class="choice" for="Field5_4">Theft/Robbery</label>
				</div>
				</div>
			</fieldset>
			<div>
				<label class="desc" id="title4" for="Field4">Any other? Please Specify!</label>
				<div>
					<textarea id="Field4" name="Field4" spellcheck="true" rows="2" cols="30" tabindex="6"></textarea>
				</div>
			</div>
			<br>
			<div>
			<fieldset>
				<legend id="title6" class="desc">Assistance Required</legend>
				<div>
					<input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
					<label class="choice" for="Field6">Medical</label>
				</div>
				<div>
					<input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
					<label class="choice" for="Field7">Police</label>
				</div>
				<div>
					<input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
					<label class="choice" for="Field8">Counselling</label>
				</div>
			</fieldset>
			</div>
			<div>
				<legend id="title6" class="desc">Event Details</legend>
				<label class="desc" id="title4" for="Field4">.....</label>
				<div>
					<textarea id="Field4" name="Field4" spellcheck="true" rows="8" cols="70" tabindex="7"></textarea>
				</div>	
			</div>
			<div>
			<fieldset>
				<legend id="title5" class="desc">Post As Anonymous?</legend>
				<div>
				<select id="Field106" name="Field106" class="field select medium" tabindex="8"> 
					<option value="First Choice">No</option>
					<option value="Second Choice">Yes</option>
				</select>
				</div>
			</fieldset>
		</div>
		<div>
			<label class="desc" id="title1" for="Field1">Full Name</label>
			<div>
				<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="9">
			</div>
		</div>
		
		<div>
			<label class="desc" id="title3" for="Field3">Email</label>
			<div>
				<input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="10"> 
			</div>
		</div>
		</form> 
        </div>
		
		<br>

		
	<!--	<div class="informer_details">
		<form action="fileComplaint.php" method="GET">
		<div>
			<fieldset>
				<legend id="title5" class="desc">Post As Anonymous?</legend>
				<div>
				<select id="Field106" name="Field106" class="field select medium" tabindex="8"> 
					<option value="First Choice">No</option>
					<option value="Second Choice">Yes</option>
				</select>
				</div>
			</fieldset>
		</div>
		<div>
			<label class="desc" id="title1" for="Field1">Full Name</label>
			<div>
				<input id="Field1" name="Field1" type="text" class="field text fn" value="" size="8" tabindex="9">
			</div>
		</div>
		
		<div>
			<label class="desc" id="title3" for="Field3">Email</label>
			<div>
				<input id="Field3" name="Field3" type="email" spellcheck="false" value="" maxlength="255" tabindex="10"> 
			</div>
		</div>
		</form>
		</div>
	-->
				
		<br>	
		
		<div class="submitComplaint">
		<button>Submit Complaint</button>
		</div>
		
		<br>
		
		<div class="evidence">
			<h2>Any evidence? Picture or Video!</h2>
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
	           <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
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
