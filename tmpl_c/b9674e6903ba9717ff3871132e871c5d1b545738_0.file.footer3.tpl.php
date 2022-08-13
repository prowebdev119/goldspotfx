<?php /* Smarty version 3.1.27, created on 2022-08-10 11:32:31
         compiled from "/home/goldainy/public_html/tmpl/footer3.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4040429762f3cf8fb388a6_30516557%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9674e6903ba9717ff3871132e871c5d1b545738' => 
    array (
      0 => '/home/goldainy/public_html/tmpl/footer3.tpl',
      1 => 1660067959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4040429762f3cf8fb388a6_30516557',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f3cf8fb40316_91076698',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f3cf8fb40316_91076698')) {
function content_62f3cf8fb40316_91076698 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4040429762f3cf8fb388a6_30516557';
?>
 <div class="footer-menu">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                                        
                                       <?php echo $_smarty_tpl->getSubTemplate ("nav_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="footer-line">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="social-links">
                        <ul>
                            <li><a href="skype:live:?add"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://youtube.com/" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo ">
                        <a href="index.phtml">
                            <img src="template/images/logo-footer.png" alt="" style="width: 135px;margin-top: -29px;">
                        </a>
                    </div>
                </div>
                <div class="col-md-5 text-right">
                    <img src="template/images/security-img.png"  style="    margin-top: 17px;" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        2019 All Rights Reserved. <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div>



</body>
</html><?php }
}
?>