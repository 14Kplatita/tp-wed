<?php
/* Smarty version 4.3.1, created on 2023-07-03 01:38:42
  from 'C:\xampp\htdocs\tp wed 2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a20a82c6e2d8_97375730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5307c568945f7c30747e9f9679989abaa8f2bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\header.tpl',
      1 => 1688341120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64a20a82c6e2d8_97375730 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/estilos.css">
        <link rel="stylesheet" href="../css/estilos.css">
    </head>
        <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Barra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
home">home</a></li>
              <li class="nav-item dropdown">

      
              <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
categorias">categorias</a></li>
              <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
modelos">modelos</a></li>
              <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
login">login</a></li>
              <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
contenido">contenido</a></li>
              </ul>
          </div>
        </div>
      </nav><?php }
}
