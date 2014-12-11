<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">	
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div id="container">
<?php 	if($this->session->userdata('attempt'))
			echo "<p>Random Word (attempt # " . $this->session->userdata('attempt') . ")</p>";
?>
	<div id="body">
		<div class="alert alert-info">
<?php 	if($this->session->userdata('word'))
			echo "<h1>" . $this->session->userdata('word') . "</h1>";		
		else
			echo "<p>Please click the button below to generate Random Word.</p>";
?>
		</div>
		<form action="/home/process_word" method="post">
			<input type="hidden" name="word" value="<?php echo $this->session->userdata('word'); ?>">
			<input type="submit" value="Generate">
		</form>
	</div>
</div>
</body>
</html>