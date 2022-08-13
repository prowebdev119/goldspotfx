<?php
/**
 * @author Pinaki Das <vtigerdevel@gmail.com>
 * @copyright 2022 - LimitN Technologies pvt limited
 */

if(!isset($_REQUEST['password2'])){
    //means this is not logged in, we send him to login page
    header("Location: index.php?a=login");
}

require_once('assets/Viewer.php');
$viewer = new Viewer();

$viewer->assign("PAGE_TITLE", "User panel - Goldspotfx");
$viewer->display('user-panel.tpl');
