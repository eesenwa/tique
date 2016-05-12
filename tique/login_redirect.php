<html>
<body>
	Data submission: <br>
	<?php  
		echo "PHP loaded";
		$con = mysqli_connect('localhost', 'root', '') or die(mysql_error());
		mysqli_select_db($con, 'user_registration') or die('cannot select DB');

		if(!empty($_POST['s_email'])) {
			//Student account
			echo '<strong> Account type: </strong>: 0<br>';
			echo '<strong> Email/phone:</strong> '. $_POST['s_email'] . '<br>';
			echo '<strong> Password:</strong> '. $_POST['s_pass'] . '<br>';
			echo '<strong> Group code:</strong> '. $_POST['group_code'] . '<br><br><br>';

			$user = $_POST['s_email'];
			$pass = $_POST['s_pass'];
			$gc = $_POST['group_code'];

			$query = mysqli_query($con, "SELECT * FROM User WHERE username = '".$user."'") or die(mysqli_error($con));
			$numrows = mysqli_num_rows($query);
			if($numrows == 0) {
				$sql = "INSERT INTO User (userID, username, password, groupcode) VALUES ('', '$user', '$pass', '$gc')";
				$result = mysqli_query($con, $sql);
				if($result) {
					echo 'Account created! <br>';
				}else {
					echo 'Failure to create account';
				}
			} else {
				echo 'Account already exists';
			}
		}
		else {
			//Teacher account
			echo '<strong> Account type: </strong>: 1<br>';
			echo '<strong> First name:</strong> '. $_POST['fname'] . '<br>';
			echo '<strong> Last name: </strong> '. $_POST['lname'] . '<br>';
			echo '<strong> Email:</strong> '. $_POST['t_email'] . '<br>';
			echo '<strong> Password:</strong> '. $_POST['t_pass'] . '<br>';

			$fname = $_POST['fname'];
			$pass = $_POST['lname'];
			$t_email = $_POST['t_email'];
			$t_password = $_POST['t_password'];

			$query = mysqli_query($con, "SELECT * FROM User WHERE user = '".$user."'") or die(mysqli_error($con));
			$numrows = mysqli_num_rows($query);
			if($numrows == 0) {
				$sql = "INSERT INTO User (userID, user, password, groupcode) VALUES ('', '$user', '$pass', '$gc')";
				$result = mysqli_query($con, $sql);
				if($result) {
					echo 'Account created! <br>';
				}else {
					echo 'Failure to create account';
				}
			} else {
				echo 'Account already exists';
			}
		}
	?>

</body>
</html>
