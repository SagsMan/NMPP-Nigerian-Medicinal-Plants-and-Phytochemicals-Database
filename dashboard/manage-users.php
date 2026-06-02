<?php
require_once '../inc/user_session.inc.php';

$PAGE_TITLE = 'Manage Users';
$URL_NAME = 'manage-users';
require_once '../inc/accessbility_controller.inc.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <?php require_once 'layout/header-props.php'; ?>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?></title>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php require_once 'layout/left-side-bar.php'; ?>
            <!-- Layout container -->
            <div class="layout-page">
                <?php require_once 'layout/header.php'; ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?php require_once 'layout/inline-top-link.php'; ?>

                        <!-- Basic Layout -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0"><?= $PAGE_TITLE ?></h5>
                                        <small class="text-muted float-end"><a href="add-user"
                                                class="btn btn-danger">Add
                                                User</a></small>
                                    </div>
                                    <div class="card-body">



                                        <table id="example" class="table table-striped" style="width:100%">


                                            <thead>
                                                <tr>
                                                    <th>ID</th>

                                                    <th> Name</th>
                                                     <th>Username </th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (
                                                    $users = $AdminTask->getUsers()
                                                ) {
                                                    $sn = 0;
                                                    foreach (
                                                        $users
                                                        as $user
                                                    ) {
                                                        $sn++; ?>
                                                <tr id="<?= $user->id ?>">
                                                    <td><?= $sn ?></td>
                                                    <td><?= $user->sname ?></td>
                                                     <td><?= $user->username ?></td>
                                                    <td>
                                                        <button type="button" title="Edit"
                                                            class="btn rounded-pill btn-icon btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#Edit_<?= $user->id ?>">
                                                            <span class="tf-icons bx bx-pen"></span>
                                                        </button>
                                                        <button type="button" title="Delete"
                                                            class="btn rounded-pill btn-icon btn-danger"
                                                            onClick="window.confirm('Are you sure want to delete this item ?') && delete_data_ajax('disabled_data', 'users', '<?= $user->id ?>')">
                                                            <span class="tf-icons bx bx-trash"></span>
                                                        </button>
                                                    </td>
                                                </tr>



                                                <!-- Modal -->
                                                <div class="modal fade" id="Edit_<?= $user->id ?>"
                                                    tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">

                                                        <form>
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                        User [<?= $user->sname ?>]
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="name"
                                                                                class="form-label"> Name</label>
                                                                            <input type="text"
                                                                                id="name_<?= $user->id ?>"
                                                                                class="form-control"
                                                                                placeholder="Enter Name"
                                                                                name="name"
                                                                                value="<?= $user->sname ?>"
                                                                                required />
                                                                        </div>
                                                                    
                                                                         <div class="col mb-3">
                                                                            <label for="username"
                                                                                class="form-label"> UserName</label>
                                                                            <input type="text"
                                                                                id="username_<?= $user->id ?>"
                                                                                class="form-control"
                                                                                placeholder="Enter Name"
                                                                                name="username"
                                                                                value="<?= $user->username ?>"
                                                                                required />
                                                                        </div>
                                                                    </div>
                                                                    
                                                                     <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="password"
                                                                                class="form-label"> Password</label>
                                                                            <input type="text"
                                                                                id="password_<?= $user->id ?>"
                                                                                class="form-control"
                                                                                placeholder="*********"
                                                                                name="password"
                                                                                value=""
                                                                                required />
                                                                        </div>
                                                                        
                                                                      
                                                                            <input type="hidden"
                                                                                id="Ppassword_<?= $user->id ?>"
                                                                                class="form-control"
                                                                             
                                                                                name="Ppassword"
                                                                                value="<?= $user->password ?>"
                                                                      
                                                                        
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <input type="button" class="btn btn-primary"
                                                                        onClick="edit_data_ajax('edit_user', 'table', '<?= $user->id ?>')"
                                                                        value="Save changes">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>


                                                <?php
                                                    }
                                                } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th> Name</th>
                                                    <th>UserName</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- / Content -->
                    <?php require_once 'layout/footer.php'; ?>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php require_once 'layout/footer-props.php'; ?>
    <script>

    </script>
    <script>
    function edit_data_ajax(action, table, code) {
        var formData = {
            name: $("#name_" + code).val(),
            username: $("#username_" + code).val(),
            password: $("#password_" + code).val(),
             Ppassword: $("#Ppassword_" + code).val(),
            action: action,
            id: code,
        };

        $.ajax({
            type: "POST",
            url: "../inc/ajax-data-submit.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function(data) {
           
            if (data == true) {

                $.Toast("Success!", "User Successful Updated !", "success", {
                    has_icon: true,
                    has_close_btn: true,
                    width: 300,
                    stack: true,
                    fullscreen: false,
                    timeout: 5000,
                    sticky: false,
                    has_progress: true,
                    rtl: false,
                });
            } else {
                $.Toast("Error !", "Something went wrong!", "error", {
                    has_icon: true,
                    has_close_btn: true,
                    width: 300,
                    stack: true,
                    fullscreen: false,
                    timeout: 5000,
                    sticky: false,
                    has_progress: true,
                    rtl: false,
                });
            }
        });

    }

    function delete_data_ajax(action, table, code) {
        var formData = {
            action,
            table: table,
            id: code,
        };

        $.ajax({
            type: "POST",
            url: "../inc/ajax-data-submit.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data == true) {

                $.Toast("Success!", "Item Successful Removed!", "success", {
                    has_icon: true,
                    has_close_btn: true,
                    width: 300,
                    stack: true,
                    fullscreen: false,
                    timeout: 5000,
                    sticky: false,
                    has_progress: true,
                    rtl: false,
                });
                $("table#example tr#" + code).remove();
            } else {
                $.Toast("Error !", "Something went wrong!", "error", {
                    has_icon: true,
                    has_close_btn: true,
                    width: 300,
                    stack: true,
                    fullscreen: false,
                    timeout: 5000,
                    sticky: false,
                    has_progress: true,
                    rtl: false,
                });
            }
        });

    }
    </script>


    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',

            responsive: true,
            autoWidth: false,
            lengthChange: false,
            pageLength: 15,
            buttons: {
                dom: {
                    button: {
                        className: 'btn btn-info btn-sm btn-rounded'
                    }
                },
                buttons: [{
                        //COPY
                        extend: 'copy',
                        text: '<i class="fas fa-print"></i> COPY',
                        title: '<?= $PAGE_TITLE ?>',
                    },
                    {
                        //EXCEL
                        extend: 'csv',
                        text: '<i class="fas fa-file-excel"></i> CSV', //u can define a diferent text or icon
                        title: '<?= $PAGE_TITLE ?>',
                    },
                    {
                        //EXCEL
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> EXCEL', //u can define a diferent text or icon
                        title: '<?= $PAGE_TITLE ?>',
                    },
                    {
                        //PDF
                        extend: 'pdf',
                        text: '<i class="fas fa-file-excel"></i> PDF', //u can define a diferent text or icon
                        title: '<?= $PAGE_TITLE ?>',
                    },
                    {
                        //PRINT
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> PRINT',
                        title: '<?= $PAGE_TITLE ?>',
                    },

                ]
            }
        });
    });
    </script>
</body>

</html>