{include file="header_install.tpl"}


{if $wrong_license == 1}
</center>
Wrong license.<br><br>

Please contact <a href="http://www.goldcoders.com">www.goldcoders.com</a> if you bought license to this host.
<br><br>
<center>
{/if}


{if $wrong_mysql_data}
</center>
Wrong mysql data.<br><br>

Please be sure you entered right mysql host, mysql database name, mysql login, mysql password.<br>
Ask this information your hosting provider if you not sure.
<br><br>
<center>
{/if}

{if $installed != 1}
<form method=post>
<input type=hidden name=a value=install>
<table cellspacing=2 cellpadding=2 border=0>
<tr>
 <th colspan=2>MySQL data</th>
</tr><tr>
 <td>Mysql host:</td>
 <td><input type=text name=mysql_host value='{if $form_data.mysql_host}{$form_data.mysql_host}{else}localhost{/if}' class=inpts size=30></td>
</tr><tr>
 <td>Mysql database name:</td>
 <td><input type=text name=mysql_db value='{$form_data.mysql_db}' class=inpts size=30></td>
</tr><tr>
 <td>Mysql username:</td>
 <td><input type=text name=mysql_username value='{$form_data.mysql_username}' class=inpts size=30></td>
</tr><tr>
 <td>Mysql password:</td>
 <td><input type=text name=mysql_password value='{$form_data.mysql_password}' class=inpts size=30></td>
</tr><tr>
 <th colspan=2>License data:</th>
</tr><tr>
 <td>Host:</td>
 <td>{$hostname}</td>
</tr><tr>
 <td>License key:</td>
 <td><input type=text name=license_string value='{$form_data.license_string}' class=inpts size=30></td>
</tr><tr>
 <th colspan=2>Admin account data:</th>
</tr><tr>
 <td>E-mail:</td>
 <td><input type=text name=admin_email value='{$form_data.admin_email}' class=inpts size=30></td>
</tr><tr>
 <td>Password:</td>
 <td><input type=password name=admin_password value='' class=inpts size=30></td>
</tr><tr>
 <td>&nbsp;</td>
 <td><input type=submit value='Install' class=sbmt></td>

</tr></table>
</form>
{else}
<h1>Script successfully installed!</h1>
<br><br>
<table cellspacing=0 cellpadding=1 border=0 width=400><tr><td>
Please delete install.php file for security reason.<br><br>

Path to script: <a href="{$script_path}" target=_blank>{$script_path}</a><br>
Admin login: admin<br>
Admin password: {$form_data.admin_password}<br><br>

Login to admin area, go to settings screen and specify your sitename, payment accounts and other information.<br>
</td></tr></table>
{/if}

{include file="footer_install.tpl"}
