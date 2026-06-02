<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'Home';
$URL_NAME = 'Home';
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?= $PAGE_TITLE  ?> </title>
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

<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="images/sliderbg1.jpg" />
        <div class="centered-text">
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
    <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="images/slider4img.jpg" />
        <div class="centered-text">
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
    <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="images/slidernumber3.jpg" />
        <div class="centered-text"> <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        More Than 2000 Phytochemical Compounds</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                   
                                </div>
                            </div></div>
      </div>
    </div>
     <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="images/slider4homapage.jpg" />
        <div class="centered-text">                            <div class="row justify-content-md-center">
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
                            </div></div>
      </div>
    </div>
         <div class="swiper-slide">
      <div class="swiper-zoom-container">
        <img src="images/sliderlast5.jpg" />
        <div class="centered-text">
              <div class="row justify-content-md-center">
                                <div class="col-md-11 col-lg-10 col-xl-9">
                                    <h2 style="font-family: 'Neue Montreal';" class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                                        Upload Your Compounds To The Database</h2>
                                    <p style="font-family: 'Poppins', sans-serif;" class="text-bigger slider-text" data-caption-animate="fadeInUp"
                                        data-caption-delay="100">Nigerian Medicinal Plants And Phytochemicals Database.
                                    </p>
                                    <div class="group-xl-responsive"><a class="button button-xl button-primary-contrast" style="border-radius: 60px;"
                                            data-caption-animate="fadeInUp" data-caption-delay="250"
                                            href="./plant-species" target="_blank">Click Here To Submit</a></div>
                                </div>
                            </div>
        </div>
      </div>
    </div>
    <!-- Repeat for other slides -->
  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <div class="swiper-pagination"></div>
  <div class="autoplay-progress">
    <svg viewBox="0 0 48 48">
      <circle cx="24" cy="24" r="20"></circle>
    </svg>
    <span></span>
  </div>
</div>




        <section class="section section-30"
            id="section-start-journey" >
            <div class="container">
                <div class="row row-40 row-md-60 align-items-lg-end justify-content-lg-center" id="full-intro">
                    <div class="col-md-12 wow fadeInLeftSmall" data-wow-duration="0s" data-wow-offset="0">
                        <p class="h3" >Introduction</p>
                        <p style=" color: #000000a3; font-size: 18px; margin-top: 12px;">
                        Nigerian Medicinal Plants and Phytochemicals Database (NMPP-DB) is a comprehensive, freely accessible online relational database that serves as a valuable resource for researchers and scientists involved in drug discovery. This database provides detailed information on Nigerian medicinal plants and their associated phytochemical compounds, facilitating the exploration of new therapeutic agents. Nigeria, a country blessed with over 4700 documented plant species, holds immense potential for the discovery of medicinal properties.
                        </p>

                        <p style=" color: #000000a3; font-size: 18px;">
                        Currently, the NMPP-DB version 1.0 encompasses data on 500 Nigerian medicinal plants and over 2000 phytochemicals. This wealth of information has been meticulously compiled from a range of reliable sources, including published peer-reviewed journals featuring Nigerian samples, unpublished theses, and original research conducted by our esteemed group of scientists. The database's user-friendly interface empowers users to perform efficient searches using various criteria, such as specific compounds, plant species names, unique identifiers, and more.
                        </p>
                        <p style=" color: #000000a3; font-size: 18px;">
                        The NMPP-DB goes beyond serving as a mere reference tool; it is a valuable asset for virtual screening studies aimed at identifying lead compounds for novel drug or insecticide discovery. Researchers can download the entire database, enabling them to conduct comprehensive virtual screenings and expedite the search for promising compounds with therapeutic potential.
                        </p>
                        <p style=" color: #000000a3; font-size: 18px;">
                        NMPP-DB stands as a comprehensive and accessible resource that unlocks the potential of Nigerian flora for drug discovery. With its vast collection of information and user-friendly interface, this database serves as a catalyst for scientific advancements, fostering innovation, and furthering the exploration of nature's healing properties.
                        </p>
                        <p style=" color: #000000a3; font-size: 18px;">
                        This groundbreaking database is the result of collaborative efforts between a team of esteemed scientists hailing from prestigious institutions, including Kano University of Science and Technology, Bayero University Kano, Sa’adatu Rimi University kano, Northwest University Kano, Usman Danfodiyo University Sokoto, and Intellisense Technology. 
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
                    </div>

                </div>
            </div>
        </section>

        <?php include_once 'layout/footer.php'; ?>
    </div>
    <?php include_once 'layout/footer-props.php'; ?>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
   <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>
</body>

 <!-- Demo styles -->
  <style>
   
  
   .swiper {
  width: auto;
  height: 500px;
}

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    
    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: var(--swiper-theme-color);
      fill: none;
      stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }
    
.centered-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 3vw; /* Responsive font size using vw (viewport width) */
  text-align: center;
}

/* Media query for adjusting font size on smaller screens */
@media screen and (max-width: 768px) {
  .centered-text {
    font-size: 5vw; /* Adjust font size for smaller screens */
  }
}


  </style>

</html>