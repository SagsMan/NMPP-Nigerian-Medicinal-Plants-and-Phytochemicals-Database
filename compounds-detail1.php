<?php include_once 'inc/config.inc.php';

if (!empty($_GET['compound'])) {
    $link = strip_tags(trim($_GET['compound']));
    if ($compound_props = $AdminTask->Get_Single_Compound($link)) {

        $PAGE_TITLE = $compound_props->compounds_name;
        $URL_NAME = $compound_props->cati_link;
        ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?> </title>
    <?php include_once 'layout/header-props.php'; ?>


    <style>
    table {
        width: 100%
    }

    tr {
        border: 1px solid #000;
        border-collapse: collapse;
    }

    td,
    th {
        color: #000;
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        width: 23%;
        font-size: 18px;
    }

    td {
        border-collapse: collapse;
        padding: 2% 5%;
        word-break: normal;
    }

    h4 {
        /* line-height: 0px; */
    }

    /* .compound-title {

        word-break: break-all;
    } */
    
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
            style="background-image: url(images/compound-list-slider-image-1.jpg); background-size: cover; background-position: center bottom; background-attachment: initial;">
            <div class="container">
                <div class="">
                    <h3><?= $compound_props->compounds_name ?></h3>
                </div>
            </div>
        </section>
        
        
<!--        <section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-autoplay="5500"-->
<!--            data-simulate-touch="true" data-swiper="{&quot;loop&quot;:false}" style="min-height: 30vh;">-->
<!--            <div class="swiper-wrapper text-center" style="min-height: 30vh;">-->
<!--                <div class="swiper-slide" data-slide-bg="images/compound-list-slider-image-3.jpg">-->
<!--                    <div class="swiper-slide-caption" style="padding: 0;">-->
<!--                        <div class="container">-->
<!--                            <div class="row justify-content-md-center">-->
<!--                                <div class="col-md-11 col-lg-10 col-xl-9">-->
<!--                                <div class="page-title">-->
<!--                                    <h3><?= $PAGE_TITLE ?></h3>-->
<!--                                </div>-->
                                    <!--<p style="font-family: 'Poppins', sans-serif;text-align:left;" class="text-bigger slider-text" data-caption-animate="fadeInUp"-->
                                    <!--    data-caption-delay="100" >For New Drugs Discovery.</p>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide" data-slide-bg="images/compound-list-slider-image-4.jpg">-->
<!--                    <div class="swiper-slide-caption" style="padding: 0;">-->
<!--                        <div class="container">-->
<!--                            <div class="row justify-content-md-center">-->
<!--                                <div class="col-md-11 col-lg-10 col-xl-9">-->
<!--                                    <div class="page-title">-->
<!--                                        <h3><?= $PAGE_TITLE ?></h3>-->
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
        
        <section class="section section-50 section-md-75 section-xl-bottom-120">
            <div class="container">


                <div class="row justify-content-xl-center">
                    <div class="col-xl-10 html-content" id="content">


                        <div class="card-body" style="padding:0px">
                            <div class="compound-title">
                                <h5 style="text-align: center; margin: 0px; padding: 0px;color: forestgreen;">
                                    <?= $compound_props->compounds_name ?></h5>
                                <div class="table-responsive" style="margin: 0px;">
                                    <table>
                                        <tr style=" border-left: none;  border-right: none; border-top: none;">
                                            <th>Compound Structure:</th>
                                            <td
                                                style="color: blue; font-weight: bolder; font-family: Arial, Helvetica, sans-serif;">
                                                <div>
                                                    <img src="<?= SITE_URL ?>dashboard/assets/img/compound_img/<?= $compound_props->compound_img ?>"
                                                        width="80%" class="img-responsive" style="margin: 0px;" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style=" border-left: none;  border-right: none; border-top: none;">
                                            <th>Synonyms:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->synonyms ?>
                                            </td>
                                        </tr>
                                        <tr style=" border-left: none;  border-right: none; border-top: none;">
                                            <th>Compound ID:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->compound_code ?>
                                            </td>
                                        </tr>
                                        <tr style=" border-left: none;  border-right: none; border-top: none">
                                            <th>PubChem ID:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->pubchem ?>
                                            </td>
                                        
                                        </tr>
                                        <tr style=" border-left: none;  border-right: none; border-top: none;">
                                            <th>Molecular Formula:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->molecular_formula ?>
                                            </td>
                                        </tr>

                                        <tr style=" border-left: none;  border-right: none; border-top: none">
                                            <th>Canonical SMILES:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->smiles ?>
                                            </td>
                                        </tr>

                                        <tr style=" border-left: none;  border-right: none; border-top: none">
                                            <th>InChIKey:</th>
                                            <td
                                                style="color: black; font-weight: none; font-family: Arial, Helvetica, sans-serif;">
                                                <?= $compound_props->in_chl ?>
                                            </td>
                                        </tr>


                                      <tr
                                            style=" border-left: none;  border-right: none;  border-top: none; border-bottom: none;">
                                            <th>About the compound:</th>
                                            <td> <?= $compound_props->reference_information ?></td>
                                        </tr>
                                       

                                        
  <tr style=" border-left: none;  border-right: none;">
                                            <th>Properties:</th>
                                            <td>
                                                <?= $compound_props->properties ?>
                                            </td>
                                        </tr>
                                         <tr style=" border-left: none;  border-right: none; border-top: none">
                                            <th>Source Species:</th>
                                            <td>
                                               <!-- <?= $compound_props->source_species_information ?> 
                                                <?php foreach ($species as $specy) {?> 
                                                <a href='species-details?specy= <?= $specy->species_link ?>'><?= $specy->species_name ?></a>
                                                <?php }?> -->
                                                                      <?php if (
                            $species = $AdminTask->Get_Species_Of_Compound(
                                $compound_props->id
                            )
                        ) {
                            foreach ($species as $specy) { ?>
                            <a href='species-details?specy= <?= $specy->species_link ?>'><?= $specy->species_name ?></a><br>
                        <?php } } ?> 
                                                
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                    <a href="<?= SITE_URL ?>dashboard/assets/img/compound_sdf_files/<?= $compound_props->sdf_file ?>" download class="btn btn-success" style="border-radius: 50px; background-color: #1c2331;">
    Download SDF
</a>                                    
                    <!-- <p><button class="btn btn-success" style="border-radius: 50px; background-color: #1c2331;" onclick="CreatePDFfromHTML()">Download SDF</button></p>-->
                        </div>
                    </div>
                </div>
        </section>





        <?php include_once 'layout/footer.php'; ?>
    </div>
    <?php include_once 'layout/footer-props.php'; ?>
    <script>
    function CreatePDFfromHTML() {
        var HTML_Width = $(".html-content").width();
        var HTML_Height = $(".html-content").height();
        var top_left_margin = 15;
        var PDF_Width = HTML_Width + (top_left_margin * 2);
        var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;
        var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;
        html2canvas($(".html-content")[0]).then(function(canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width,
                canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4),
                    canvas_image_width, canvas_image_height);
            }
            pdf.save("NMPPDB_<?= $compound_props->compounds_name ?>.pdf");

            var formData = {
                ip_address: "<?= $AdminTask->getIpAddress() ?>",
                country: "<?= $AdminTask->ip_info() ?>",
                state: "<?= $AdminTask->ip_info() ?>",
                action: 'compound_download',
            };
            $.ajax({
                type: "POST",
                url: "inc/ajax-data-submit.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {
                if (data == true) {}
            });

            // $(".html-content").hide();
        });
    }
    </script>

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