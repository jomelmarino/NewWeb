<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['studentNo'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" type="text/css" href="dashboard.css">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="css/img/cdmlogo.jpg" style="width: 35%; border-radius: 50%; margin-left: 80px; margin-top: 60px;">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a class="text" href="#head-title" >
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="#view-grade">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">View Grades</span>
				</a>
			</li>
			<li>
				<a  href="#table-data" >
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text" >My History</span>
				</a>
			</li>
			
				<li>
					<a href="login.php" class="logout">
						<i class='bx bxs-log-out-circle' ></i>
						<span class="text">Logout</span>
					</a>
				</li>
			
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			
			<li></li>
			<i style="color: black; font-size: 40px; font-family:Arial, Helvetica, sans-serif"> Student ID : <?php echo $_SESSION['studentNo']; ?></i>
			<hr>
			<li></li><i style="color: black; font-size: 40px; font-family:Arial, Helvetica, sans-serif"> Department : <?php echo $_SESSION['department']; ?></i>
			<hr>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title" id="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a style="color:grey" class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Student</p>
					</span>
				</li>

				
				
			</ul>


			<div class="table-data" id="currentSemester">
				<div class="order">
					<div class="head">
						<h1 class="h1" style="color: green;">semester</h1>
							<h4 class="h1">year</h4>
					</div>


					<?php
require('db_conn.php');

$id = $_SESSION['id'];
$studentNo = $_SESSION['studentNo'];

$query = mysqli_query($conn, "select * from adminstudent where studentNo = '$studentNo'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['fname'] = $row['fname'];
	$_SESSION['department'] = $row['department'];
	$_SESSION['section'] = $row['section'];
    $_SESSION['session'] = $row['session'];


	 
?>
   
<div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname: <?php echo $_SESSION['fname']; ?> </td>
            <td colspan="0">Session :  <?php echo $_SESSION['session']; ?> </td>
			<td colspan="0"></td>
        </tr>
        <tr>
			
            <td colspan="1">Student ID: <?php echo $_SESSION['studentNo']; ?> </td>
            <td colspan="0">Department : <?php echo $_SESSION['department']; ?></td>
			<td colspan="0"></td>
        </tr>
        <tr>
            <td colspan="1">Year and section: <?php echo $_SESSION['section'];?></td>
            <td colspan="0"></td>
			<td colspan="0"></td>
        </tr>
    
</div>

<?php 
}
?>
							
							<tr style="background-color: lightgreen; text-align:center;">
								<th>Teacher ID</th>
								<th>Subject</th>
								<th>Description</th>
								<th>Grades</th>
							</tr>

							<tr>

							<?php
require('db_conn.php');

$id = $_SESSION['id'];
$studentNo = $_SESSION['studentNo'];


$query = mysqli_query($conn, "select * from subjects where studentNo = '$studentNo'");
while($row = mysqli_fetch_array($query)) {
    $_SESSION['subject_code'] = $row['subject_code'];	 
    $_SESSION['teacherid'] = $row['teacherid'];	
	$_SESSION['description'] = $row['description'];	
?>

    <td><?php echo $_SESSION['teacherid'];?></td>
    <td><?php echo $_SESSION['subject_code'];?></td>
	<td><?php echo $_SESSION['description'];?></td>

<?php 
}
?>
								<td></td>

							</tr>	
	


				  
				  			<tr style="background-color: lightgreen;">
								<td colspan="0"></td>
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="1" class="remark">GWA: %</th>
							</tr>	
	

						</table>
					</div>
				</div>
			</div>

			<div class="table-data" id="lastSemester"> 
				<div class="order">
					<div class="head">
						<h1 class="h1" style="color: red;">Last semester </h1>
							<h4 class="h1">year</h4>
					</div>
  
<div class="result">
    <table border="3px">
        <tr>
            <td colspan="1">Fullname:</td>
            <td colspan="0">Semester :</td>
			<td colspan="0"></td>
        </tr>
        <tr>
			
            <td colspan="1">Student ID:</td>
            <td colspan="0">Course :</td>
			<td colspan="0"></td>
        </tr>
        <tr>
            <td colspan="1">Year and section:</td>
            <td colspan="0"></td>
			<td colspan="0"></td>
        </tr>
    
</div>

							
							<tr style="background-color: lightgreen; text-align:center;">
								<th>Teacher ID</th>
								<th>Subject</th>
								<th>Grades</th>
							</tr>
					  				  
							<tr>
								<td></td>
								<td></td>
								<td></td>

							</tr>	
	

				  
				  			<tr style="background-color: lightgreen;">
								<td colspan="0"></td>
								<th colspan="1"></th>
								<th colspan="1" class="remark">GWA:</th>
							</tr>	
	

						</table>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="js/switch.js"></script>
	
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>