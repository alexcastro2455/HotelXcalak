<?php
/* Smarty version 3.1.31, created on 2017-10-03 19:31:34
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d3c976eb6976_59021765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be48bd814c01aa222ddb87a28ae0ab56bf8c2659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\home\\index.tpl',
      1 => 1507051892,
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
function content_59d3c976eb6976_59021765 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender('file:overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  
  <?php $_smarty_tpl->_subTemplateRender('file:overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <section class="container">
      <?php if (isset($_SESSION['nombre'])) {?>
      <div class="row">
        <div class="col-md-5 col-md-offset-2">
          <h3><label>Puesto: <span><?php echo $_SESSION['puesto'];?>
<span/></label></h3>
          <h3><?php echo smarty_modifier_date_format(time(),"%d/%m/%G");?>
</h3>
        </div>
        <div class="col-md-4">
          <h3><label>Bienvenido <span><span/><?php echo $_SESSION['nombre'];?>
 <?php echo $_SESSION['apellido'];?>
</label></h3>
        </div>
      </div>
      <div class="row">

            
        <div class="CenterElement">
          <span class="glyphicon glyphicon-user iconPresentation"></span>
          <br>
          <label class="label label-default labelPresentation"><?php echo $_SESSION['puesto'];?>
<label/>
        </div>

      </div>
      <?php }?>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
