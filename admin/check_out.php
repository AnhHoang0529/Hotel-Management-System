<?php
include 'db_connect.php';
$cat = "SELECT * FROM room_categoricals";
$cat_arr = array();
$result = mysqli_query($conn, $cat) or die(mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $cat_arr[$data['id']] = $data;
    }
}

$room = "SELECT * FROM rooms";
$room_arr = array();
$result1 = mysqli_query($conn, $room) or die(mysqli_error($conn));

if (mysqli_num_rows($result1) > 0) {
    while ($data = mysqli_fetch_assoc($result1)) {
        $room_arr[$data['id']] = $data;
    }
}
?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                            <th>#</th>
                            <th>Category</th>
                            <th>Room</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $checked = $conn->query("SELECT * FROM booking where status !=0 order by  id asc ");
                                while ($row = $checked->fetch_assoc()):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i++ ?></td>
                                        <td class="text-center"><?php echo $cat_arr[$row['room_id']]['name'] ?></td>
                                        <td class="text-center"><?php echo $room_arr[$row['room']]['room'] ?></td>
                                        <td class="text-center"><?php echo $row['name'] ?></td>
                                        <?php if ($row['status'] == 1): ?>
                                            <td class="text-center"><span class="badge badge-warning">Checked-In</span></td>
                                        <?php else: ?>
                                            <td class="text-center"><span class="badge badge-success">Checked-Out</span></td>
                                        <?php endif; ?>
                                        <td class="text-center">
                                            <?php if ($row['status'] == 1): ?>
                                                <button class="btn btn-sm btn-primary check_out" type="button" data-id="<?php echo $row['id'] ?>">Check out</button>
                                                <button class="btn btn-sm btn-info edit" type="button" data-id="<?php echo $row['id'] ?>">Edit</button>
                                            <?php else: ?>
                                                <button class="btn btn-sm btn-primary view" type="button" data-id="<?php echo $row['id'] ?>">View</button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="checkout" tabindex="-1" aria-labelledby="checkoutmodalLabel" role='dialog' aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Check Out</h5>
            </div>
            <form action="xulicheckout.php"  method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id='id'>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Payment & Check Out</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('table').dataTable();
    $(document).ready(function () {
        $('.check_out').click(function () {
            var id = $(this).attr('data-id');
            $('#id').val(id);
            $('#checkout .modal-body').load("manage_check_out.php?id=" + id);
            $('#checkout').modal('show');
           
        });
    });
    $('.edit').click(function () {
        uni_modal('Edit Check In', 'edit_check_in.php?id=' + $(this).attr('data-id'));
    });
    $('.view').click(function () {
        uni_modal('Detail', 'view_check_out.php?id=' + $(this).attr('data-id'));
    });
</script>

<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>