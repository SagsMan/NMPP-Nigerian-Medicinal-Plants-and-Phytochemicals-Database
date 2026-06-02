<?php
require_once '../inc/user_session.inc.php';

if (isset($_POST['upload_now'])) {
    if ($AdminTask->add_upload($_POST, $_FILES)) {
        $_SESSION['SITE_SUCCESS'][] = 'File is successfully uploaded.';
        header('Location: manage-downloads');
        exit();
    } else {
        array_push($SITE_ERRORS, 'Something went wrong with the upload.');
    }
}

$PAGE_TITLE = 'Manage Downloads';
$URL_NAME = 'manage-downloads';
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
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0"><?= $PAGE_TITLE ?></h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#uploadModal">
                                            Upload New File
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <div id="response_status">
                                            <?php if (count($SITE_ERRORS) > 0): ?>
                                            <?php foreach ($SITE_ERRORS as $error): ?>
                                            <div class="alert alert-danger"><?= $error ?></div>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                            <?php if (count($SITE_SUCCESS) > 0): ?>
                                            <?php foreach ($SITE_SUCCESS as $good): ?>
                                            <div class="alert alert-success"><?= $good ?></div>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>

                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Title</th>
                                                    <th>File Name</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($uploads = $AdminTask->get_uploads()) {
                                                    $sn = 0;
                                                    foreach ($uploads as $upload) {
                                                        $sn++; ?>
                                                <tr id="<?= $upload->id ?>">
                                                    <td><?= $sn ?></td>
                                                    <td><?= $upload->file_title ?></td>
                                                    <td><?= $upload->file_name ?></td>
                                                    <td><?= $upload->file_description ?></td>
                                                    <td><?= $upload->uploaded_at ?></td>
                                                    <td>
                                                        <button type="button" title="Delete"
                                                            class="btn rounded-pill btn-icon btn-danger"
                                                            onClick="window.confirm('Are you sure want to delete this file?') && delete_data_ajax('disabled_data', 'uploads', '<?= $upload->id ?>')">
                                                            <span class="tf-icons bx bx-trash"></span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Upload Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Upload New Public File</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">File Title</label>
                                            <input type="text" name="fileTitle" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="fileDescription" class="form-control"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Select SDF File (.sdf)</label>
                                            <input type="file" name="upload_file" class="form-control" accept=".sdf" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <input type="submit" name="upload_now" class="btn btn-primary" value="Upload">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php require_once 'layout/footer.php'; ?>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <?php require_once 'layout/footer-props.php'; ?>
    <script>
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
                $.Toast("Success!", "File Successfully Removed!", "success", {
                    has_icon: true,
                    has_close_btn: true,
                    stack: true,
                    timeout: 5000,
                });
                $("table#example tr#" + code).remove();
            } else {
                $.Toast("Error !", "Something went wrong!", "error", {
                    has_icon: true,
                    has_close_btn: true,
                    stack: true,
                    timeout: 5000,
                });
            }
        });
    }

    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            autoWidth: false,
            pageLength: 15
        });
    });
    </script>
</body>
</html>
