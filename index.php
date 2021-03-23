<?php 
//koneksaun ba database
$conn = mysqli_connect("localhost","root","saeria","simple_php");
//ambil data dari table estudante /query data
$result = mysqli_query($conn,"SELECT * FROM estudante");
//foti data estudante husi object result ==fetch
//mysqli_fetch_row() mengebalika array numerik
//mysqli_fetch_assoc()  mengebalikan array associative
//myslqi_fetch_array() mengebalika keduanya nomor atau string
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_row($result)) {
//	var_dump($mhs);

//  } 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pajina Admin</title>
</head>
<body>

	<h1>Lista Estudante</h1>

	<table border="1" cellpadding="10" cellspacing="0">
<tr>
	<th>No.</th>
	<th>Aks</th>
	<th>Foto</th>
	<th>NRE</th>
	<th>Naran</th>
	<th>Email</th>
	<th>Departamento</th>
</tr>
<!--loke looping-->
<?php $i=1; ?>
<?php while ($row = mysqli_fetch_assoc($result)):?>


<tr>
	<td><?php echo $i; ?></td>
	<td>
		<a href="">Edit</a> | 
		<a href="">Delete</a>
	</td>
	<td><img src="foto/<?php echo $row["foto"]; ?>" width="40" height="50"></td>
	<td><?php echo $row["nre"]; ?></td>
	<td><?php echo $row["naran"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["departamento"]; ?></td>
</tr>
<!--taka looping while-->
<?php $i++; ?>
<?php endwhile; ?>

	</table>

</body>
</html>