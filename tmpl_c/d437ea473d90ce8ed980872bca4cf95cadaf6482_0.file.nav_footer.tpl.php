<?php /* Smarty version 3.1.27, created on 2022-08-10 11:32:31
         compiled from "/home/goldainy/public_html/tmpl/nav_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52476599262f3cf8fb43d33_64866757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd437ea473d90ce8ed980872bca4cf95cadaf6482' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/nav_footer.tpl',
      1 => 1660069040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52476599262f3cf8fb43d33_64866757',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3cf8fb46b67_57030280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3cf8fb46b67_57030280')) {
function content_62f3cf8fb46b67_57030280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '52476599262f3cf8fb43d33_64866757';
?>
 <ul>
                        <li>
                            <a href="index.phtml">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
									<span>
										About Us
									</span>
                            </a>
                        </li>
                        <li>
                            <a href="?a=news">
                                <span>Company News</span>
                            </a>
                        </li>
                        <li>
                            <a href="?a=rules">
                                <span>Rules</span>
                            </a>
                        </li>
                        <li>
                            <a href="?a=cust&page=rateus">
                                <span>Ratings</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="?a=support">
                                <span><i></i>Contact Us</span>
                            </a>
                        </li>

                    </ul><?php }
}
?>