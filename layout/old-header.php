<style>

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
        height: 65px;
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


</style>

<header class="page-head">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true"
            data-xxl-stick-up="true" data-lg-stick-up-offset="60px" data-xl-stick-up-offset="60px"
            data-xxl-stick-up-offset="60px">
            <div class="rd-navbar-inner" style="padding-top: 20px; padding-bottom: 20px; justify-content: space-around;">
                <div class="rd-navbar-panel">
                    <button class="rd-navbar-toggle" data-custom-toggle=".rd-navbar-nav-wrap"
                        data-custom-toggle-disable-on-blur="true"><span></span></button>
                    <a class="rd-navbar-brand header-logo" href="<?= SITE_URL ?>index.php"><img src="images/nmppdb-logo.jpg" alt="" height="22" /></a>
                </div>
                <div class="rd-navbar-group rd-navbar-search-wrap">
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-nav-inner">
                            <div class="rd-navbar-search">
                                <form class="rd-search" action="search-results" method="GET"
                                    data-search-live="rd-search-results-live">
                                    <div class="form-wrap">
                                        <input class="form-input" id="rd-search-form-input" type="text" name="s"
                                            autocomplete="off" placeholder="Search...">
                                        <!-- <div class="rd-search-results-live" id="rd-search-results-live"></div> -->
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
                                'plant-species'
                                    ? 'active'
                                    : '' ?>"><a class="rd-nav-link" href="./plant-species">Plant Species</a>
                                </li>

                                <li class="rd-nav-item <?= $URL_NAME ==
                                'compounds-list'
                                    ? 'active'
                                    : '' ?>"><a class="rd-nav-link" href="compounds-list">Compounds</a>
                                </li>

                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Download</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Submit</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Help</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- <div class="rd-navbar-shop"><a class="novi-icon link-shop material-icons-shopping_cart"
                             href="#"></a></div> -->
                </div>
            </div>
        </nav>
    </div>
</header>