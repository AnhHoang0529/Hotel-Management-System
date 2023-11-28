<?php
include('db_connect.php');
if (isset($_GET['id'])) {
    $room = $conn->query("SELECT * FROM rooms where id =" . $_GET['id']);
    foreach ($room->fetch_array() as $a => $b) {
        $get[$a] = $b;
    }
}

$cat = "SELECT * FROM room_categoricals";
$cat_arr = array();
$result = mysqli_query($conn, $cat) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $cat_arr[$data['id']] = $data;
    }
}

?>
<div class="container-fluid">

    <form action="xulideleteroom.php" method="post" id="manage-room">
        <input type="hidden" name="id" value="<?php echo isset($get['id']) ? $get['id'] : '' ?>">
        <div class="form-group">
            <label for="name">Room</label>
            <input type="text" name="room" id="room" class="form-control" value="<?php echo isset($get['room']) ? $get['room'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="custom-select">
                <option value="1" <?php echo isset($get['category_id']) && $get['category_id'] == 1 ? 'selected' : '' ?>>Single Room</option>
                <option value="2" <?php echo isset($get['category_id']) && $get['category_id'] == 2 ? 'selected' : '' ?>>Double Room</option>
                <option value="3" <?php echo isset($get['category_id']) && $get['category_id'] == 3 ? 'selected' : '' ?>>Deluxe Room</option>
            </select>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="custom-select">
                <option value="0" <?php echo isset($get['status']) && $get['status'] == 0 ? 'selected' : '' ?>>Available</option>
                <option value="1" <?php echo isset($get['status']) && $get['status'] == 1 ? 'selected' : '' ?>>Unavailable</option>
            </select>
        </div>
    </form>
</div>