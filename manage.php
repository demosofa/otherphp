<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$query = $connection->prepare("SELECT * FROM storedata");
	$query->execute();
	$index = 1;
	?>

	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>PRODUCT</th>
				<th>AMOUNT</th>
				<th>PROFIT</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
	
		<?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
			<tr>
				<td><?php echo $indexx; ?></td>
				<td><?php echo $row['product']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td><?php echo $row['profit']; ?></td>
			</tr>
			$index+++
		<?php } ?>
	</table>
	<button class="btn" onclick="goBack()">Back</button>
    <script>
	function goBack() {
	window.history.go(-1);
	}
    </script>
</body>
