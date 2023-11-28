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
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <th>#</th>
                            <th>Category</th>
                            <th>Detail</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $checked = $conn->query("SELECT * FROM booking where status=0 order by id asc");
                                while ($row = $checked->fetch_assoc()):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i++ ?></td>
                                        <td class="text-center"><?php echo $cat_arr[$row['room_id']]['name'] ?></td>
                                        <td class="text-center"><?php echo $row['name']; ?></td>
                                        <td class="text-center"><span class="badge badge-warning">Booked</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary check_in" type="button" data-id="<?php echo $row['id'] ?>" data-id2="<?php echo $row['room_id'] ?>">Check In</button>
                                            <button class="btn btn-sm btn-danger delete_booking" type="button" data-id="<?php echo $row['id'] ?>" >Cancel</button>
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

<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="delete_modalLabel" role='dialog' aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete?</h5>
            </div>
            <form action="delete_booking.php"  method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id='delete_id'>
                    <h4>Do you want to delete this booking? </h4>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id='delete'>Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('table').dataTable();
    $('.check_in').click(function () {
        uni_modal("Check In", "manage_booking.php?rid="+ $(this).attr("data-id2")+"&id=" + $(this).attr("data-id"));
    });
    $(document).ready(function () {
        $('.delete_booking').click(function () {
            var id = $(this).attr('data-id');
            $('#delete_id').val(id);
            $('#delete_modal').modal('show');
        });

    });
</script>

<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>