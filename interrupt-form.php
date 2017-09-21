<!DOCTYPE html>
	<head>
		<title>Interrupt 2K17 - Registration Form</title>
		<style>
			body, html{
				margin: 0;
				padding: 0;
			}
			form{
				width: 60%;
				border: 3px solid black;
				display: block;
				float: none;
				margin: 6% auto;
				padding-bottom: 1%;
			}
			header{
				color: white;
				background-color: black;
				font-family: "Gill Sans";
				font-size: 200%;
				text-align: center;
				margin-bottom: 3%;
				padding: 2% 0 2% 0;
			}
			
			.textFields{
				width: 55%;
				display: block;
				margin: 1.5% 20% 2.4% 20%;
				padding: 2% 1% 1% 1%;
				font-size: 110%;
				border: none;
				border-bottom: 3px solid black;
				font-family: "Gill Sans";
				text-align: center;
				transition: width .5s, margin .5s;
			}
			.textFields:focus{
				width: 80%;
				margin: 1.5% 10% 2.4% 10%;
			}
			.textFieldsTop{
				margin-top: 1.5%;
			}
			
			#yearOpt{
				width: 58%;
				margin: 1.2% 10% 2.4% 20%;
				text-align: center;
				font-size: 70%;
			}
			.selectOpt{
				padding: 1.5%;
			}
			
			button{
				width: 20%;
				margin: 1.5% 40% 1.5% 40%;
				font-family: "Gill Sans";
				font-size: 100%;
				padding: 1.5% 1% 1.5% 1%;
				border: none;
				background-color: white;
				color: black;
				border: 2px solid black;
				cursor: pointer;
				transition: all 0.25s;
			}
			button:hover{
				background-color: black;
				color: white;
			}
		</style>
	</head>
	
	<body>
			<form action="test.php" method="post">
				<header>INTERRUPT 2K17</header>
				<input type="text" class="textFields" name="nameText" placeholder="Name" required></input>
				<input type="text" class="textFields" name="collegeText" placeholder="College" required></input>
				<input type="text" class="textFields" name="depText" placeholder="Department" required></input>
				
				<select name="yearOption" id="yearOpt">
					<option value="1" class="selectOpt">1st Year</option>
					<option value="2" class="selectOpt">2nd Year</option>
					<option value="3" class="selectOpt">3rd Year</option>
					<option value="4" class="selectOpt">4th Year</option>
				</select>
				
				<input type="number" class="textFields textFieldsTop" name="mobileText" placeholder="Mobile Number" required></input>
				<input type="email" class="textFields" name="emailText" placeholder="E-Mail ID" required></input>
				
				<button type="submit">SUBMIT</button>
			</form>
	</body>
	
	
</html>