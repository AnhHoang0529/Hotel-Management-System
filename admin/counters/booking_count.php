<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM booking WHERE status = 0";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>