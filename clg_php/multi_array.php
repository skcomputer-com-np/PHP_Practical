<!DOCTYPE html>
<html>
<head>
	<style type="text/css">	
		/*table 1  */
		#table1{ 
			background-color: lightgreen; 
			width: 50%;
			border-collapse: collapse;
			border: 5px solid black;
			border-radius: 10px;			
		}

		#table1 tr:hover{
			background-color:green;
		}

		#table1 td{			
			padding: 10px;
			text-align: center;
			border-bottom: 2px solid #c1c1c1;
		}
		
		/*table 1  */
		#table2{ 
			background-color: #ddd; 
			width: 50%;
			border-collapse: collapse;
			border: 5px solid green;
			border-radius: 10px;			
		}
		#table2 td{			
			padding: 10px;
			text-align: center;
			border-bottom: 2px solid #f1f1f1;
		}

		#table2 tr:nth-child(even){
			background-color:lightcoral;
		}
	</style>
</head>
<body>

<?php 

//1st Method to create multi-dimentional array 
$sal  = array(
				[1, "SK1", 1500],
				[2, "SK2", 2500],
				[2, "SK2", 2500],
				[2, "SK2", 2500],
				[7, "SK7", 7800]
	);

//2nd Method to create multi-dimentional array 
// $sal  = [
// 			[1, "SK1", 1500],
// 			[2, "SK2", 2500],
// 			[2, "SK2", 2500],
// 			[2, "SK2", 2500],
// 			[7, "SK7", 7800]
// ];


	echo "<table id='table1'>";

		foreach ($sal as $row) {

	 		echo "<tr>";
			
				foreach($row as $col)
				{
		 			echo '<td>'. $col . '</td>';
				}

	 		echo "</tr>";	
		}

 	echo "</table>";

	 echo "<br>";

	 echo "<table id='table2'>";

		foreach ($sal as $row) {

	 		echo "<tr>";
			
				foreach($row as $col)
				{
		 			echo '<td>'. $col . '</td>';
				}

	 		echo "</tr>";	
		}

 	echo "</table>";

 ?>

</body>
</html>
 