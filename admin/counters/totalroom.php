<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM rooms";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>