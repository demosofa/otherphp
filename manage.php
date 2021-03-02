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
	?>

	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>ID</th>
				<th>USER</th>
				<th>PASSWORK</th>
				<th>EMAIL</th>
				<th>ANDRESS</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
	
		<?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['manager']; ?></td>
				<td><?php echo $row['pwd']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['andress']; ?></td>
			</tr>
		<?php } ?>
	</table>
	<button class="btn" onclick="goBack()">Back</button>
    <script>
	function goBack() {
	window.history.go(-1);
	}
    </script>
</body>