<?php
require_once 'config.inc.php';
if(!$UserAuth->is_user_logged_in()){
$UserAuth->redirect('./login');
}else{

if($Auths = $UserAuth->GetUserId($_SESSION['Login_User'])){
foreach ($Auths as $Auth){ }
}
}
