<?php
/* Smarty version 3.1.33, created on 2020-04-03 16:05:05
  from 'C:\wamp64\www\PHP-GESTION-DES-STOCKES\smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e875eb1d39058_27241481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a561364ed60ba5eb7b14787549c127e49fdd4e3' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP-GESTION-DES-STOCKES\\smarty\\templates\\layout.tpl',
      1 => 1585929725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/create.form.tpl' => 1,
    'file:forms/login.form.tpl' => 1,
    'file:forms/update.form.tpl' => 1,
  ),
),false)) {
function content_5e875eb1d39058_27241481 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title>Bienvenue dans site de stockage des produits </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global">
      <h3>enregister ou mis à jour des produit à partie de cette page</h3>
      <?php if ($_smarty_tpl->tpl_vars['prodexist']->value) {?>
        <div class="welcome-pane">
              Information sur <?php echo $_smarty_tpl->tpl_vars['prod']->value['nomprod'];?>
 <?php echo $_smarty_tpl->tpl_vars['prod']->value['categorie'];?>
 - <a href="logout.php">autre produit</a>
            </div>
      <?php }?>

      <div class="error-pane <?php echo $_smarty_tpl->tpl_vars['classError']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

      </div>

      <div class="success-pane <?php echo $_smarty_tpl->tpl_vars['classSuccess']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['successMessage']->value;?>

      </div>


      <div class="content">
        <?php if (!$_smarty_tpl->tpl_vars['prodexist']->value) {?>
          <div class="inscription">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/create.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>


          <div class="connexion">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/login.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php } else { ?>
          <div class="update">
            <?php $_smarty_tpl->_subTemplateRender("file:forms/update.form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        <?php }?>
      </div>
    </div>
  </body>
</html>
<?php }
}
