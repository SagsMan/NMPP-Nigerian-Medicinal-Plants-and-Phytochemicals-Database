<?php
require_once '../inc/user_session.inc.php';
header('Content-Type: text/html; charset=UTF-8');

$PAGE_TITLE = 'Manage Species';
$URL_NAME = 'manage-species';
require_once '../inc/accessbility_controller.inc.php';
?>
<?php


// Database connection details
$db_host = '127.0.0.1';
$db_port = '3306';
$db_database = 'eduowrav_nmppdb';
$db_user = 'eduowrav_nmppdb_user';
$db_password = 'Nmppdb@1234';

// Establish a database connection
try {
    $pdo = new PDO("mysql:host=$db_host;charset=utf8mb4;port=$db_port;dbname=$db_database", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_species'])) {
    // Get the values from the form and store them in variables
    $speciesID = $_POST['species_id'];
    $speciesName = $_POST['speciesName'];
    $familyName = $_POST['familyName'];
    $commonName = $_POST['commonName'];
    $localName = $_POST['localName'];
    $idNo = $_POST['idNo'];
    // $speciesContent = $_POST['speciesContent'];
    $speciesContent = htmlspecialchars($_POST['speciesContent'], ENT_QUOTES, 'UTF-8');
    $referenceInformation = $_POST['reference_information'];
    // print_r($speciesContent); exit;

    // Check if a file was uploaded
    if (isset($_FILES['t_img']['name'])) {
        $img = $_FILES['t_img']['name'];

        // Move the uploaded file to a specific directory
        $uploadDirectory = '..//dashboard/assets/img/species_img/';
        $targetPath = $uploadDirectory . $img;

        if (move_uploaded_file($_FILES['t_img']['tmp_name'], $targetPath)) {
            echo "File successfully uploaded and moved to $targetPath";
        } else {
            echo "Error moving the file";
        }
    }

    // Update species in the database
    $species_link = preg_replace('![^a-z0-9]+!i', '-', strtolower(trim($speciesName)));

    try {
        $stmt = $pdo->prepare('UPDATE species_tbl SET species_name=?, species_content=?, species_reference_information=?, family_id=?, common_name=?, local_name=?, ids_no=?, species_link=?, species_img=? WHERE id=?');
        $stmt->execute([
            trim($speciesName),
            trim($speciesContent),
            trim($referenceInformation),
            trim($familyName),
            trim($commonName),
            trim($localName),
            trim($idNo),
            $species_link,
            trim($img),
            trim($speciesID),
        ]);

    if ($stmt->rowCount() > 0) {
        // Display success alert
        echo '<script>';
        echo '    alert("Species successfully updated!");';
        echo '</script>';
    } else {
        echo '<script>';
        echo '    alert("No changes made!");';
        echo '</script>';
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <?php require_once 'layout/header-props.php'; ?>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?></title>
    <style>
        /* NMPPDB print header - hidden on screen, shown with Ctrl+P */
        .nmppdb-print-header { display: none; }
        @media print {
            .nmppdb-print-header {
                display: flex !important;
                flex-direction: column;
                align-items: center;
                padding: 0 0 15px 0;
                margin-bottom: 15px;
                border-bottom: 1px solid #ddd;
                page-break-after: avoid;
            }
            .nmppdb-print-header .print-date { color: #666; font-size: 11px; align-self: flex-start; margin-bottom: 8px; }
            .nmppdb-print-header .print-logo-wrap { display: flex; align-items: center; margin-bottom: 8px; }
            .nmppdb-print-header .print-logo-wrap img { height: 55px; width: auto; }
            .nmppdb-print-header .print-title { font-size: 18px; color: #888; text-transform: uppercase; margin: 0; }
        }
    </style>
</head>

<body>
    <!-- NMPPDB header for browser print (Ctrl+P) - hidden on screen -->
    <div class="nmppdb-print-header" id="nmppdb-print-header">
        <span class="print-date" id="print-header-date"><?= date('d/m/Y, H:i') ?></span>
        <div class="print-logo-wrap">
            <img src="<?= rtrim(SITE_URL, '/') ?>/images/nmppdb-logo.jpg" alt="NMPPDB" />
            <div style="margin-left: 12px;">
                <span style="font-weight: bold; font-size: 18px;">NMPP</span><br>
                <span style="font-size: 12px;">Database</span>
            </div>
        </div>
        <h2 class="print-title"><?= $PAGE_TITLE ?></h2>
    </div>
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
                                        <small class="text-muted float-end"><a href="add-species"
                                                class="btn btn-danger">Add
                                                Species</a></small>
                                    </div>
                                    <div class="card-body">



                                        <table id="example" class="table table-striped" style="width:100%">


                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Species Name</th>
                                                    <th>Family Name</th>
                                                    <th>Common Name</th>
                                                    <th>Local Name</th>
                                                    <th>Species ID</th>
                                                    <th>Compounds</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Species Name</th>
                                                    <th>Family Name</th>
                                                    <th>Common Name</th>
                                                    <th>Local Name</th>
                                                    <th>Species ID</th>
                                                    <th>Compounds</th>
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

    <?php 
    // Prepare NMPPDB logo as base64 for PDF export
    $logoBase64 = '';
    $logoPath = __DIR__ . '/../images/nmppdb-logo.jpg';
    if (file_exists($logoPath)) {
        $logoBase64 = 'data:image/jpeg;base64,' . base64_encode(file_get_contents($logoPath));
    }
    $logoUrl = rtrim(SITE_URL, '/') . '/images/nmppdb-logo.jpg';
    require_once 'layout/footer-props.php'; 
    ?>
    <script>
    // Update print header date when Ctrl+P is pressed
    window.addEventListener('beforeprint', function() {
        var el = document.getElementById('print-header-date');
        if (el) {
            var now = new Date();
            var d = String(now.getDate()).padStart(2, '0');
            var m = String(now.getMonth() + 1).padStart(2, '0');
            var y = now.getFullYear();
            var h = String(now.getHours()).padStart(2, '0');
            var min = String(now.getMinutes()).padStart(2, '0');
            el.textContent = d + '/' + m + '/' + y + ', ' + h + ':' + min;
        }
    });
    </script>
    <script>
    function edit_data_ajax(action, table, code) {
        var formData = {
            speciesName: $("#speciesName_" + code).val(),
            familyName: $("#familyName_" + code).val(),
            commonName: $("#commonName_" + code).val(),
            localName: $("#commonName_" + code).val(),
            
            idNo: $("#idNo_" + code).val(),
            speciesContent: $("#speciesContent_" + code).val(),
            reference_information: $("#reference_information_" + code).val(),
            action: action,
            id: code,
            img:  $("#t_img_" + code)[0].files[0].name,

        };
     

        $.ajax({
            type: "POST",
            url: "../inc/ajax-data-submit.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data == true) {

                $.Toast("Success!", "Specie Successful Updated !", "success", {
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
    $(document).ready(async function() {
        let dt = $('#example').DataTable({
            serverSide:true,
            processing: true,
            ajax: function(){
        },
        });
        
        fetch("../inc/species_processing_server.php?custom-fetch=true")
        .then(res => res.text())
        .then(html => {
        dt.destroy();
        document.querySelector("table#example tbody").innerHTML = html;
        // NMPPDB export header - matches Plant Species page style
        function getExportDateTime() {
            var now = new Date();
            var d = String(now.getDate()).padStart(2, '0');
            var m = String(now.getMonth() + 1).padStart(2, '0');
            var y = now.getFullYear();
            var h = String(now.getHours()).padStart(2, '0');
            var min = String(now.getMinutes()).padStart(2, '0');
            return d + '/' + m + '/' + y + ', ' + h + ':' + min;
        }
        function getExportHeaderHtml() {
            return '<div style="margin-bottom:20px; font-family: Arial, sans-serif;">' +
                '<div style="color:#666; font-size:11px; margin-bottom:8px;">' + getExportDateTime() + '</div>' +
                '<div style="margin:10px 0; display:flex; align-items:center;">' +
                '<img src="<?= $logoUrl ?>" alt="NMPPDB" style="height:55px; width:auto;" onerror="this.style.display=\'none\'" />' +
                '<div style="margin-left:12px;"><span style="font-weight:bold; font-size:18px;">NMPP</span><br><span style="font-size:12px;">Database</span></div>' +
                '</div>' +
                '<h2 style="margin:15px 0 0 0; text-align:center; color:#888; font-size:18px; text-transform:uppercase;"><?= addslashes($PAGE_TITLE) ?></h2>' +
                '</div>';
        }
        function getExportHeaderText() {
            return 'NMPPDB Database\n<?= addslashes($PAGE_TITLE) ?>\n' + getExportDateTime() + '\n\n';
        }

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
                        messageTop: getExportHeaderText,
                    },
                    {
                        //CSV
                        extend: 'csv',
                        text: '<i class="fas fa-file-excel"></i> CSV',
                        title: '<?= $PAGE_TITLE ?>',
                        messageTop: getExportHeaderText,
                    },
                    {
                        //EXCEL
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> EXCEL',
                        title: '<?= $PAGE_TITLE ?>',
                        messageTop: getExportHeaderText,
                    },
                    {
                        //PDF
                        extend: 'pdf',
                        text: '<i class="fas fa-file-excel"></i> PDF',
                        title: '<?= $PAGE_TITLE ?>',
                        messageTop: getExportHeaderText,
                        customize: function(doc) {
                            var logoBase64 = <?= json_encode($logoBase64) ?>;
                            var headerContent = [
                                { text: getExportDateTime(), fontSize: 9, color: 'gray', margin: [0, 0, 0, 5] }
                            ];
                            if (logoBase64) {
                                headerContent.push(
                                    { image: logoBase64, width: 55, margin: [0, 5, 0, 10] },
                                    { text: 'NMPP', fontSize: 16, bold: true, margin: [0, 0, 0, 2] },
                                    { text: 'Database', fontSize: 11, margin: [0, 0, 0, 15] }
                                );
                            }
                            headerContent.push({ text: '<?= addslashes($PAGE_TITLE) ?>', fontSize: 14, bold: true, alignment: 'center', color: '#888888', margin: [0, 0, 0, 15] });
                            [].splice.apply(doc.content, [0, 0].concat(headerContent));
                        },
                    },
                    {
                        //PRINT
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> PRINT',
                        title: '<?= $PAGE_TITLE ?>',
                        messageTop: getExportHeaderHtml,
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
</body>

</html>