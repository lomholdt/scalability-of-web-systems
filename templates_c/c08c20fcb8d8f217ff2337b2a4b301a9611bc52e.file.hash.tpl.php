<?php /* Smarty version Smarty-3.1-DEV, created on 2015-09-18 14:49:47
         compiled from "hash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45265244455fc14d70a5060-33523138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08c20fcb8d8f217ff2337b2a4b301a9611bc52e' => 
    array (
      0 => 'hash.tpl',
      1 => 1442584184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45265244455fc14d70a5060-33523138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55fc14d7176631_24673590',
  'variables' => 
  array (
    'output' => 0,
    'hashFunction' => 0,
    'hash' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc14d7176631_24673590')) {function content_55fc14d7176631_24673590($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hash</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form method="POST" role="form">
				<legend>Hash My String</legend>
				
				<div class="form-group">
					<input name="input" type="text" class="form-control" id="" placeholder="Insert text to hash: ">
				</div>
		
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>	
			<?php if (isset($_smarty_tpl->tpl_vars['output']->value)){?>
				<div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Hash Function</th>
								<th>Hash</th>
							</tr>
						</thead>
						<tbody>
								<?php  $_smarty_tpl->tpl_vars['hash'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hash']->_loop = false;
 $_smarty_tpl->tpl_vars['hashFunction'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['output']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hash']->key => $_smarty_tpl->tpl_vars['hash']->value){
$_smarty_tpl->tpl_vars['hash']->_loop = true;
 $_smarty_tpl->tpl_vars['hashFunction']->value = $_smarty_tpl->tpl_vars['hash']->key;
?>
									<tr>
							    		<td><?php echo $_smarty_tpl->tpl_vars['hashFunction']->value;?>
</td>
							    		<td><?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
</td>
									</tr>
								<?php } ?>
						</tbody>
					</table>
				</div>
			<?php }?>
	</div>
</body>
</html><?php }} ?>