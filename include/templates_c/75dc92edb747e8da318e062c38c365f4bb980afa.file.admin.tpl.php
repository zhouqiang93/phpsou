<?php /* Smarty version Smarty-3.1.13, created on 2014-07-09 06:41:02
         compiled from "..\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953653bce3fe8598c8-46628824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75dc92edb747e8da318e062c38c365f4bb980afa' => 
    array (
      0 => '..\\templates\\admin\\admin.tpl',
      1 => 1363183904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953653bce3fe8598c8-46628824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bce3fe9df8e8_33751319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bce3fe9df8e8_33751319')) {function content_53bce3fe9df8e8_33751319($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title>管理员维护</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="">
<meta name="description" content="">
<META content="MSHTML 6.00.2900.5921" name=GENERATOR>
<script src="style/jquery-1.2.2.pack.js" type="text/javascript"></script>
<script src="style/facebox.js" type="text/javascript"></script>
<link href="style/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox() 
    })
</script>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}

-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">管理员维护</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9"><table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="nowtable">
                <tr>
                  <td width="6%" height="30" class="left_bt2">&nbsp;&nbsp;管理员维护设置：</td>
                  <td width="6%" align="right" class="left_bt2"><a href="e_admin.php?mydiv" rel="facebox">添加>></a>&nbsp;&nbsp;</td>
                </tr>
              </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF" style="border:1px solid #CCCCCC;">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['admin'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['name'] = 'admin';
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['admin']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['admin']['total']);
?>
                  <tr>
                    <td width="7%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt2"><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['admin_id'];?>
</td>
                    <td width="39%" bgcolor="#f2f2f2">&nbsp;<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['adminname'];?>
</td>
                    <td width="23%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt">
					<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['lastlogintime'];?>
</td>
                    <td width="23%" align="center" bgcolor="#f2f2f2" class="left_txt"><?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['lastloginip'];?>
</td>
                    <td width="8%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt"><a href="e_admin.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['admin_id'];?>
&mydiv" rel="facebox">修改</a>&nbsp;<a href="?action=del&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value[$_smarty_tpl->getVariable('smarty')->value['section']['admin']['index']]['admin_id'];?>
" onClick="if(!confirm('确认删除码?')) return false;">删除</a></td>
                  </tr>
				<?php endfor; endif; ?>
                </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td width="50%" height="30" align="right">&nbsp;</td>
                <td width="6%" height="30" align="right">&nbsp;</td>
                <td width="44%" height="30">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="3">&nbsp;</td>
              </tr>
          </table></td>
      </tr>
    </table></td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
<?php }} ?>