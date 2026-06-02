<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'DOWNLOAD';
$URL_NAME = 'download';
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?> </title>
    <?php include_once 'layout/header-props.php'; ?>



    <style>
    h5 ul li {
        list-style: none;
        display: inline-block;
        color: green;
    }
    
        .swiper-button-prev:before , .swiper-button-next:before {
        content: "";
    }
    </style>
</head>

<body>
    <?php include_once 'layout/preloader.php'; ?>

    <div class="page">

        <?php include_once 'layout/header.php'; ?>

        <div class="divider-spectrum"></div>

        <section
            class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap"
            style="background-image: url(images/download.jpg); background-size: cover; background-position: center center; background-attachment: initial;">
            <div class="container">
                <div class="page-title">
                    <h2><?= $PAGE_TITLE ?></h2>
                </div>
            </div>
        </section>
        
        <!--<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-autoplay="5500"-->
        <!--    data-simulate-touch="true" data-swiper="{&quot;loop&quot;:false}" style="min-height: 30vh;">-->
        <!--    <div class="swiper-wrapper text-center" style="min-height: 30vh;">-->
        <!--        <div class="swiper-slide" data-slide-bg="images/plant-species-slider-image-3.jpg">-->
        <!--            <div class="swiper-slide-caption" style="padding: 0;">-->
        <!--                <div class="container">-->
        <!--                    <div class="row justify-content-md-center">-->
        <!--                        <div class="col-md-11 col-lg-10 col-xl-9">-->
        <!--                            <div class="page-title" style="font-style: italic;">-->
        <!--                                <h3><?= $PAGE_TITLE ?></h3>-->
        <!--                            </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;text-align:left;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100" >For New Drugs Discovery.</p>-->
                                    
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide" data-slide-bg="images/plant-species-slider-image-4.jpg">-->
        <!--            <div class="swiper-slide-caption" style="padding: 0;">-->
        <!--                <div class="container">-->
        <!--                    <div class="row justify-content-md-center">-->
        <!--                        <div class="col-md-11 col-lg-10 col-xl-9">-->
        <!--                            <div class="page-title" style="font-style: italic;">-->
        <!--                                <h3><?= $PAGE_TITLE ?></h3>-->
        <!--                            </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.-->
                                    <!--</p>-->
                                    <!--<div class="group-xl-responsive"><a class="button button-xl button-primary-contrast"-->
                                    <!--        data-caption-animate="fadeInUp" data-caption-delay="250"-->
                                    <!--        href="./plant-species" target="_blank">Get Plant Species now</a></div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--                <div class="swiper-scrollbar"></div>-->
        <!--    <div class="swiper-nav-wrap">-->
        <!--        <div class="swiper-button-prev">-->
        <!--            <div style="display: grid; place-content: center;">-->
        <!--                <i style="font-size: 2.5rem; color: #fff" class="fa-solid fa-chevron-left"></i>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-button-next">-->
        <!--            <div style="display: grid; place-content: center;">-->
        <!--            <i style="font-size: 2.5rem; color: #fff" class="fa-solid fa-chevron-right"></i>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
            
        <!--</section>-->

        <section class="section section-50 section-md-bottom-75 section-xl-bottom-100 bg-whisper novi-background">
            <div class="container">
                <h3 class="h3">NMPP-DATABASE COMPOUND LIBRARY</h3>
                <p style="color: #000000a3; font-size: 18px; margin-top: 12px;">
                    You can download the comprehensive compound library of the Nigerian Medicinal Plants and Phytochemicals Database (NMPP-DB) in 2D-SDF, 3D-SDF, and SMILES formats via the links below. The current NMPP-DB version 1.0 boasts over 2,000 compounds.
                </p>
                <p style="color: #000000a3; font-size: 18px; margin-top: 12px;">
                     Available Downloads: 
                </p>
                <ul style="padding-left: 20px; color: #000000a3; font-size: 18px;">
                    <?php if($public_files = $AdminTask->get_uploads()){
                        foreach($public_files as $file){ ?>
                            <li> 
                                <a href="<?= SITE_URL ?>dashboard/assets/img/compound_sdf_files/<?= rawurlencode($file->file_name) ?>" target="_blank">
                                    <?= $file->file_title ?>
                                </a> 
                            </li>
                        <?php }
                    } else { ?>
                        <li>No files available for download at the moment.</li>
                    <?php } ?>
                </ul>
            </div>

        </section>




        <?php include_once 'layout/footer.php'; ?>
    </div>
    <?php include_once 'layout/footer-props.php'; ?>



    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            processing: true,
            serverSide: true,
            "ajax": {
                url: 'inc/server_processing.php',
                type: 'GET',
                data: function(d) {
                    d.initial = '<?= isset($_GET['initial'])
                        ? $_GET['initial']
                        : '' ?>';
                    // console.log(d.myKey)
                },
                error: function(error) {
                    console.log(error)
                    // $("#post_list_processing").css("display", "none");
                }
            },
            // dom: 'Bfrtip',
            dom: 'frtip',
            responsive: true,
            autoWidth: false,
            lengthChange: false,
            pageLength: 15,
            buttons: {
                dom: {
                    button: {
                        className: 'btn-success btn-sm btn-rounded'
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
