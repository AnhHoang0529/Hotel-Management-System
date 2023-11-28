<?php 
    include 'db_connect.php';
    $sql = "SELECT * FROM room_categoricals";
    $query = $conn->query($sql);

    echo "$query->num_rows";

?>