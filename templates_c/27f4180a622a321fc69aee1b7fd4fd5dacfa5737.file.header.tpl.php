<?php /* Smarty version Smarty-3.1.14, created on 2014-02-04 08:50:17
         compiled from "C:\wamp\www\structure_mvc\tpl\front\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2326352f0a9661a9d09-95827648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f4180a622a321fc69aee1b7fd4fd5dacfa5737' => 
    array (
      0 => 'C:\\wamp\\www\\structure_mvc\\tpl\\front\\header.tpl',
      1 => 1391503815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2326352f0a9661a9d09-95827648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52f0a96625b987_92702555',
  'variables' => 
  array (
    'title' => 0,
    'page' => 0,
    'titre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f0a96625b987_92702555')) {function content_52f0a96625b987_92702555($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
        <title>Smarty - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Site officiel de la guilde PvE hl EquinoXx." />
		<link rel="stylesheet" type="text/css" href="web/css/style.css"/>
        <link rel="shortcut icon" href="web/img/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

</head>
<body id="cms">
	<header>
		<a href="?page=accueil" id="home"></a>
		
	</header>
	<div id="column">
	<h1 id="titre_<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
	<?php }} ?>