<?php
require_once '../inc/user_session.inc.php';

$PAGE_TITLE = 'Manage Compound';
$URL_NAME = 'manage-compound';
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
                                        <small class="text-muted float-end"><a href="add-compound"
                                                class="btn btn-danger">Add
                                                Compound</a></small>
                                    </div>
                                    <div class="card-body">
                                        
                                        
                                         <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead class="bg-info" style="color: #FFF;">
                        <tr>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Compound ID</th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>No of Sources</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Compound ID</th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>No of Sources</th>
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
   

    <!--UPDATE-->
        <script>
        
$(".my_form").submit(function (event) {
    event.preventDefault();

    let post_url = $(this).attr("action");
    let request_method = $(this).attr("method");
    let form_data = new FormData(this);
   
    
   
    // Get the submit button
    let submitButton = $(this).find(':submit');

    // Change the button text to "Submitting..."
    submitButton.prop('disabled', true).val('Submitting...');

    $.ajax({
        url: "../inc/ajax-data-submit.php",
        type: request_method,
        data: form_data,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("Server Response:", response);
            try {
                const jsonResponse = JSON.parse(response);
                if (jsonResponse.status === 'success') {
                    $.Toast("Success!", "Compound Successfully Updated!", "success", {
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

                    // Your success handling logic here

                    // Change the button text back to "Submit"
                    submitButton.prop('disabled', false).val('Submit');

                    // Refresh the page after 5 seconds
                    setTimeout(function () {
                        location.reload();
                    }, 5000); // 5000 milliseconds (5 seconds)
                } else {
                    console.error("Server Error:", jsonResponse.error);
                    
                    // If there's an error, revert the button text to "Submit"
                    submitButton.prop('disabled', false).val('Submit');
                }
            } catch (error) {
                console.error("Error parsing JSON:", error);

                // If there's an error, revert the button text to "Submit"
                submitButton.prop('disabled', false).val('Submit');
            }
        },
        error: function (xhr, status, error) {
            console.error("AJAX Error:", status, error);

            // If there's an error, revert the button text to "Submit"
            submitButton.prop('disabled', false).val('Submit');
        }
    });
});




        



            </script>

    <!--END -->




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

                $.Toast("Success!", "Item Successful Removed !", "success", {
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
    $(document).ready(async function() {
    let dt = $('#example').DataTable({
            serverSide:true,
            processing: true,
            ajax: function(){
                
    },
    });
    
    fetch('../inc/manage_compunds_server_processing.php?custom-fetch=true<?php echo (isset($_GET["d.initial"])?'&initial='.$_GET["d.initial"]:""); ?>')
    .then(res => res.text())
    .then(html => {
             dt.destroy();
             document.querySelector("table#example tbody").innerHTML = html;
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
    });
    </script>
     <script>
    // Find the button element by its class name
    var closeButton = document.querySelector('.btn-close');

    // Add click event listener to the button
    closeButton.addEventListener('click', function() {
        // Reload the page when the button is clicked
        location.reload();
    });
    </script>
   

<script>
function handleEditButtonClick(compoundId) {
    // You can use the compoundId variable here
    alert("Compound ID: " + compoundId);
    // If you need to pass this ID to any other function or use it in any way, do so here
}
</script>

</body>

</html>