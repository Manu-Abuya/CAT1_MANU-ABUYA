<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php 
	
	function mons(){
	return $months = array(
			"January" => "31",
			"February" => "28",
			"March" => "31",
			"April" => "30",
			"May" => "31",
			"June" => "30",
			"July" => "31",
			"August" => "31",
			"September" => "30",
			"October" => "31",
			"November" => "30",
			"December" => "31"
		);
	}
	function createOption(){
		foreach (mons() as $month => $days) {
			$months = strtoupper($month);
			echo "<option value = '$month'>" . $months . "</option>";
		}
	};

	 ?>
	 <div class="container">
	 	<div class="jumbotron text-center">
	 	<table>
	 		<thead>
	 			<th>Kindly input your month</th>
	 		</thead>
	 		<tbody>
	 		<tr>
	 			<td>
	 				<form action="months.php" method="post" role="form">
	 					<div class="form-group">
	 						<div class="input-group">
	 							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	 							<select class="form-control" name="month">
	 								<?php 
	 									option();
	 								 ?>
	 							</select>
	 						</div>
	 					</div>
	 					<input type="submit" name="submit" value="Submit" class="btn btn-info">
	 				</form>
	 			</td>
	 		</tr>
	 		</tbody>
	 	</table>
	 	</div>
	 </div>
	 <?php 
	 	if (isset($_POST['submit'])) {
	 		$monthselected = $_POST['month'];

	 		if (((date('Y')%4)==0) && ($monthselected == "February")) {
	 			echo "<label>The month of <span>" . $monthselected . "</span> has <span>" . (mons()[ucwords($monthselected)]+1) . "</span> days</label>";
	 		}else{
	 			echo "<label>The month of <span>" .$monthselected . "</span> has <span>" . (mons()[ucwords($monthselected)]) . "</span> days</label>";
	 		}
	 		
	 	}
	  ?>

	  <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>