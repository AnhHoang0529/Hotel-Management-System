<?php
include('db_connect.php');
if (isset($_GET['id'])) {
    $user = $conn->query("SELECT * FROM users where id =" . $_GET['id']);
    foreach ($user->fetch_array() as $a => $b) {
        $get[$a] = $b;
    }
}
?>
<div class="container-fluid">

    <form action="xuliuser.php" method="post" id="manage-user">
        <input type="hidden" name="id" value="<?php echo isset($get['id']) ? $get['id'] : '' ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo isset($get['name']) ? $get['name'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($get['username']) ? $get['username'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="<?php echo isset($get['password']) ? $get['id'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="type">User Type</label>
            <select name="type" id="type" class="custom-select">
                <option value="1" <?php echo isset($get['type']) && $get['type'] == 1 ? 'selected' : '' ?>>Admin</option>
                <option value="2" <?php echo isset($get['type']) && $get['type'] == 2 ? 'selected' : '' ?>>User</option>
            </select>
        </div>
    </form>
</div>