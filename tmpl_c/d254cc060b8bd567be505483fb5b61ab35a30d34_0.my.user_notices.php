<?php /* Smarty version 3.1.27, created on 2022-08-10 18:28:46
         compiled from "my:user_notices" */ ?>
<?php
/*%%SmartyHeaderCode:154104547662f4311e661d01_47717022%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd254cc060b8bd567be505483fb5b61ab35a30d34' => 
    array (
      0 => 'my:user_notices',
      1 => 1660170526,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '154104547662f4311e661d01_47717022',
  'variables' => 
  array (
    'notices' => 0,
    'n' => 0,
    'frm' => 0,
    'pages' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_62f4311e71fee8_33460098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62f4311e71fee8_33460098')) {
function content_62f4311e71fee8_33460098 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/home/goldainy/public_html/inc/libs/smarty3/plugins/function.cycle.php';

$_smarty_tpl->properties['nocache_hash'] = '154104547662f4311e661d01_47717022';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>User Notices:</h3>  <?php if ($_smarty_tpl->tpl_vars['notices']->value) {?> <form name=filters method=get> <input type=hidden name=a value=user_notices> <input type=hidden name=p> <table class=list> <tr> <th>Title</th> <th>To</th> <th>Start</th> <th>Expires</th> <th>Action</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['notices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$foreach_n_Sav = $_smarty_tpl->tpl_vars['n'];
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"row1,row2"),$_smarty_tpl);?>
"> <td><b><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</b></td> <td><?php if ($_smarty_tpl->tpl_vars['n']->value['user_id']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['username'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['n']->value['notified']) {?><b class="badge badge-success">read</b><?php } else { ?><b class="badge badge-danger">not read</b><?php }
} else { ?><i>All</i><?php }?></td> <td><?php echo $_smarty_tpl->tpl_vars['n']->value['d'];?>
</td> <td><?php if ($_smarty_tpl->tpl_vars['n']->value['expiration']) {
if ($_smarty_tpl->tpl_vars['n']->value['days_left'] > 0) {?>in <?php echo $_smarty_tpl->tpl_vars['n']->value['time_left'];
} else { ?><b style=color:red><?php echo abs($_smarty_tpl->tpl_vars['n']->value['days_left']);?>
 days ago</b><?php }
} else { ?><i>&infin;</i><?php }?></td> <td> <a href="?a=user_notices&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['frm']->value['page'];?>
&#csrf#" onclick="return confirm('Do you really want to delete news?')" class="sbmt btn-sm btn-danger">delete</a> </td> </tr> <tr> <td colspan=5 style="padding:0 0 20px 0;"><div class="alert alert-warning" style="margin:0;border-top:0;"><?php echo nl2br($_smarty_tpl->tpl_vars['n']->value['text']);?>
</div></td> </tr> <?php
$_smarty_tpl->tpl_vars['n'] = $foreach_n_Sav;
}
?> </table> </form> <center> <?php echo paginator(array('col'=>$_smarty_tpl->tpl_vars['pages']->value['col'],'cur'=>$_smarty_tpl->tpl_vars['pages']->value['cur'],'url'=>"javascript:go(%s)"),$_smarty_tpl);?>
 </center> <br> <?php }?> <?php echo $_smarty_tpl->getSubTemplate ("my:start_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 Here you can send notices to your users.<br> You can specify list of usernames and system will create notices for each user in the list.<br> <?php echo $_smarty_tpl->getSubTemplate ("my:end_info_table", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Add a Notice:</h3> <form method=post> <input type=hidden name=a value=user_notices> <input type=hidden name=action value=add> <table class="form"> <tr> <th>Notice Title:</th> <td><input type="text" name="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts></td> </tr> <tr> <th>Start Date:</th> <td><input type="text" name="date" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['frm']->value['date'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['now']->value : $tmp);?>
" class=inpts></td> </tr> <tr> <th>Expires in:</th> <td><input type="text" name="expiration" value="<?php echo intval($_smarty_tpl->tpl_vars['frm']->value['expires']);?>
" class="inpts nosize" size=4> days <small>(set 0 to skip limitation)</small></td> </tr> <tr> <th>Users:</th> <td><input type="text" name="user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
" class="inpts" size=60><br><small>Leave blank to show message to all users or enter usernames divided by comma</small></td> </tr> <tr> <th>Notice:</th> <td><textarea name=text class=inpts rows=3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['notice'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> </tr> <tr> <th></th> <td><input type=submit value="Add" class=sbmt></td> </tr> </table> </form> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>