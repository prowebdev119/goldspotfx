<?php
/**
 * @author Pinaki Das <vtigerdevel@gmail.com>
 * @copyright 2022 - LimitN Technologies pvt limited
 */

require_once('assets/Viewer.php');
$viewer = new Viewer();

$viewer->assign("PAGE_TITLE", "Contact us - Goldspotfx");
$viewer->display('contact.tpl');
