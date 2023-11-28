<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
        <div class="col-lg-12">
            <button class="btn btn-primary float-right" id="new_customer"><i class="fa fa-plus"></i> New customer</button>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Customer Id</th>
                            <th>Phone</th>
                            <th>Mail</th>
                            <th>Charges</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                include 'db_connect.php';
                                $i = 1;
                                $checked = $conn->query("SELECT * FROM customers order by id asc");
                                while ($row = $checked->fetch_assoc()):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $i++ ?></td>
                                        <td class="text-center"><?php echo $row['name'] ?></td>
                                        <td class="text-center"><?php echo $row['customer_id']; ?></td>
                                        <td class="text-center"><?php echo $row['phone'] ?></td>
                                        <td class="text-center"><?php echo $row['mail'] ?></td>
                                        <td class="text-center"><?php echo $row['charges'] ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-primary edit_customer" data-id = '<?php echo $row['id'] ?>'>Edit</a>
                                    <a class="btn btn-danger delete_customer" data-id = '<?php echo $row['id'] ?>'>Delete</a>
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
            <form action="delete_customer.php"  method="post">
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
    $('#new_customer').click(function () {
        uni_modal('New Customer', 'manage_customer.php');
    });
    $('.edit_customer').click(function () {
        uni_modal('Edit Customer', 'manage_customer.php?id=' + $(this).attr('data-id'));
    });
    $(document).ready(function () {
        $('.delete_customer').click(function () {
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