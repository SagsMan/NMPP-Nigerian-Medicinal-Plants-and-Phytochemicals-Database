<?php include_once 'inc/config.inc.php';

if (!empty($_GET['specy'])) {
    $link = strip_tags(trim($_GET['specy']));
    if ($species_props = $AdminTask->Get_Single_Species($link)) {

        $PAGE_TITLE = 'Phytochemicals Of: ' . $species_props->species_name;
        $URL_NAME = $species_props->species_link;
        ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?> </title>
    <?php include_once 'layout/header-props.php'; ?>
        
    <style>
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
                    <h4><?= $PAGE_TITLE ?></h4>
                </div>
            </div>
        </section>
        
        
                
        <!--<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-autoplay="5500"-->
        <!--    data-simulate-touch="true" data-swiper="{&quot;loop&quot;:false}" style="min-height: 30vh;">-->
        <!--    <div class="swiper-wrapper text-center" style="min-height: 30vh;">-->
        <!--        <div class="swiper-slide" data-slide-bg="images/compound-list-slider-image-2.jpg">-->
        <!--            <div class="swiper-slide-caption" style="padding: 0;">-->
        <!--                <div class="container">-->
        <!--                    <div class="row justify-content-md-center">-->
        <!--                        <div class="col-md-11 col-lg-10 col-xl-9">-->
        <!--                        <div class="page-title">-->
        <!--                            <h4><?= $PAGE_TITLE ?></h4>-->
        <!--                        </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;text-align:left;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100" >For New Drugs Discovery.</p>-->
                                    
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="swiper-slide" data-slide-bg="images/plant-species-slider-image-6.jpg">-->
        <!--            <div class="swiper-slide-caption" style="padding: 0;">-->
        <!--                <div class="container">-->
        <!--                    <div class="row justify-content-md-center">-->
        <!--                        <div class="col-md-11 col-lg-10 col-xl-9">-->
        <!--                            <div class="page-title">-->
        <!--                                <h4><?= $PAGE_TITLE ?></h4>-->
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
        
        <section class="section section-50 section-md-75 section-xl-bottom-120">
            <div class="container-fluid">


                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead class="bg-info" style="color: #FFF;">
                        <tr>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Compound ID</th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>Sources</th>


                        </tr>
                    </thead>

                    <tbody>

                        <?php if (
                            $compounds = $AdminTask->Get_Compounds_Of_Species(
                                $species_props->id
                            )
                        ) {
                            foreach ($compounds as $compound) { ?>
                        <tr>
                            <td><a
                                    href='compounds-detail?compound=<?= $compound->cati_link ?>'><?= $compound->compounds_name ?></a>
                            </td>
                            <td><?= $compound->synonyms ?></td>
                            <td><?= $compound->compound_code ?></td>
                            <td><?= $compound->pubchem ?></td>
                            <td><?= $compound->molecular_formula ?></td>
                            <td><a href='species-with-particular-compound?comp=<?= $compound->id ?>'><?= $AdminTask->Get_Count_Nums_Of_Species_Have_This_Compunds(
    $compound->id
)->totalCount ?></a></td>


                        </tr>


                        <?php }
                        } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Compound Name</th>
                            <th>Synonyms </th>
                            <th>Compound ID</th>
                            <th>Pubchem ID </th>
                            <th>Molecular Formula</th>
                            <th>Sources</th>
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
<?php
    } else {
        $UserAuth->redirect('./plant-species');
    }
} else {
    $UserAuth->redirect('./plant-species');
}
?>