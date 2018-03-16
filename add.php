<?php 
session_start();
include ('server.php');
if(!isset($_SESSION['uid']))
{
	header('location:login.php');
}
$uid = $_SESSION['uid'];
	if(isset($_POST['insert'])){
		$cat_name = $_POST['category'];
		$amount = $_POST['amount'];
		$sql1 = "INSERT INTO tbl_transaction (uid, cat_name, amount) VALUES ($uid,'$cat_name',$amount);";
			mysqli_query($db,$sql1);
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD YOUR TRANSACTIONS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>ADD EXPENSES</h2>
	</div><br><br>
	<form method="post" action="">
	<div class="input_group1">
		 <input list="category" name="category" autocomplete="off" placeholder="Select category">
		<datalist id="category">
		<?php $qry = "SELECT distinct(cat_name) FROM tbl_transaction WHERE uid=$uid;";
		$sql = mysqli_query($db,$qry);
		while($row = mysqli_fetch_assoc($sql)) { 
		?>
			
			<option value="<?php echo $row['cat_name'];?>"></option>
			
		<?php } ?>
		</datalist>
	</div><br><br>
	<div class="input_group1">
		<input type="text" name="amount" placeholder="Your amount">
	</div><br><br>
	<div>
		<input type="Submit" name="insert" class="btn">
		<p>
				<button>
					<a href="chart.php" style="color: blue;">VIEW MY EXPENSES</a>
				</button>
					
			</p>
	</div>
</form>
</body>
</html>
