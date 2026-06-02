<?php
try {
    $settings = [];
    if (isset($site_settings) && method_exists($site_settings, 'SiteProperty')) {
        $raw_settings = $site_settings->SiteProperty();
        if ($raw_settings) {
            foreach ($raw_settings as $setting) {
                if (isset($setting->setting_key)) {
                    $settings[$setting->setting_key] = $setting->setting_value;
                }
            }
        }
    }
} catch (Exception $e) {
    // If settings fail, we use fallbacks below
}

// Define constants with fallbacks to avoid "Undefined index" warnings
define('SITE_TITLE', $settings['website_title'] ?? 'NMPP Database');
define('SITE_LOGO', $settings['site_logo'] ?? 'logo.png');
define('SITE_LOGO_2', $settings['site_logo_2'] ?? 'logo2.png');
define('ABOUT_US', $settings['about_us'] ?? '');
define('CONTACT_US', $settings['contact_us'] ?? '');
define('DSMS_INSTALL_INSTRUCTION', $settings['dsms_install_instruction'] ?? '');
define('HOW_USE_DSMS', $settings['dsms_feature_details'] ?? '');
define('TOP_BANNER_TEXT', $settings['top_banner_text'] ?? '');
define('BOTTOM_BANNER_TEXT', $settings['bottom_banner_text'] ?? '');
define('ABOUT_US_HEADER', $settings['about_us_header'] ?? '');
define('WHY_PEOPLE_CHOOSE_US_HEADER', $settings['why_people_choose_us_header'] ?? '');
define('WHY_PEOPLE_CHOOSE_US_TAP_ONE', $settings['why_people_choose_us_tap_one'] ?? '');
define('WHY_PEOPLE_CHOOSE_US_TAP_TWO', $settings['why_people_choose_us_tap_two'] ?? '');
define('WHY_PEOPLE_CHOOSE_US_TAP_THREE', $settings['why_people_choose_us_tap_three'] ?? '');
define('UI_DEVICE_ONE', $settings['ui_device_one'] ?? '');
define('UI_DEVICE_TWO', $settings['ui_device_two'] ?? '');
define('UI_DEVICE_THREE', $settings['ui_device_three'] ?? '');
define('UI_DEVICE_FOUR', $settings['ui_device_four'] ?? '');
define('INSTALL_DSMS_YOUTUBE', $settings['install_dsms_youtube'] ?? '');
?>