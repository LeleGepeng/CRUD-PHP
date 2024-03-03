<?php
    include 'koneksi.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-title">
                <h4>Edit Data</h4>
            </div>
            <div class="card-body">
                <form action="" mehtod="post">
                   <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="Nama" value="<?php echo $Nama; ?>" class="form-control" required>
                   </div>
                   <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="Email" value="<?php echo $Nama; ?>" class="form-control" required>
                   </div>
                   <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="Telepon" value="<?php echo $Nama; ?>" class="form-control" required>
                   </div>
                   <div class="form-group">
                        <label>Pesan</label>
                        <textarea name="Pesan" id="" cols="30" rows="10" class="form-control"></textarea>
                   </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>