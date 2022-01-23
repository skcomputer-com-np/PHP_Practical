<?php 

	if (isset($_POST['fname'])) {
		echo 'First Name: ' . strtoupper($_POST['fname']) . '<br>';
	}

	if (isset($_POST['lname'])) {
        echo 'Last Name: ' . strtoupper($_POST['lname']) . '<br>';
	}

	if(isset($_POST['course']))
	{
        echo 'Course: ' . strtoupper($_POST['course']) . '<br>';
	}

	if(isset($_POST['gender']))
	{
        echo 'Gender: ' . strtoupper($_POST['gender']) . '<br>';
	}


	// if (isset($_GET['fname'])) {
	// 	echo $_GET['fname'];
	// }

	// if (isset($_GET['lname'])) {
	// 	echo $_GET['lname'];
	// }
	
 ?>


<h2>Form Example</h2>

 <form action="get_post.php" method="post" >
 	<input type="text" name="fname" placeholder="enter your first name"> 
     <br><br>
 	<input type="text" name="lname" placeholder="enter your last name">
     <br><br>
     Select Lang:
	 <select name="course">
		 <option value="c">C</option>
		 <option value="cpp">CPP</option>
		 <option value="java">Java</option>
	 </select>

     <br><br>
     Gender:
	 <input type="radio" value="Male" name="gender" checked> Male
	 <input type="radio" value="Fmale" name="gender"> Female

     <br><br>
 	<input type="submit" name="submit">
 </form>

