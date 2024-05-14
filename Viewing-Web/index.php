<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	
     <form class="form" action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Student id</label>
     	<input type="text" name="studentid" placeholder="Student ID"><br>

     	<label>Email</label>
     	<input  name="email" placeholder=" Email "><br>

		 <label>Course</label>
     	<input  name="department" placeholder=" Your course "><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>

