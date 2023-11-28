<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM booking WHERE status = 2";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>