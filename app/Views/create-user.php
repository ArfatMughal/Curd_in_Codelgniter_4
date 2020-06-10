<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter 4 User Form With Validation Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

</head>
<body>
<div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>

    <span class="d-none alert alert-success mb-3" id="res_message"></span>

    <div class="row">
        <div class="col-md-5 mt-5">
            <form action="<?php echo base_url('/users/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">
                <h2>Adding New User</h2>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">

                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">

                </div>

                <div class="form-group">
                    <label for="email">Contact No</label>
                    <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Please enter contact no">

                </div>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Please enter username">

                </div>

                <div class="form-group">
                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    if ($("#user_create").length > 0) {
        $("#user_create").validate({

            rules: {
                name: {
                    required: true,
                },

                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
            },
            messages: {

                name: {
                    required: "Please enter name",
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
            },
        })
    }
</script>
<!--<div class="container">-->
<!--    <h2>Adding New User</h2>-->
<!--    <form action="--><?php //echo base_url('/users/store');?><!--" name="user_create" id="user_create" method="post" accept-charset="utf-8" class="needs-validation" novalidate>-->
<!--        <div class="form-row">-->
<!--            <div class="col-md-4 mb-3">-->
<!--                <label for="name">Firt name</label>-->
<!--                <input type="text" class="form-control" name="name" id="name" value="Mark" required>-->
<!--                <div class="valid-feedback">-->
<!--                    Looks good!-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 mb-3">-->
<!--                <label for="last_name">Last name</label>-->
<!--                <input type="text" class="form-control" id="last_name" name="last_name" value="Otto" required>-->
<!--                <div class="valid-feedback">-->
<!--                    Looks good!-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 mb-3">-->
<!--                <label for="username">Username</label>-->
<!--                <div class="input-group">-->
<!--                    <div class="input-group-prepend">-->
<!--                        <span class="input-group-text" id="username" name="username">@</span>-->
<!--                    </div>-->
<!--                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>-->
<!--                    <div class="invalid-feedback">-->
<!--                        Please choose a username.-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-row">-->
<!--            <div class="col-md-4 mb-3">-->
<!--                <label for="email">Email Address</label>-->
<!--                <input type="text" class="form-control" id="email" name="email" required>-->
<!--                <div class="invalid-feedback">-->
<!--                    Please provide Email Address.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 mb-3">-->
<!--                <label for="contact_no">Contant no</label>-->
<!--                <input type="text" name="contact_no" class="form-control" id="contact_no" required>-->
<!--                <div class="invalid-feedback">-->
<!--                    Please provide a valid Contant.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-row">-->
<!--            <div class="col-md-6 mb-3">-->
<!--                <label for="city">City</label>-->
<!--                <input type="text" class="form-control" id="city" name="city" required>-->
<!--                <div class="invalid-feedback">-->
<!--                    Please provide a valid city.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 mb-3">-->
<!--                <label for="validationCustom04">State</label>-->
<!--                <select class="custom-select" id="validationCustom04" required>-->
<!--                    <option selected disabled value="">Choose...</option>-->
<!--                    <option>Punjab</option>-->
<!--                    <option>Sindh</option>-->
<!--                    <option>Pashawar</option>-->
<!--                </select>-->
<!--                <div class="invalid-feedback">-->
<!--                    Please select a valid state.-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 mb-3">-->
<!--                <label for="zip">Zip</label>-->
<!--                <input type="text" class="form-control" id="zip" name="zip"  required>-->
<!--                <div class="invalid-feedback">-->
<!--                    Please provide a valid zip.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <div class="form-check">-->
<!--                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>-->
<!--                <label class="form-check-label" for="invalidCheck">-->
<!--                    Agree to terms and conditions-->
<!--                </label>-->
<!--                <div class="invalid-feedback">-->
<!--                    You must agree before submitting.-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <button id="send_form" class="btn btn-primary" type="submit">Submit form</>-->
<!--    </form>-->
<!--</div>-->
<!--<script>-->
<!--    // Example starter JavaScript for disabling form submissions if there are invalid fields-->
<!--    (function() {-->
<!--        'use strict';-->
<!--        window.addEventListener('load', function() {-->
<!--            // Fetch all the forms we want to apply custom Bootstrap validation styles to-->
<!--            var forms = document.getElementsByClassName('needs-validation');-->
<!--            // Loop over them and prevent submission-->
<!--            var validation = Array.prototype.filter.call(forms, function(form) {-->
<!--                form.addEventListener('submit', function(event) {-->
<!--                    if (form.checkValidity() === false) {-->
<!--                        event.preventDefault();-->
<!--                        event.stopPropagation();-->
<!--                    }-->
<!--                    form.classList.add('was-validated');-->
<!--                }, false);-->
<!--            });-->
<!--        }, false);-->
<!--    })();-->
<!--</script>-->

</body>
</html>