<head>
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<style>
 iframe.VIpgJd-ZVi9od-ORHb-OEVmcd.skiptranslate {
        display: none !important;
        visibility:hidden !important;
    }
    body {
        top: 0px !important;
    }
.dropdown-menu {
    display: none;
    position: absolute;
    background: #fff;
    list-style: none;
    padding: 10px 0;
    border-radius: 5px;
    right:2px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown-menu li {
    
}

.dropdown-menu li a {
    text-decoration: none;
    color: #333;
    padding: 15px 15px;
    display: block;
}

.dropdown-menu li a:hover {
    background: #f0f0f0;
}

a{
    color: #3aa3ff;
}


footer img{
    height: 80px;
}

@media (min-width: 420px){
    footer img{
        height: 120px;
    }
}

.rd-navbar-fixed .rd-navbar-brand {
    top: 9px;
}

.header-logo img {
        height: 55px;
        width: auto;
}

@media (min-width: 1200px) {
    
    .rd-navbar-fixed .rd-navbar-brand {
    top: 0;
}

    .header-logo img {
        height: 85px;
        width: auto;
    }
}

@media (min-width: 995px) {


}
#languageSelect{
    /*float:right;*/
    
    width:20%;
}
.language-dropdown ul{
    max-height: 80vh;
    overflow-y: scroll;
}
.select{
    display:flex;
    justify-content:flex-end;
    padding:10px 20px;
}
   .language-container {
            position: relative;
            display: inline-block;
            left:25px;
        }

        /* Globe icon */
        .language-icon {
            font-size: 20px;
            cursor: pointer;
            padding: 8px;
            border-radius: 5px;
            background: #f1f1f1;
        }

        /* Dropdown menu */
        .language-dropdown {
            position: absolute;
            top: 40px;
            right: 0;
            background: white;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            width: 200px;
            z-index: 10;
        }

        /* Language options */
        .language-dropdown ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .language-dropdown li {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        .language-dropdown li:last-child {
            border-bottom: none;
        }

        .language-dropdown li:hover {
            background: #f1f1f1;
        }
@media(max-width:767px){
    .language-dropdown {
        left:15px;
    }
    .language-icon{
        margin-left:10px;
    }
}
</style>

<header class="page-head">
    
<style>
    
</style>

    <script>
    window.addEventListener('load', function () {
    setTimeout(function () {
        var googleTranslateBanner = document.querySelector('.goog-te-banner-frame');
        if (googleTranslateBanner) {
            googleTranslateBanner.style.display = 'none';
        }

        // Hide the body padding added by Google Translate
        var body = document.querySelector('body');
        if (body) {
            body.style.top = '0px';
        }
    }, 1000); // Reduced timeout to 1 second
});

        function toggleDropdown() {
            var dropdown = document.getElementById("languageOptions");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        // Close dropdown when clicking outside
        document.addEventListener("click", function(event) {
            var container = document.querySelector(".language-container");
            if (!container.contains(event.target)) {
                document.getElementById("languageOptions").style.display = "none";
            }
        });

        function doGTranslate(value) {
            console.log("Translating to: " + value); // Replace with actual translation logic
            document.getElementById("languageOptions").style.display = "none"; // Hide after selection
        }
    </script>

    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true"
            data-xxl-stick-up="true" data-lg-stick-up-offset="60px" data-xl-stick-up-offset="60px"
            data-xxl-stick-up-offset="60px">
            
            <div class="rd-navbar-inner">
                <div class="rd-navbar-panel">
                    <button class="rd-navbar-toggle" data-custom-toggle=".rd-navbar-nav-wrap"
                        data-custom-toggle-disable-on-blur="true"><span></span></button>
                    <a class="rd-navbar-brand header-logo" href="<?= SITE_URL ?>index.php"><img src="images/nmppdb-logo.jpg" alt=""
                            width="150" height="22" /></a>
                </div>
                <div class="rd-navbar-group rd-navbar-search-wrap">
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-nav-inner">
                            <div class="rd-navbar-search">
                                <form class="rd-search" action="search-results" method="GET"
                                    data-search-live="rd-search-results-live">
                                    <div class="form-wrap">
                                        <div class="input-group mb-3">
                                            <div class="input-group-addon">
                                                <select class="form-select" name='type'>
                                                    <option value='1'>Species</option>
                                                    <option value='2'>Compounds</option>
                                                </select>
                                            </div>
                                            <input type="text" class="form-control" id="rd-search-form-input" name="s"
                                                aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <button class="rd-search-submit" type="submit"></button>
                                </form>
                                <button class="rd-navbar-search-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap"></button>
                            </div>
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item <?= $URL_NAME == 'Home'
                                    ? 'active'
                                    : '' ?>"><a class="rd-nav-link" href="<?= SITE_URL ?>index.php">Home</a>
                                </li>
                                <li class="rd-nav-item <?= $URL_NAME ==
                                'plant-species' || ($URL_NAME =='search-results' && $_GET['type']=='1')
                                    ? 'active'
                                    : '' ?>"><a class="rd-nav-link" href="./plant-species">Plant Species</a>
                                </li>

                                <li class="rd-nav-item <?= $URL_NAME ==
                                'compounds-list' || ($URL_NAME =='search-results' && $_GET['type']=='2')
                                    ? 'active'
                                    : '' ?>"><a class="rd-nav-link" href="compounds-list">Compounds</a>
                                </li>

                                <li class="rd-nav-item"><a class="rd-nav-link" href="download">Download</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="submit">Contribute Data</a>
                                </li>
                              
                              <li class="rd-nav-item dropdown">
    <a class="rd-nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">More</a>
    <ul class="dropdown-menu" id="dropdown-menu">
        <li><a class="dropdown-item" href="help">Help</a></li>
        <li><a class="dropdown-item" href="journals.php">Journals</a></li>
         <li><a class="dropdown-item" href="contact-us">Contact Us</a></li>
        <li class="dropdown-submenu">
            
            <ul class="dropdown-menu" id="journals-menu" style="display: none;">
                
          
            </ul>
        </li>

    </ul>
</li>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const journalToggle = document.getElementById("toggle-journals");
    const journalsMenu = document.getElementById("journals-menu");

    if (journalToggle && journalsMenu) {
        journalToggle.addEventListener("click", function (e) {
            e.preventDefault();
            journalsMenu.style.display = journalsMenu.style.display === "none" ? "block" : "none";
        });

        // Close when clicking outside
        document.addEventListener("click", function (e) {
            if (!journalToggle.contains(e.target) && !journalsMenu.contains(e.target)) {
                journalsMenu.style.display = "none";
            }
        });
    }
});
</script>
                               

   <div class="language-container">
       <img src="layout/trans.png" class="language-icon" width="35px" onclick="toggleDropdown()">&nbsp;&nbsp;&nbsp;
        <div class="language-dropdown" id="languageOptions">
            <ul>
              <li onclick="doGTranslate('en|af')">Afrikaans</li>
<li onclick="doGTranslate('en|sq')">Albanian</li>
<li onclick="doGTranslate('en|ar')">Arabic</li>
<li onclick="doGTranslate('en|hy')">Armenian</li>
<li onclick="doGTranslate('en|az')">Azerbaijani</li>
<li onclick="doGTranslate('en|eu')">Basque</li>
<li onclick="doGTranslate('en|be')">Belarusian</li>
<li onclick="doGTranslate('en|bg')">Bulgarian</li>
<li onclick="doGTranslate('en|ca')">Catalan</li>
<li onclick="doGTranslate('en|zh-CN')">Chinese (Simplified)</li>
<li onclick="doGTranslate('en|zh-TW')">Chinese (Traditional)</li>
<li onclick="doGTranslate('en|hr')">Croatian</li>
<li onclick="doGTranslate('en|cs')">Czech</li>
<li onclick="doGTranslate('en|da')">Danish</li>
<li onclick="doGTranslate('en|nl')">Dutch</li>
<li onclick="doGTranslate('en|en')">English</li>
<li onclick="doGTranslate('en|et')">Estonian</li>
<li onclick="doGTranslate('en|tl')">Filipino</li>
<li onclick="doGTranslate('en|fi')">Finnish</li>
<li onclick="doGTranslate('en|fr')">French</li>
<li onclick="doGTranslate('en|gl')">Galician</li>
<li onclick="doGTranslate('en|ka')">Georgian</li>
<li onclick="doGTranslate('en|de')">German</li>
<li onclick="doGTranslate('en|el')">Greek</li>
<li onclick="doGTranslate('en|ht')">Haitian Creole</li>
<li onclick="doGTranslate('en|iw')">Hebrew</li>
<li onclick="doGTranslate('en|hi')">Hindi</li>
<li onclick="doGTranslate('en|hu')">Hungarian</li>
<li onclick="doGTranslate('en|is')">Icelandic</li>
<li onclick="doGTranslate('en|id')">Indonesian</li>
<li onclick="doGTranslate('en|ga')">Irish</li>
<li onclick="doGTranslate('en|it')">Italian</li>
<li onclick="doGTranslate('en|ja')">Japanese</li>
<li onclick="doGTranslate('en|ko')">Korean</li>
<li onclick="doGTranslate('en|lv')">Latvian</li>
<li onclick="doGTranslate('en|lt')">Lithuanian</li>
<li onclick="doGTranslate('en|mk')">Macedonian</li>
<li onclick="doGTranslate('en|ms')">Malay</li>
<li onclick="doGTranslate('en|mt')">Maltese</li>
<li onclick="doGTranslate('en|no')">Norwegian</li>
<li onclick="doGTranslate('en|fa')">Persian</li>
<li onclick="doGTranslate('en|pl')">Polish</li>
<li onclick="doGTranslate('en|pt')">Portuguese</li>
<li onclick="doGTranslate('en|ro')">Romanian</li>
<li onclick="doGTranslate('en|ru')">Russian</li>
<li onclick="doGTranslate('en|sr')">Serbian</li>
<li onclick="doGTranslate('en|sk')">Slovak</li>
<li onclick="doGTranslate('en|sl')">Slovenian</li>
<li onclick="doGTranslate('en|es')">Spanish</li>
<li onclick="doGTranslate('en|sw')">Swahili</li>
<li onclick="doGTranslate('en|sv')">Swedish</li>
<li onclick="doGTranslate('en|th')">Thai</li>
<li onclick="doGTranslate('en|tr')">Turkish</li>
<li onclick="doGTranslate('en|uk')">Ukrainian</li>
<li onclick="doGTranslate('en|ur')">Urdu</li>
<li onclick="doGTranslate('en|vi')">Vietnamese</li>
<li onclick="doGTranslate('en|cy')">Welsh</li>
<li onclick="doGTranslate('en|yi')">Yiddish</li>
<li onclick="doGTranslate('en|bn')">Bengali</li>
<li onclick="doGTranslate('en|bs')">Bosnian</li>
<li onclick="doGTranslate('en|ceb')">Cebuano</li>
<li onclick="doGTranslate('en|eo')">Esperanto</li>
<li onclick="doGTranslate('en|gu')">Gujarati</li>
<li onclick="doGTranslate('en|ha')">Hausa</li>
<li onclick="doGTranslate('en|hmn')">Hmong</li>
<li onclick="doGTranslate('en|ig')">Igbo</li>
<li onclick="doGTranslate('en|jw')">Javanese</li>
<li onclick="doGTranslate('en|kn')">Kannada</li>
<li onclick="doGTranslate('en|km')">Khmer</li>
<li onclick="doGTranslate('en|lo')">Lao</li>
<li onclick="doGTranslate('en|la')">Latin</li>
<li onclick="doGTranslate('en|mi')">Maori</li>
<li onclick="doGTranslate('en|mr')">Marathi</li>
<li onclick="doGTranslate('en|mn')">Mongolian</li>
<li onclick="doGTranslate('en|ne')">Nepali</li>
<li onclick="doGTranslate('en|pa')">Punjabi</li>
<li onclick="doGTranslate('en|so')">Somali</li>
<li onclick="doGTranslate('en|ta')">Tamil</li>
<li onclick="doGTranslate('en|te')">Telugu</li>
<li onclick="doGTranslate('en|yo')">Yoruba</li>
<li onclick="doGTranslate('en|zu')">Zulu</li>

            </ul>
        </div>
    </div>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- <div class="rd-navbar-shop"><a class="novi-icon link-shop material-icons-shopping_cart"
                             href="#"></a></div> -->
                </div>
            </div>
        </nav>
    </div>



<div id="google_translate_element" style="display: none;"></div>

<script type="text/javascript">

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en', autoDisplay: false }, 'google_translate_element');
    }

    function doGTranslate(langPair) {
        if (langPair === '') return;
        var lang = langPair.split('|')[1];
        var select = document.querySelector(".goog-te-combo");
        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        }
    }
    
    
    
    window.addEventListener('load', function() {
  setTimeout(function() {
    var googleTranslateBanner = document.querySelector('.goog-te-banner-frame');
    if (googleTranslateBanner) {
      googleTranslateBanner.style.display = 'none';
    }
  }, 5000); // Wait 5 seconds after the page loads before hiding the banner
});

</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</header>