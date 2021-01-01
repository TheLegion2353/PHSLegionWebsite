<?php
session_start();
?>
<html>
	<head>
		<title>Inventory Manager</title>
	</head>
	<body>
		<div>
		<?php
		if ($_POST['pwd'] != NULL) {
			$_SESSION['pwd'] = $_POST['pwd'];
		}
		
		if ($_SESSION['pwd'] != 'Pembr0ke1') {
			echo "
				<form name='form' action='' method='post'>
					Password: <input type='password' name='pwd' /> <br />
					<input type='submit' name='submit' value='Login' />
				</form>
			";
		} else {
			echo "
			<form name='' action='' method='post'>
				Search: <br />
				Name: <input type='text' name='name' /><br />
				ID: <input type='text' name='id' /><br />
				Product #: <input type='text' name='pnum' /><br />
				<input type='submit' name='submit' value='Find' />
			</form>
			";
			if ($_POST['name'] != NULL) {
				echo "Name Lookup: ";
			} else if ($_POST['id'] != NULL) {
				echo "ID Lookup: ";
			} else if ($_POST['pnum'] != NULL) {
				echo "Product # Lookup: ";				
			} else {
				
			}
		}
		?>
		</div>
	</body>
</html>