<?php
/* Smarty version 3.1.32, created on 2018-06-28 13:21:06
  from 'C:\Users\Plug\Desktop\ma\bewijzenmap\periode1.4\myband\private\views\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b34c4a2ab9c81_44626898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b10e0932e0c680bfce7ae9679a532f69c56a17b' => 
    array (
      0 => 'C:\\Users\\Plug\\Desktop\\ma\\bewijzenmap\\periode1.4\\myband\\private\\views\\admin.tpl',
      1 => 1530184742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34c4a2ab9c81_44626898 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Album Toevoegen</h2>
<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000">
    <label></label><input type="file" name="albumimage">
    <input type="text" name="naamalbum" placeholder="naamalbum">
    <textarea name="albumsongs" cols="20" rows="10" placeholder="1.Nummer 1&#10;2.Nummer 2&#10;etc."></textarea>
    <input type="submit" name="submit" value="Toevoegen">
</form><?php }
}
