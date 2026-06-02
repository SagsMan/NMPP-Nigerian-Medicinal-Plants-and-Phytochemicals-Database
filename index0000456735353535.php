<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'Home';
$URL_NAME = 'Home';
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE . ' | ' . SITE_TITLE ?> </title>
    <?php include_once 'layout/header-props.php'; ?>
    <style>
    #full-intro p {
        text-align: justify;
    }
    </style>
</head>

<body>
    <?php include_once 'layout/preloader.php'; ?>

    <div class="page">

        <?php include_once 'layout/header.php'; ?>

        <section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-autoplay="5500"
            data-simulate-touch="true" data-swiper="{&quot;loop&quot;:false}">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" data-slide-bg="images/sliderbg1.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';text-align:left;" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        Welcome To Nigerian Medicinal Plants And Phytochemicals Database</h2>
                                    <p style="font-family: 'Poppins', sans-serif;text-align:left;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100" >For New Drugs Discovery.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slider4img.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        More Than 500 Plant Species</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                    <!--<div class="group-xl-responsive"><a class="button button-xl button-primary-contrast"-->
                                    <!--        data-caption-animate="fadeInUp" data-caption-delay="250"-->
                                    <!--        href="./plant-species" target="_blank">Get Plant Species now</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slidernumber3.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        More Than 2000 Phytochemical Compounds</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/slider4homapage.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        For New Drugs Discovery</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                    <!--<div class="group-xl-responsive"><a class="button button-xl button-primary-contrast"-->
                                    <!--        data-caption-animate="fadeInUp" data-caption-delay="250"-->
                                    <!--        href="./plant-species" target="_blank">Get Plant Species now</a></div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="images/sliderlast5.jpg">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        Upload Your Compounds To The Database</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                    <div class="group-xl-responsive"><a class="button button-xl button-primary-contrast" style="border-radius: 60px;"
                                            data-caption-animate="fadeInUp" data-caption-delay="250"
                                            href="./submit" target="_blank">Contribute Data</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar"></div>
            <div class="swiper-nav-wrap">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section class="section section-30"
            id="section-start-journey" >
            <div class="container">
                <div class="row row-40 row-md-60 align-items-lg-end justify-content-lg-center" id="full-intro">
                    <div class="col-md-12 wow fadeInLeftSmall" data-wow-duration="1s" data-wow-offset="200">
                        <p class="h3" >Introduction</p>
                        <p style=" color: #000000a3; font-size: 18px; margin-top: 12px;">
                        Nigerian Medicinal Plants and Phytochemicals Database (NMPP-DB) is a comprehensive, freely accessible online relational database that serves as a valuable resource for researchers and scientists involved in drug discovery. This database provides detailed information on Nigerian medicinal plants and their associated phytochemical compounds, facilitating the exploration of new therapeutic agents. Nigeria, a country blessed with over 6000 documented plant species, holds immense potential for the discovery of medicinal properties.
                        </p>

                        <p style=" color: #000000a3; font-size: 18px;">
                        Currently, the NMPP-DB version (1) encompasses data on more than 500 Nigerian medicinal plants and over 2000 phytochemicals. This wealth of information has been meticulously compiled from a range of reliable sources, including published peer-reviewed journals featuring Nigerian samples, unpublished theses, and original research conducted by our esteemed group of scientists. The database's user-friendly interface empowers users to perform efficient searches using various criteria, such as specific compounds, plant species names, unique identifiers, and more.
                        </p>
                        <p style=" color: #000000a3; font-size: 18px;">
                        The NMPP-DB goes beyond serving as a mere reference tool; it is a valuable asset for virtual screening studies aimed at identifying lead compounds for novel drug or insecticide discovery. Researchers can download the entire database, enabling them to conduct comprehensive virtual screenings and expedite the search for promising compounds with therapeutic potential.
                        </p>
                        <p style=" color: #000000a3; font-size: 18px;">
                        NMPP-DB stands as a comprehensive and accessible resource that unlocks the potential of Nigerian flora for drug discovery. With its vast collection of information and user-friendly interface, this database serves as a catalyst for scientific advancements, fostering innovation, and furthering the exploration of nature's healing properties.
                        </p>
                         <h6 class="h3">To cite please reference: </h6>
                        <ul style="padding-left: 20px; color: #000000a3; font-size: 18px;">
                            <li 
                            style="list-style-type: '✅'; padding-inline-start: 1ch;">Murtala Muhammad Et al. <b> The NMPPDB: A Pioneering Resource for Medicinal Plant Research and Molecular Analysis in Nigeria….</b></li>
                            <li
                            style="list-style-type: '✅'; padding-inline-start: 1ch;" class="mt-2"> Murtala Muhammad Et al. <b> A New Horizon in Medicinal Plant Research: Introduction to the Nigerian Medicinal and Phytochemical Database and its Molecular Docking Capabilities…</b></li>
                            <li 
                            style="list-style-type: '✅'; padding-inline-start: 1ch;" class="mt-2"> Murtala Muhammad Et al.<b> NMPPDB: Bridging Traditional Knowledge and Modern Science in Nigerian Medicinal Plant Research, ..</b></li>
                        </ul>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <?php include_once 'layout/footer.php'; ?>
    </div>
    <?php include_once 'layout/footer-props.php'; ?>

</body>

</html>