<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['studentid']) && isset($_POST['email']) && ($_POST['department'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['studentid']);
	$pass = validate($_POST['email']);
	$department = validate($_POST['department']);

	if (empty($uname)) {
		header("Location: index.php?error=Student ID is required");
	    exit();
	}
	else if(empty($pass)){
        header("Location: index.php?error=Email is required");
	    exit();
	}else if(empty($department)){
        header("Location: index.php?error=course is required");
	    exit();
	}
	
	else{
		$sql = "SELECT * FROM adminstudent WHERE studentNo='$uname' AND email='$pass' AND department='$department' ";

		$select_user = mysqli_query($conn, $sql);

		if (mysqli_num_rows($select_user) === 1) {
			$row = mysqli_fetch_assoc($select_user);
            if ($row['studentNo'] === $uname && $row['email'] === $pass) {
            	$_SESSION['studentNo'] = $row['studentNo'];
            	$_SESSION['department'] = $row['department'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: dashboard.php");
		        exit();
            }
			
			else{
				header("Location: index.php?error=Incorect Student ID, Email Or course");
		        exit();
			}

		}else{
			header("Location: index.php?error=Incorect Student ID, Email Or course ");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
?>