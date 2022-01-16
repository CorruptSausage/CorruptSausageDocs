

<?php
    session_start();
	//CHECKS IF USER LOGGED IN IF NOT, GOES TO LOGIN
	if (empty($_SESSION['name'])) {
		header( "refresh:0;url=login.php" );
	} 
	
	include 'inc/config.php';
	// CONFIGURATION


	


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$identifier = strtolower( $_POST["identifier"]);
		$column_name = strtolower( $_POST["column_name"]);
		$value = strtolower( $_POST["value"]);
		
		update_player_data($identifier, $column_name, $value);
		
	}
	
	
?>

<!DOCTYPE html>
<html>
  <head>
		  <?php include 'inc/head.php' ?>
		  <link rel="stylesheet" href="./index.css" type="text/css">
	
           
          
        </div>
        </div>
  </head>


 <body">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <?php include 'inc/preloader.php' ?>

  <h1 class="center" ><?php echo $title ?></h1>
  <center>
  <div class="center"> 
				<input class="btn" style="margin-bottom:20px" type="button" value="Log out" onclick="log_out()" >
	</div>
</center>
  
<!-- PHP -->
<?php
//Essential mode uses the Users table by default. Change the "users" below if you want to use a different table. If you do this, YOU HAVE TO CHANGE THE ROWS FOR BOTH THE MYSQL FETCH AND THE COLUMN NAMES.
	$dbServername= $GLOBALS['dbServername'];
	$dbUsername = $GLOBALS['dbUsername'];
	$dbPassowrd = $GLOBALS['dbPassword'];
	$dbName = $GLOBALS['dbName'];

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassowrd, $dbName);


	if ($conn->connect_error) {
		die("connection_failed" . $conn->connect_error);
	}
	
	//CHECK PERMISSION LEVEL
	$sql = "SELECT * FROM $dbName.users WHERE name='$_SESSION[name]'";
	
	$result = mysqli_query($conn, $sql); 
    $resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		$row = mysqli_fetch_assoc($result);
		$permission_level = $row['permission_level'];
		$job_grade = $row['job_grade'];	
		$first_name = $row['firstname'];	
		$last_name = $row['lastname'];	
	}
	
	
	if($permission_level > $perm_levelForAdmin) {
		//ADMIN VIEW WITH 'DATA EDITOR'
		$sql = "SELECT * FROM essentialmode.users";
		echo '<form class="center_info" style="text-align: center;" action="index.php" method="POST">
			
			<h5>
			
			Name: <b>' . $_SESSION['name'] . '</b><br>
			Permissions level: <b>' . $permission_level . '</b><br> 
			Ingame Name: <b>' .$first_name . " " . $last_name .  '</b> <br>



			</h5>
			<h3>Change player stats </h3><br> 

			<h5>
			Identifier: <br> <input type="text" name="identifier"> <br>
			Column name: <br> <input type="text" name="column_name"> <br>
			Value: <br> <input type="text" name="value"> <br>

			<input class="btn" type="submit" style="margin-bottom:60px" value="Change stats"> <br> 

			
			
			</h5>

			</form>
			
			<div class="center"> 
			<button class="btn-small center id="bootn">Toggle</button>
			</div>';
			
		$result = mysqli_query($conn, $sql); 
		$resultCheck = mysqli_num_rows($result);
            echo "<table class='highlight'>";
            //Follow this same format to make a new row. Make the Columns the same order as listed for the mysql fetch below
                   echo "<tr>
                    <th>identifier</th>
                    <th>firstname + lastname</th>
                    <th>accounts</th>
                    <th>job</th>
                    <th>job_grade</th>
                    <th>inventory</th>
                    <th>loadout</th>
               </tr>";

		if ($resultCheck > 0) {
		   while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><th>";
				echo $row['identifier'];
				echo "<th>";
				echo $row['firstname'] . " " . $row["lastname"];
				echo "<th>";
				echo $row['accounts'];
				echo "<th>";
				echo $row['job']; //esx probably idek
				echo "<th>";
				echo $row['job_grade'];
				echo "<th>";
				echo $row['inventory'];
				echo "<th>";
				echo $row['loadout']; //guns (esx)
				echo "<th>";
				echo "</th></td>";
		   }
		}		
	} else {
		//USER VIEW
		$sql = "SELECT * FROM $dbName.users WHERE name='$_SESSION[name]'";
		
			
		$result = mysqli_query($conn, $sql); 
		$resultCheck = mysqli_num_rows($result);
		// I know, this part is very inefficient but it still works.
		if ($resultCheck > 0) {
			$row = mysqli_fetch_assoc($result);
		
			echo '
			<div class="center_infoCard" >
			
			<h7>
			
			Name: <b>' . $row['name'] . '</b> <br>
			Identifier: <b>' . $row['identifier'] . '</b> <br>
			Money: <b>' . $row['accounts'] . '</b> <br>
			Job: <b>' . $row['job'] . '</b> <br>
			Group: <b>' . $row['group'] . '</b> <br>
			Loadout: ' . $row['loadout'] . ' <br>
			
			</h7>
			
			</div>
			
			<div class="center"> 
				<input class="btn" type="button" value="Log out" onclick="log_out()" >
			</div>
			<center>
			<img class="smal center" src=' . $ServerLogo . '>
			</center>
			';
			
			
		} else {
			die("An error occured with loading the data.");	
		}	
	}	
		
	function update_player_data($identifier, $column_name, $value) {
	$dbServername= $GLOBALS['dbServername'];
	$dbUsername = $GLOBALS['dbUsername'];
	$dbPassowrd = $GLOBALS['dbPassword'];
	$dbName = $GLOBALS['dbName'];
	
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassowrd, $dbName);

	//CHECK CONNECTION
	if ($conn->connect_error) {
		die("connection_failed" . $conn->connect_error);
	}
	$sql = "UPDATE $dbName.users SET $column_name='$value' WHERE identifier='$identifier'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<h5 class='green'>Record updated with no errors </h5>";
		header("refresh:0;url=index.php");
	} else {
		echo "<h5 class='red'>Error updating record: " . $conn->error . "</h5>";
	}
	$conn->close();
	}
	
	
?>
</div>
<?php include 'inc/up.php' ?>
<?php include 'inc/core.php' ?>
</body>
</html>
