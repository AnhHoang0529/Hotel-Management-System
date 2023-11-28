<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM customers";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>