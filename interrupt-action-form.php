<?php
	//Details for the server should be entered here
  	$servername="localhost";
    	$username="root";
    	$pass="";
    	$dbname="INTERRUPT";
	
	//We get the content of the elements of the form here
	$name=$_POST['nameText'];
	$college=$_POST['collegeText'];
	$dept=$_POST['depText'];
	$year=$_POST['yearOption'];
	$mobile=$_POST['mobileText'];
	$email=$_POST['emailText'];
		
        try{
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$pass);
            	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//The SQL string to be sent to the SQL Server
	    	$sql_stmt='INSERT INTO PARTICIPANTS VALUES (UNO, "'.$name.'","'.$college.'","'.$dept.'",'.$year.',"'.$mobile.'","'.$email.'")';
			
		$conn->exec($sql_stmt);
		$conn=null;
		
		//After successful completion, the form uses JavaScript to link back to the original interrupt-form page.
		echo "<script>winLoc(); function winLoc(){window.location.href='/interrupt-form.php';}</script>";
	} catch(PDOException $e){
		echo $sql_stmt . "<br>" . $e->getMessage();
	}
	?>
