<?php
include('db_connect.php');
if (isset($_GET['id'])) {
    $user = $conn->query("SELECT * FROM customers where id =" . $_GET['id']);
    foreach ($user->fetch_array() as $a => $b) {
        $get[$a] = $b;
    }
}
?>
<div class="container-fluid">

    <form action="xulicustomer.php" method="post" id="manage-user">
        <input type="hidden" name="id" value="<?php echo isset($get['id']) ? $get['id'] : '' ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($get['name']) ? $get['name'] : '' ?>" required>
        </div>
        <?php
        if (isset($get['id'])): ?>
            <div class="form-group">
                <label for="cus_id">Customer Id</label>
                <input type="text" name="cus_id" id="cus_id" class="form-control" value="<?php echo isset($get['customer_id']) ? $get['customer_id'] : '' ?>" required>
            </div>
        <?php else: ?>
            <input type="hidden" name="cus_id" value="<?php echo isset($get['customer_id']) ? $get['customer_id'] : '' ?>">
        <?php endif; ?>
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="text" name="mail" id="mail" class="form-control" value="<?php echo isset($get['mail']) ? $get['mail'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($get['phone']) ? $get['phone'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo isset($get['address']) ? $get['address'] : '' ?>" required>
        </div>

    </form>
</div>