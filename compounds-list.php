<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'compounds List';
$URL_NAME = 'compounds-list';
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
            style="background-image: url(images/compound-list-slider-image-2.jpg); background-size: cover; background-position: center bottom; background-attachment: initial;">
            <div class="container">
                <div class="page-title">
                    <h2><?= $PAGE_TITLE ?></h2>
                </div>
            </div>
        </section>
        
        
<!--                <section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-autoplay="5500"-->
<!--            data-simulate-touch="true" data-swiper="{&quot;loop&quot;:false}" style="min-height: 30vh;">-->
<!--            <div class="swiper-wrapper text-center" style="min-height: 30vh;">-->
<!--                <div class="swiper-slide" data-slide-bg="images/compound-list-slider-image-1.jpg">-->
<!--                    <div class="swiper-slide-caption" style="padding: 0;">-->
<!--                        <div class="container">-->
<!--                            <div class="row justify-content-md-center">-->
<!--                                <div class="col-md-11 col-lg-10 col-xl-9">-->
<!--                                <div class="page-title">-->
<!--                                    <h2><?= $PAGE_TITLE ?></h2>-->
<!--                                </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;text-align:left;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100" >For New Drugs Discovery.</p>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide" data-slide-bg="images/compound-list-slider-image-2.jpg">-->
<!--                    <div class="swiper-slide-caption" style="padding: 0;">-->
<!--                        <div class="container">-->
<!--                            <div class="row justify-content-md-center">-->
<!--                                <div class="col-md-11 col-lg-10 col-xl-9">-->
<!--                                    <div class="page-title">-->
<!--                                        <h2><?= $PAGE_TITLE ?></h2>-->
<!--                                    </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.-->
                                    <!--</p>-->
                                    <!--<div class="group-xl-responsive"><a class="button button-xl button-primary-contrast"-->
                                    <!--        data-caption-animate="fadeInUp" data-caption-delay="250"-->
                                    <!--        href="./plant-species" target="_blank">Get Plant Species now</a></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--                        <div class="swiper-scrollbar"></div>-->
<!--<div class="swiper-nav-wrap">-->
<!--                <div class="swiper-button-prev">-->
<!--                    <div style="display: grid; place-content: center;">-->
<!--                        <i style="font-size: 2.5rem; color: #fff" class="fa-solid fa-chevron-left"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-button-next">-->
<!--                    <div style="display: grid; place-content: center;">-->
<!--                    <i style="font-size: 2.5rem; color: #fff" class="fa-solid fa-chevron-right"></i>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
<!--        </section>-->

        <section class="section section-50 section-md-bottom-75 section-xl-bottom-100 bg-whisper novi-background">
            <div class="container-fluid">
                <h5>
                    <ul>
                        <li><a href="./compounds-list?initial=A"> A</a></li>
                        <li><a href="./compounds-list?initial=B"> B</a></li>
                        <li><a href="./compounds-list?initial=C"> C</a></li>
                        <li><a href="./compounds-list?initial=D"> D</a></li>
                        <li><a href="./compounds-list?initial=E"> E</a></li>
                        <li><a href="./compounds-list?initial=F"> F</a></li>
                        <li><a href="./compounds-list?initial=G"> G</a></li>
                        <li><a href="./compounds-list?initial=H"> H</a></li>
                        <li><a href="./compounds-list?initial=I"> I</a></li>
                        <li><a href="./compounds-list?initial=J"> J</a></li>
                        <li><a href="./compounds-list?initial=K"> K</a></li>
                        <li><a href="./compounds-list?initial=L"> L</a></li>
                        <li><a href="./compounds-list?initial=M"> M</a></li>
                        <li><a href="./compounds-list?initial=N"> N</a></li>
                        <li><a href="./compounds-list?initial=O"> O</a></li>
                        <li><a href="./compounds-list?initial=P"> P</a></li>
                        <li><a href="./compounds-list?initial=Q"> Q</a></li>
                        <li><a href="./compounds-list?initial=R"> R</a></li>
                        <li><a href="./compounds-list?initial=S"> S</a></li>
                        <li><a href="./compounds-list?initial=T"> T</a></li>
                        <li><a href="./compounds-list?initial=U"> U</a></li>
                        <li><a href="./compounds-list?initial=V"> V</a></li>
                        <li><a href="./compounds-list?initial=W"> W</a></li>
                        <li><a href="./compounds-list?initial=X"> X</a></li>
                        <li><a href="./compounds-list?initial=I"> Y</a></li>
                        <li><a href="./compounds-list?initial=J"> Z</a></li>
                        <li><a href="./compounds-list?initial=1"> 1</a></li>
                        <li><a href="./compounds-list?initial=2"> 2</a></li>
                        <li><a href="./compounds-list?initial=3"> 3</a></li>
                        <li><a href="./compounds-list?initial=4"> 4</a></li>
                        <li><a href="./compounds-list?initial=5"> 5</a></li>
                        <li><a href="./compounds-list?initial=6"> 6</a></li>
                        <li><a href="./compounds-list?initial=7"> 7</a></li>
                        <li><a href="./compounds-list?initial=8"> 8</a></li>
                        <li><a href="./compounds-list?initial=9"> 9</a></li>
                        <li><a href="./compounds-list?initial="> All</a></li>
                    </ul>
                </h5>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead class="bg-info" style="color: #FFF;">
                        <tr>
                            <th>Compound ID</th>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>No of Sources</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Compound ID</th>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>No of Sources</th>
                        </tr>
                    </tfoot>
                </table>

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
                url: "inc/compunds_server_processing.php",
                data: function(d) {
                    d.initial = '<?= isset($_GET['initial'])
                        ? $_GET['initial']
                        : '' ?>';
                    console.log( d.initial)
                },
                error: function(error) {
                    console.log(error)
                    // $("#post_list_processing").css("display", "none");
                }
            },
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