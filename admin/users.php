<?php ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-lg-12">
                <button class="btn btn-primary float-right" id="new_user"><i class="fa fa-plus"></i> New user</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'db_connect.php';
                                $users = $conn->query("SELECT * FROM users order by name asc");
                                $i = 1;
                                while ($row = $users->fetch_assoc()):
                                    ?>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $i++ ?>
                                        </td>
                                        <td>
                                            <?php echo $row['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['username'] ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary edit_user" data-id = '<?php echo $row['id'] ?>'>Edit</a>
                                            <a class="btn btn-danger delete_user" data-id = '<?php echo $row['id'] ?>'>Delete</a>
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
            <form action="delete_user.php"  method="post">
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

    $('#new_user').click(function () {
        uni_modal('New User', 'manage_user.php');
    });
    $('.edit_user').click(function () {
        uni_modal('Edit User', 'manage_user.php?id=' + $(this).attr('data-id'));
    });
    $(document).ready(function () {
        $('.delete_user').click(function () {
            var id = $(this).attr('data-id');
            $('#delete_id').val(id);
            $('#delete_modal').modal('show');
        });

    });
    $('table').dataTable();


</script>

<style>
    .modal-backdrop {
        z-index: -1;
    }
</style>