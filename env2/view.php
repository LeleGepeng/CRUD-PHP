<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Database</title>

</head>
<body>


<?php
include "view_koneksi.php";
?>

<h2>DATA ANDA</h2>
<table border="1">
<a href="index.php">Halaman utama</a>
    
<!-- Bikin tabel head -->
<tr>
    <th>#</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Telepon</th>
    <th>Pesan</th>
    <th>Aksi</th>
</tr>

<?php
$view = mysqli_query($mysqli, "SELECT * from komen");
$no = 1;
while($hasil = mysqli_fetch_array($view)){
    $Nama = $hasil['Nama'];
    $Email = $hasil['Email'];
    $Telepon = $hasil['Telepon'];
    $Pesan = $hasil['Pesan'];

?>

<tr>
    <td><?php echo $hasil['Id']; ?></td>
    <td><?php echo $hasil['Nama']; ?></td>
    <td><?php echo $hasil['Email']; ?></td>
    <td><?php echo $hasil['Telepon']; ?></td>
    <td><?php echo $hasil['Pesan']; ?></td>

    <td>

    <a href="edit.php?id=<?php echo $hasil['Id']; ?>"><button >Edit</button></a>

    <a href="delete.php?id=<?php echo $hasil['Id']; ?>"><button >Hapus</button></a>

</td>
</tr>
<?php
    }
?>
</table>

</body>
</html>