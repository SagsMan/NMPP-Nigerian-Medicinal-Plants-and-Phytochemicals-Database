<?php
require_once '../inc/user_session.inc.php';

$PAGE_TITLE = 'Species download by clients';
$URL_NAME = 'species-downloads';
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
                                    </div>
                                    <div class="card-body">



                                        <table id="example" class="table table-striped" style="width:100%">


                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Family Name</th>
                                                    <th>Client IP Address</th>
                                                    <th>Client Country</th>
                                                    <th>Client State</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (
                                                    $species_downloads = $AdminTask->species_download_record()
                                                ) {
                                                    $sn = 0;
                                                    foreach (
                                                        $species_downloads
                                                        as $species_download
                                                    ) {
                                                        $sn++; ?>
                                                <tr id="<?= $species_download->id ?>">
                                                    <td><?= $sn ?></td>
                                                    <td><?= $species_download->ip_address ?></td>
                                                    <td>
                                                        <?= $species_download->country ?>
                                                    </td>
                                                    <td>
                                                        <?= $species_download->state ?>
                                                    </td>
                                                    <td>
                                                        <?= $species_download->download_date ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Family Name</th>
                                                    <th>Client IP Address</th>
                                                    <th>Client Country</th>
                                                    <th>Client State</th>

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