<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <a href="../index.php"><img src="../images/unnamed.jpg" alt="" width="60" /></a>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"
                style="text-transform: uppercase"><?= SITE_TITLE ?></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?= $URL_NAME == 'dashboard' ? 'active' : '' ?>">
            <a href="<?= SITE_URL . '/dashboard' ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <?php if ($links = $site_settings->url_link($Auth->admin_role)) {
            foreach ($links as $link) {
                if ($link->has_sub == 0) { ?>



        <li class="menu-item <?= $URL_NAME == $link->link ? 'active' : '' ?>">
            <a href="<?= $link->link ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics"><?= $link->link_name ?></div>
            </a>
        </li>
        <?php } else {if (
                        $sub_links = $site_settings->sub_url_link(
                            $link->id,
                            $Auth->admin_role
                        )
                    ) { ?>


        <!-- Layouts -->
        <li class="menu-item  <?php foreach ($sub_links as $val) {
            if ($val->sub_link === $URL_NAME) {
                echo 'active open';
            }
        } ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts"><?= $link->link_name ?></div>
            </a>

            <ul class="menu-sub">
                <?php foreach ($sub_links as $sub_link) { ?>
                <li class="menu-item <?= $URL_NAME == $sub_link->sub_link
                    ? 'active'
                    : '' ?>">
                    <a href="<?= $sub_link->sub_link ?>" class="menu-link">
                        <div data-i18n="Without menu"><?= $sub_link->sub_link_name ?></div>
                    </a>
                </li>
                <?php } ?>

            </ul>
        </li>

        <?php }}
            }
        } ?>

        <!-- Added Public Downloads -->
        <li class="menu-item <?= $URL_NAME == 'manage-downloads' ? 'active' : '' ?>">
            <a href="manage-downloads" class="menu-link">
                <i class="menu-icon tf-icons bx bx-download"></i>
                <div data-i18n="Public Downloads">Public Downloads</div>
            </a>
        </li>

        <!-- Misc -->
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Site Settings</div>
            </a>
        </li> -->

    </ul>
</aside>
<!-- / Menu -->
