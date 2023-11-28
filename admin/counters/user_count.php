<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM users";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>