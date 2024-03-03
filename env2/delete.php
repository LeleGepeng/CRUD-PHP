<?php

include "view_koneksi.php";

$Id = $_GET['Id'];
var_dump($Id);die();


$query = "DELETE FROM komen WHERE Id = $Id";

if(mysqli_query ($mysqli, $query)){
    echo "Record Delete Successfully.";
    }else{
        echo"Error Deleting Record: " .mysqli_error($mysqli);
    }

    ?>