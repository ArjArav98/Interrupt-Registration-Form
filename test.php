<?php
  	  	$servername="localhost";
    	$username="root";
    	$pass="";
    	$dbname="INTERRUPT";
		
		$name=$_POST['nameText'];
		$college=$_POST['collegeText'];
		$dept=$_POST['depText'];
		$year=$_POST['yearOption'];
		$mobile=$_POST['mobileText'];
		$email=$_POST['emailText'];
		
        try{
            $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			$sql_stmt='INSERT INTO PARTICIPANTS VALUES (UNO, "'.$name.'","'.$college.'","'.$dept.'",'.$year.',"'.$mobile.'","'.$email.'")';
			
			$conn->exec($sql_stmt);
			$conn=null;

			echo "<script>winLoc(); function winLoc(){window.location.href='/interrupt-form.php';}</script>";
			
		} catch(PDOException $e){
			echo $sql_stmt . "<br>" . $e->getMessage();
		}
	?>