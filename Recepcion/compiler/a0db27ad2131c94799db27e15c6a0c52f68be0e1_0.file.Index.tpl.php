<?php
/* Smarty version 3.1.31, created on 2017-10-04 00:55:53
  from "C:\xampp\htdocs\HotelXcalak\Recepcion\styles\templates\home\Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d41579c17ed2_59436848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0db27ad2131c94799db27e15c6a0c52f68be0e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\styles\\templates\\home\\Index.tpl',
      1 => 1507070852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall/Header.tpl' => 1,
    'file:overall/Nav.tpl' => 1,
    'file:overall/Footer.tpl' => 1,
  ),
),false)) {
function content_59d41579c17ed2_59436848 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\HotelXcalak\\Recepcion\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender('file:overall/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  
  <?php $_smarty_tpl->_subTemplateRender('file:overall/Nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

    <?php $_smarty_tpl->_subTemplateRender('file:overall/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
