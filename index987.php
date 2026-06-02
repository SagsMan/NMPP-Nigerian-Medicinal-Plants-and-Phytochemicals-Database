<?php 
// NMPP-LOCAL-VERIFIED-TEST
include_once 'inc/config.inc.php';
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

<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #28a745" class="swiper mySwiper">
  <div class="swiper-wrapper">
    <!-- Slide 1 -->
    <div class="swiper-slide">
      <img src="images/sliderbg1.jpg" class="slider-bg" alt="Slider Image 1" />
      <div class="slider-overlay"></div>
      <div class="centered-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
              <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                Welcome To Nigerian Medicinal Plants And Phytochemicals Database
              </h2>
              <p class="slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">
                For New Drugs Discovery.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slide 2 -->
    <div class="swiper-slide">
      <img src="images/slider4img.jpg" class="slider-bg" alt="Slider Image 2" />
      <div class="slider-overlay"></div>
      <div class="centered-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
              <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                More Than 500 Plant Species
              </h2>
              <p class="slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">
                Nigerian Medicinal Plants And Phytochemicals Database.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide">
      <img src="images/slidernumber3.jpg" class="slider-bg" alt="Slider Image 3" />
      <div class="slider-overlay"></div>
      <div class="centered-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
              <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                More Than 2000 Phytochemical Compounds
              </h2>
              <p class="slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">
                Nigerian Medicinal Plants And Phytochemicals Database.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="swiper-slide">
      <img src="images/slider4homapage.jpg" class="slider-bg" alt="Slider Image 4" />
      <div class="slider-overlay"></div>
      <div class="centered-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
              <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                For New Drugs Discovery
              </h2>
              <p class="slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">
                Nigerian Medicinal Plants And Phytochemicals Database.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 5 -->
    <div class="swiper-slide">
      <img src="images/sliderlast5.jpg" class="slider-bg" alt="Slider Image 5" />
      <div class="slider-overlay"></div>
      <div class="centered-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 text-center">
              <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">
                Upload Your Compounds To The Database
              </h2>
              <p class="slider-text" data-caption-animate="fadeInUp" data-caption-delay="100">
                Nigerian Medicinal Plants And Phytochemicals Database.
              </p>
              <div class="mt-4">
                <a class="btn btn-primary custom-slider-btn" data-caption-animate="fadeInUp" data-caption-delay="250" href="./plant-species" target="_blank">Click Here To Submit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation buttons -->
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




        <section class="section section-50" id="section-start-journey" style="padding: 80px 0; background-color: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center" id="full-intro">
                    <div class="col-lg-11 col-xl-10 wow fadeInUp" data-wow-duration="1s" data-wow-offset="50">
                        <div class="text-center mb-5">
                            <h2 class="font-weight-bold" style="color: #2c3e50; position: relative; padding-bottom: 15px; font-family: 'Neue Montreal', sans-serif;">
                                Introduction
                                <span style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 80px; height: 4px; background-color: #28a745; border-radius: 2px;"></span>
                            </h2>
                        </div>
                        
                        <div class="intro-content" style="background: #fff; padding: 45px 50px; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.05);">
                            <p style="color: #444; font-size: 1.15rem; line-height: 1.8; margin-bottom: 22px; text-align: justify;">
                            Nigerian Medicinal Plants and Phytochemicals Database (NMPP-DB) is a comprehensive, freely accessible online relational database that serves as a valuable resource for researchers and scientists involved in drug discovery. This database provides detailed information on Nigerian medicinal plants and their associated phytochemical compounds, facilitating the exploration of new therapeutic agents. Nigeria, a country blessed with over 4700 documented plant species, holds immense potential for the discovery of medicinal properties.
                            </p>

                            <p style="color: #444; font-size: 1.15rem; line-height: 1.8; margin-bottom: 22px; text-align: justify;">
                            Currently, the NMPP-DB version 1.0 encompasses data on 500 Nigerian medicinal plants and over 2000 phytochemicals. This wealth of information has been meticulously compiled from a range of reliable sources, including published peer-reviewed journals featuring Nigerian samples, unpublished theses, and original research conducted by our esteemed group of scientists. The database's user-friendly interface empowers users to perform efficient searches using various criteria, such as specific compounds, plant species names, unique identifiers, and more.
                            </p>

                            <p style="color: #444; font-size: 1.15rem; line-height: 1.8; margin-bottom: 22px; text-align: justify;">
                            The NMPP-DB goes beyond serving as a mere reference tool; it is a valuable asset for virtual screening studies aimed at identifying lead compounds for novel drug or insecticide discovery. Researchers can download the entire database, enabling them to conduct comprehensive virtual screenings and expedite the search for promising compounds with therapeutic potential.
                            </p>

                            <p style="color: #444; font-size: 1.15rem; line-height: 1.8; margin-bottom: 22px; text-align: justify;">
                            NMPP-DB stands as a comprehensive and accessible resource that unlocks the potential of Nigerian flora for drug discovery. With its vast collection of information and user-friendly interface, this database serves as a catalyst for scientific advancements, fostering innovation, and furthering the exploration of nature's healing properties.
                            </p>

                            <p style="color: #444; font-size: 1.15rem; line-height: 1.8; margin-bottom: 35px; text-align: justify;">
                            This groundbreaking database is the result of collaborative efforts between a team of esteemed scientists hailing from prestigious institutions, including Kano University of Science and Technology, Bayero University Kano, Sa’adatu Rimi University Kano, Northwest University Kano, Usman Danfodiyo University Sokoto, and Intellisense Technology. 
                            </p>

                            <div class="citation-box" style="background-color: #f1f8f5; border-left: 5px solid #28a745; padding: 30px; border-radius: 0 10px 10px 0; margin-top: 30px;">
                                <h4 class="h4 font-weight-bold mb-4" style="color: #1e7e34; font-family: 'Neue Montreal', sans-serif;">To cite, please reference:</h4>
                                <ul style="list-style: none; padding-left: 0; margin-bottom: 0;">
                                    <li style="position: relative; padding-left: 35px; margin-bottom: 18px; color: #555; font-size: 1.05rem; line-height: 1.6;">
                                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: #28a745; font-size: 1.2rem; font-style: normal;">✅</i> 
                                        Murtala Muhammad et al. <b>The NMPPDB: A Pioneering Resource for Medicinal Plant Research and Molecular Analysis in Nigeria...</b>
                                    </li>
                                    <li style="position: relative; padding-left: 35px; margin-bottom: 18px; color: #555; font-size: 1.05rem; line-height: 1.6;">
                                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: #28a745; font-size: 1.2rem; font-style: normal;">✅</i> 
                                        Murtala Muhammad et al. <b>A New Horizon in Medicinal Plant Research: Introduction to the Nigerian Medicinal and Phytochemical Database and its Molecular Docking Capabilities...</b>
                                    </li>
                                    <li style="position: relative; padding-left: 35px; color: #555; font-size: 1.05rem; line-height: 1.6;">
                                        <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 4px; color: #28a745; font-size: 1.2rem; font-style: normal;">✅</i> 
                                        Murtala Muhammad et al. <b>NMPPDB: Bridging Traditional Knowledge and Modern Science in Nigerian Medicinal Plant Research...</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
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

  <!-- Enhanced Slider Styles -->
  <style>
    .swiper {
      width: 100%;
      height: auto;
      padding-bottom: 50px; /* Space for the dots below the image */
      background-color: #f8f9fa; /* Seamless transition to the next section */
    }

    .swiper-slide {
      text-align: center;
      background: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
      height: 65vh; /* Medium height */
      min-height: 550px;
      max-height: 700px;
    }

    .swiper-slide img.slider-bg {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      transform: scale(1.05);
      transition: transform 10s ease;
    }
    
    .swiper-slide-active img.slider-bg {
      transform: scale(1);
    }

    .slider-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.7) 100%);
      z-index: 2;
    }

    .centered-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 3;
      color: #fff;
      width: 100%;
      padding: 0 15px;
    }

    .centered-text h2.slider-header {
      font-family: 'Neue Montreal', sans-serif;
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.6);
      color: #fff;
    }

    .centered-text p.slider-text {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      font-weight: 400; /* Increased from 300 to 400 for better general readability */
      margin-bottom: 0; /* Remove bottom margin to prevent text from shifting up */
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
      color: #f8f9fa;
    }

    .custom-slider-btn {
      border-radius: 50px;
      padding: 12px 35px;
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
      font-size: 1.1rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
      background-color: #28a745;
      border-color: #28a745;
      color: #fff !important;
      text-decoration: none;
      display: inline-block;
    }

    .custom-slider-btn:hover {
      background-color: #218838;
      border-color: #1e7e34;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      color: #fff !important;
      text-decoration: none;
    }

    /* Move pagination dots below the images */
    .swiper-pagination {
      bottom: 10px !important;
    }
    
    .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: #28a745;
      opacity: 0.4;
    }
    
    .swiper-pagination-bullet-active {
      background-color: #28a745;
      opacity: 1;
    }

    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 66px; /* Moved slightly up so it stays inside the image */
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

    /* Media queries for responsiveness */
    @media screen and (max-width: 992px) {
      .centered-text h2.slider-header { font-size: 2.8rem; }
      .centered-text p.slider-text { font-size: 1.2rem; }
      .swiper-slide { height: 55vh; min-height: 450px; }
    }

    @media screen and (max-width: 768px) {
      .swiper-slide { height: 50vh; min-height: 400px; }
      .centered-text h2.slider-header { font-size: 2.4rem; margin-bottom: 1rem; }
      .centered-text p.slider-text { font-size: 1.1rem; margin-bottom: 0; font-weight: 400; }
      .custom-slider-btn { padding: 10px 25px; font-size: 1rem; }
    }
    
    @media screen and (max-width: 480px) {
      .swiper-slide { height: 45vh; min-height: 350px; }
      .centered-text h2.slider-header { font-size: 2rem; margin-bottom: 0.8rem; line-height: 1.3; }
      .centered-text p.slider-text { font-size: 1.05rem; font-weight: 500; margin-bottom: 0; }
    }
  </style>

</html>