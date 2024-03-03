<?php
include "view_koneksi.php";

$Id = $_GET['id'];
var_dump($Id);die();
$query = "SELECT * FROM komen WHERE Id = $Id";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) ==1){
    $row = mysqli_fetch_array($result);
    $Nama = $row['Nama'];
    $Email = $row['Email'];
    $Telepon = $row['Telepon'];
    $Pesan = $row['Pesan'];
}else{
    echo "no record found.";
    exit();
}
if (isset ($_POST['submit'])){
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $Telepon = $_POST['Telepon'];
    $Pesan = $_POST['Pesan'];

    $query = "UPDATE komen SET Nama = '$Nama', Email = '$Email', Telepon = '$Telepon', Pesan = '$Pesan'";

    if(mysqli_query($mysqli, $query)){
        echo "Record update successfully.";
    } else {
        echo "Error updating record: " .  mysqli_error($mysqli);
    }
}

?>

<!-- <form method="Post" action="">
    <label>Nama</label>
    <input type="text" name="Nama" value="<?php echo $Nama; ?>" required>
    <br>
    <label>Email</label>
    <input type="text" name="Email" value="<?php echo $Email; ?>" required>
    <br>
    <label>Telepon</label>
    <input type="tel" name="Telepon" value="<?php echo $Telepon; ?>" required>
    <br>
    <label>Pesan</label>
    <input type="text" name="Pesan" value="<?php echo $Pesan; ?>" required>
    <br>
    <input type='submit' value="Update">
</form> -->


    