<?php 
    include 'db_connect.php';
    $sql = "SELECT SUM(price) FROM booking WHERE status=2";
    // $query = $connection->query($sql);
    $amountsum = mysqli_query($conn, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
    echo $row_amountsum['SUM(price)'];


?>