<?php
/**
 * NMPP PLATFORM LIVE DIAGNOSTIC TOOL
 * This script checks for common issues on live hosting (Cpanel)
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🚀 NMPP Live System Diagnostic</h1>";
echo "<pre>";

// 1. Check PHP Version
echo "<b>[1] PHP Environment:</b>\n";
echo "    - Version: " . PHP_VERSION . "\n";
echo "    - PDO MySQL: " . (extension_loaded('pdo_mysql') ? "ENABLED ✅" : "MISSING ❌") . "\n";
echo "    - MBString: " . (extension_loaded('mbstring') ? "ENABLED ✅" : "MISSING ❌") . "\n";

// 2. Check Directory Structure
echo "\n<b>[2] Directory Structure:</b>\n";
$folders = ['inc', 'layout', 'app', 'DataTables', 'app/DB'];
foreach ($folders as $folder) {
    echo "    - /$folder: " . (is_dir($folder) ? "FOUND ✅" : "MISSING ❌") . "\n";
}

// 3. Test Database Connection (Using your Cpanel Credentials)
echo "\n<b>[3] Database Connection Test:</b>\n";
$db_host = 'localhost';
$db_user = 'eduowrav_nmppdb_user';
$db_pass = 'Nmppdb@1234';
$db_name = 'eduowrav_nmppdb';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    echo "    - Connection: SUCCESS ✅\n";
    
    // Check Tables
    $tables = ['species_tbl', 'compounds_cati_tbl', 'software_settings'];
    foreach ($tables as $table) {
        if ($table == 'species_tbl') {
            // Census
            $stmt = $pdo->query("SELECT COUNT(*) as total FROM species_tbl");
            $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
            $stmt = $pdo->query("SELECT COUNT(*) as active FROM species_tbl WHERE status = 1");
            $active = $stmt->fetch(PDO::FETCH_ASSOC)['active'];
            echo "    - Table 'species_tbl': EXISTS ✅ (Total: $total, Active status=1: $active)\n";
            
            if ($active == 0 && $total > 0) {
                echo "      ⚠️ ALERT: Your plants exist, but they are all INACTIVE (status is not 1)!\n";
            }
        } else {
            $check = $pdo->query("SHOW TABLES LIKE '$table'");
            echo "    - Table '$table': " . ($check->rowCount() > 0 ? "EXISTS ✅" : "NOT FOUND ❌") . "\n";
        }
    }
} catch (PDOException $e) {
    echo "    - Connection: FAILED ❌ (" . $e->getMessage() . ")\n";
}

// 4. Check Config Files
echo "\n<b>[4] Config Integrity:</b>\n";
$configs = ['inc/config.inc.php', 'inc/siteconfig.inc.php', 'app/DB/Conn.php'];
foreach ($configs as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo "    - $file: FOUND ✅ (" . strlen($content) . " bytes)\n";
        if (strpos($content, 'https://nmppdb.com.ng/') !== false && $file != 'inc/config.inc.php') {
            echo "      ⚠️ WARNING: Hardcoded URL found in $file. This might block local loading.\n";
        }
    } else {
        echo "    - $file: MISSING ❌\n";
    }
}

// 5. Check Asset Paths
echo "\n<b>[5] Asset Resolution:</b>\n";
include_once 'inc/config.inc.php';
echo "    - SITE_URL Value: '" . (defined('SITE_URL') ? SITE_URL : "UNDEFINED") . "'\n";

if (defined('SITE_URL')) {
    $found_in = "Unknown";
    if (strpos(file_get_contents('inc/config.inc.php'), "define('SITE_URL'") !== false) $found_in = "inc/config.inc.php";
    if (strpos(file_get_contents('inc/siteconfig.inc.php'), "define('SITE_URL'") !== false) $found_in = "inc/siteconfig.inc.php";
    echo "    - DEFINED IN: $found_in\n";
}
echo "    - Expected DataTables Path: " . (defined('SITE_URL') ? SITE_URL : "") . "DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js\n";

echo "\n------------------------------------------------\n";
echo "DIAGNOSTIC COMPLETE. PLEASE COPY THIS OUTPUT.";
echo "</pre>";
?>
