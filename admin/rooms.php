<?php include('db_connect.php'); ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form id="filter">
                                    <div class="row">
                                        <div class=" col-md-4">
                                            <label class="control-label">Category</label>
                                            <select class="custom-select browser-default" name="category_id">
                                                <option value="all" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == 'all' ? 'selected' : '' ?>>All</option>
                                                <?php
                                                $cat = $conn->query("SELECT * FROM room_categoricals order by name asc ");
                                                while ($row = $cat->fetch_assoc()) {
                                                    $cat_name[$row['id']] = $row['name'];
                                                    ?>
                                                    <option value="<?php echo $row['id'] ?>" <?php echo isset($_GET['category_id']) && $_GET['category_id'] == $row['id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="col-md-2">
                                            <label for="" class="control-label">&nbsp</label>
                                            <button class="btn btn-block btn-primary">Filter</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary float-right" id="new_room"><i class="fa fa-plus"></i> New room</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                            <th>#</th>
                            <th>Category</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $where = '';
                                if (isset($_GET['category_id']) && !empty($_GET['category_id']) && $_GET['category_id'] != 'all') {
                                    $where .= " where category_id = '" . $_GET['category_id'] . "' ";
                                }

                                $rooms = $conn->query("SELECT * FROM rooms " . $where . " order by category_id asc");
                                while ($row = $rooms->fetch_assoc()):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i++ ?></td>
                                        <td class="text-center"><?php echo $cat_name[$row['category_id']] ?></td>
                                        <td class=""><?php echo $row['room'] ?></td>
                                        <?php if ($row['status'] == 0): ?>
                                            <td class="text-center"><span class="badge badge-success">Available</span></td>
                                        <?php else: ?>
                                            <td class="text-center"><span class="badge badge-warning">Unavailable</span></td>
                                        <?php endif; ?>

                                        <td class="text-center">
                                            <a class="btn btn-primary edit_room" data-id = '<?php echo $row['id'] ?>'>Edit</a>
                                            <a class="btn btn-danger delete_room" data-id = '<?php echo $row['id'] ?>'>Delete</a>
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
            <form action="delete_room.php"  method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id='delete_id'>
                    <h4>Do you want to delete this account? </h4>
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
    $('#new_room').click(function () {
        uni_modal('New Room', 'manage_room.php');
    });
    $('.edit_room').click(function () {
        uni_modal('Edit Room', 'manage_room.php?id=' + $(this).attr('data-id'));
    });
    $('#filter').submit(function (e) {
        e.preventDefault();
        location.replace('index.php?page=rooms&category_id=' + $(this).find('[name="category_id"]').val());
    });
    $(document).ready(function () {
        $('.delete_room').click(function () {
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