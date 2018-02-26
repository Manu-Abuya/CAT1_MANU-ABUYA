<!DOCTYPE html>
<html>
<head>
	<title>TRANSPORTATION</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
		<?php 
			$modes = array("Automobile","jet","train","ferry");
		 ?>
		 <h2>Travel takes many forms, whether across the country, or around the world. Here is a list of some common modes of transportation:</h2>
		 <ul style="list-style-type: disc">
		 	<?php 
		 		foreach ($modes as $key) {
		 			echo "<li>$key</li>";
		 		}
		 	 ?>
		 </ul>
		 <form method="post" action="transportation.php">
		 	<label>Add other modes of transportation to the list
		 		<input type="text" name="added" placeholder="object1,object2,object3...">
		 	</label>
		 	<input type="submit" name="submit" value="Add" class="btn btn-info">
		 </form>
		 <div class="jumbotron">
		 	<?php 
		 		$count = count($modes);
		 		$modes[$count] = $_POST['added'];
		 		foreach ($modes as $key) {
		 			echo "<li>$key</li>";
		 		}
		 	 ?>
		 </div>
	</div>

</body>
</html>