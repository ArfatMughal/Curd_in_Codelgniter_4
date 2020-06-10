<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <a href="<?php echo site_url('/users/create') ?>" class="btn btn-success mb-2">Add New User</a>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>
    <div class="row mt-3">
        <table class="table table-striped" id="users">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if($users): ?>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['contact_no']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View info</button>
                            <a href="<?php echo base_url('/users/edit/'.$user['id']);?>" class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url('/users/delete/'.$user['id']);?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <!-- Button to Open the Modal -->

        <!-- The Modal -->
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">View User Details</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form value="<?php echo base_url('/users/update');?>" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">

                                    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">

                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Name</label>
                                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $user['name'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Id</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $user['email'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="email">Contact No</label>
                                        <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Enter your contact no" value="<?php echo $user['contact_no'] ?>">

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
    $(document).ready( function () {
        $('#users').DataTable();
    } );
</script>
</body>
</html>