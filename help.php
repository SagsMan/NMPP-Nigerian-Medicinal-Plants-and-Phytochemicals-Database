<?php include_once 'inc/config.inc.php';
$PAGE_TITLE = 'HELP';
$URL_NAME = 'Help';
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
    .image-with-shadow {
        max-width: 100%; /* Ensure the image doesn't exceed its original size */
        display: inline-block; /* Display the image as an inline-block element */
        margin-right: 20px; /* Add some right margin to create space between the image and text (adjust as needed) */
        box-shadow: 0px 0px 4px rgba(0, 0, 10, 0.4); /* Add a box shadow to the image */
        vertical-align: middle; /* Vertically align the image within its container */
        border-radius:4px;
    }

    /* Apply the 60% width on desktop screens */
    @media (min-width: 768px) {
        .image-with-shadow {
            width: 70%; /* Set the width to 60% on screens wider than 768px (tablets and desktops) */
        }
    }
    
    .text_class{color: #000000a3; font-size: 18px; margin: 12px 0 0 0; padding:24px 24px 24px 40px; }
    
            .toggle-container {
            background-color: #fff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin: 20px;
            overflow: hidden;
        }

        .toggle-title {
            cursor: pointer;
            padding: 15px 20px;
            font-weight: bold;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:#008a500d;
        }

        .toggle-arrow {
            transition: transform 0.3s;
        }

        .toggle-content {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .toggle-container.open .toggle-arrow {
            transform: rotate(90deg);
        }

        .toggle-container.open .toggle-content {
            max-height: 15000px;
            transition: max-height 0.3s ease-in;
        }
        
        
        .content-inside{ padding :30px 10px 30px 10px;}
        
    </style>
    
</head>

<body>
    <?php include_once 'layout/preloader.php'; ?>

    <div class="page">

        <?php include_once 'layout/header.php'; ?>

        <div class="divider-spectrum"></div>

        <section
            class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap"
            style="background-image: url(images/keyboard.jpg); background-size: cover; background-position: center center; background-attachment: initial;">
            <div class="container">
                <div class="page-title">
                    <h2><?= $PAGE_TITLE ?></h2>
                </div>
            </div>
        </section>
        

        <section class="section section-50 section-md-bottom-75 section-xl-bottom-100 bg-whisper novi-background">
        
    
        <h4 style="margin-left:22px">Helps with Compound and Species</h4>        
            <!-- Toggle for Compounds -->
    <div class="toggle-container" id="compoundsToggle">
        <div class="toggle-title" onclick="toggle('compoundsToggle')">
            <h6>Compounds</h6>
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        
                <!--///////////////////COMPOUNDS////////////////////-->
                    
            <div class="content-inside">
                <h4 class="h4"><br>COMPOUND SEARCH</h4>
                <p style="color: #000000a3; font-size: 18px; margin-top: 12px;">
                in the search bar, select "compound" from the dropdown menu,and then search your desired compound using various identifiers like compound names, synonyms, SMILES,NMPC-ID,Pubchem ID,InChlkey, or molecular formula to find the compound of interest.</p><br>
                <img src="images/search_arrow.png" alt="search_arrow" class="image-with-shadow"><br><br>
                <img src="images/select_compound.png" alt="search_arrow" class="image-with-shadow"><br><br>
                <img src="images/search_result_compound.png" alt="search_arrow" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                     <h4 class="h4">COMPOUND SEARCH RESULT</h4>
                    <li>Field (1) displays the names of matching queries. For more details, simply click on the names presented in the field.</li>
                    <li>Field (2) display the synonyms of the corresponding compound. </li>
                    <li>Field (3) displays the Nigerian Medicinal Plants and Phytochemicals Database compound ID (NMPC-ID) of the corresponding compound.</li>
                    <li>Field (4) displays PubChem ID of the corresponding compound or synonym you've queried.</li>
                    <li>Field (5) display the Molecular formula of the corresponding compound.</li>
                    <li>Field (6) reveals the number of distinct species that contain the given molecule or synonym. For more details, simply click on the numbers shown in the field.</li>
                </ol>
                
                
                <br><h4 class="h4">COMPOUNDS LIST</h4>
                <img src="images/compound_lists.png" alt="compound_lists" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                    <li>Field (1): by clicking on a letter (A-Z) or numbers (1-9), compounds with names that begin with the chosen letter or number will be displayed in the list field.</li>
                    <li> Field (2): displayed compound names in both alphabetical and numerical order.</li>
                    <li>Field (3): display the synonyms of the corresponding compounds.</li>
                    <li>Field (4): displays the Nigerian Medicinal Plants and Phytochemicals Database compound ID (NMPC-ID) of the corresponding compounds </li>
                    <li>Field (5) displays PubChem ID of the corresponding compounds.</li>
                    <li>Field (6) displays the Molecular formula of the corresponding compounds</li>
                </ol>
                
                
                <br><h4 class="h4"><br>COMPOUNDS DETAILS</h4>
                <img src="images/compound_details.png" alt="compound_lists" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                    <li>In Field (1), the chemical structure of the corresponding compound is displayed at the top of the compound details</li>
                    <li>Field (2) is followed by the identifiers: synonyms, NMPC-ID, PubChem ID, molecular formula, canonical SMILES, and InChIkey.</li>
                    <li>Field (3) displays the properties of the compound computed by PubChem.</li>
                    <li>Field (4) shows the names of distinct species that contain the phytochemical. For more details, simply click on the Plant species name(s).</li>
                    <li>Field (5) provides a brief description of the compound along with source references.</li>
                    <li>Field (6) provides the option to download the 3D-SDF file for the corresponding compound.</li>
                </ol>

            </div>
        
        
            
        </div>
    </div>

    <!-- Toggle for Species -->
    <div class="toggle-container" id="speciesToggle">
        <div class="toggle-title" onclick="toggle('speciesToggle')">
            <h6>Species</h6>
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
            
            
            
                    <!--///////////////////SPECIES////////////////////-->
            
            <div class="content-inside">
                <h4 class="h4">Plant Search</h4>
                <p style="color: #000000a3; font-size: 18px; margin-top: 12px;">
                In the search bar, select "Species" from the dropdown menu, and then search your desired Plant species using various identifiers like Species Name, Species Family, Common Name, Local Name and Nigerian Medicinal Plants and Phytochemicals Database compound ID (NMP-ID.</p><br>
                <img src="images/search_arrow.png" alt="search_arrow" class="image-with-shadow"><br><br>
                <img src="images/select_species.png" alt="search_arrow" class="image-with-shadow"><br><br>
                <img src="images/search_result_species.png" alt="search_arrow" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                    <li>Field (1) displays the plant Species names of matching queries. For additional details, click on the names listed in the field.</li>
                    <li>Field (2): Displays the respective families of the corresponding species.</li>
                    <li>Field (3): Presents the common names of the corresponding plant Species.</li>
                    <li>Field (4): Showcases the local names of the corresponding species in Hausa, Yoruba, and Igbo.</li>
                    <li>Field (5): Indicates the number of compounds contained within the corresponding plant species.</li>
                    <li>Field (6): Displays the Nigerian Medicinal Plants and Phytochemicals Database Plant Species ID (NMP-ID) for the corresponding plant species.</li>
                    
                </ol>
                
                
                <br><h4 class="h4">PLANT SPECIES LIST</h4>
                <img src="images/species_lists.png" alt="compound_lists" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                    <li>Field (1): By clicking on a letter (A-Z), plant species with names starting with the selected letter will appear in the list field.</li>
                    <li> Field (2): Plant species names are displayed in alphabetical order. For additional details, click on the names listed in the field.</li>
                    <li>Field (3): Displays the family name of the corresponding plant species.</li>
                    <li>Field (4): Shows the common name of the corresponding plant species.</li>
                    <li>Field (5): Presents the local names of the corresponding plant species in Hausa, Yoruba, and Igbo.</li>
                    <li>Field (6): Features the Nigerian Medicinal Plants and Phytochemicals Database Plant Species ID (NMP-ID) for the respective plant species.</li>
                    <li>Field (7): Reveals the number of compounds identified within the associated plant species. For more information click on the numbers provided in the field.</li>
                </ol>
                
                
                <br><h4 class="h4">SPECIES DETAILS</h4>
                <img src="images/species_details.png" alt="compound_lists" class="image-with-shadow"><br>
                 <!--<p style="color: #000000a3; font-size: 18px; margin-top: 12px;">-->
                 <!--    Download Excel template: <a href="https://nmppdb.com.ng/NMPP-DATABASE-New-Data-Submission-File.xlsx">Link</a>-->
                 <!--</p>-->
                <ol class="text_class image-with-shadow">
                    <li>Field (1): offers a concise description of the plant species, accompanied by source references.</li>
                    <li>Field (2): displays the identified phytochemicals associated with the respective plant species.</li>
                    <li>Field (3): presents the reference(s) for the compounds identified in the corresponding plant species.</li>
                    
                </ol>

            </div>
            
            
            
        </div>
    </div>
    
    <!---------------------------------------------------------------------------------------->
    <!-------------------------------FAQ FAQ FAQ FAQ FAQ FAQ-------------------------------->
    <!----------------------------------------------------------------------------------------->
    
    <h4 style="margin-left:22px;">Frequently Asked Questions</h4>
    
        <!-- Toggle 1 -->
    <div class="toggle-container" id="toogle1">
        <div class="toggle-title" onclick="toggle('toogle1')">
           How can I contribute data to NMPPDB?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
            <b></b><p>You can find detailed information on the data submission pipeline on the data contribution page.</p>
        </div>
    </div>

    <!-- Toggle 2 -->
    <div class="toggle-container" id="toogle2">
        <div class="toggle-title" onclick="toggle('toogle2')">
            How many compounds are currently included in NMPPDB?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>The database is constantly being updated. The most recent information is available on the homepage page.</p>
        </div>
    </div>
    
    
        <!-- Toggle 3 -->
    <div class="toggle-container" id="toogle3">
        <div class="toggle-title" onclick="toggle('toogle3')">
            How can I use the Downloads?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>In order to use NMPPDB compounds for virtual screening, you can proceed as follows:</p>
        <p>1. Download the files from the downloads page.</p>
        <p>2. You may prefer to download the uploaded SMILES files and prepare your compound library, using a software of your choice or you can directly download and use the prepared uploaded SDF files.</p>
    </div>
    </div>
    
    
        <!-- Toggle 4 -->
    <div class="toggle-container" id="toogle4">
        <div class="toggle-title" onclick="toggle('toogle4')">
           Which browsers can be used?
            <span class="toggle-arrow">▶️</span>
        </div>
        <div class="toggle-content">
        <p>NMPPDB can be used across all modern browsers, including IE9, Firefox, Safari, Opera and Chrome, with multiple operating systems, including Windows, Mac, Linux, as well as iPhone, Android and other mobile devices.</p>
        </div>
    </div>
    
    
       

    <script>
        function toggle(toggleId) {
            const toggleContainer = document.getElementById(toggleId);
            toggleContainer.classList.toggle('open');
        }
    </script>    
            

            
            
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