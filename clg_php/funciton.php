<?php 

	function Add($no1, $no2 = 10)
	{
		echo ($no1 + $no2) . "<br>";
	}


	Add(5,5);
	Add(15,5);
	Add(25,5);
	Add(35,5);
	Add(35);

 ?>

 <table border="1" style="border-collapse: collapse; width: 100%;">
 	<tr>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 	</tr>

<tr>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 	</tr>

 	<tr>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 		<td> <?php Add(5,5); ?></td>
 	</tr>

 </table>