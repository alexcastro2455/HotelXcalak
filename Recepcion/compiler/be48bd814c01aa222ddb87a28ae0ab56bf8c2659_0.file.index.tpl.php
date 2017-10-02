<?php
/* Smarty version 3.1.31, created on 2017-09-30 23:57:29
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d01349639949_88342357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be48bd814c01aa222ddb87a28ae0ab56bf8c2659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\home\\index.tpl',
      1 => 1506807998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/header.tpl' => 1,
    'file:overall/nav.tpl' => 1,
    'file:overall/footer.tpl' => 1,
  ),
),false)) {
function content_59d01349639949_88342357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  
  <?php $_smarty_tpl->_subTemplateRender('file:overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section class="container">
        
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <h3><label>Fecha:<span>Gerente<span/></label></h3>
        </div>
        <div class="col-md-4">
          <h3><label>Bienvenido <span>Armando Palacios Sanchez<span/></label></h3>
        </div>
      </div>
      <div class="row">

            
        <div class="CenterElement">
          <span class="glyphicon glyphicon-user iconPresentation"></span>
          <br>
          <label class="label label-default labelPresentation">Gerente<label/>
        </div>

      </div>

    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
