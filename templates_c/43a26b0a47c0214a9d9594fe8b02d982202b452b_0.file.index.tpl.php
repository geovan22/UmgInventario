<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 07:21:28
  from 'C:\xampp\htdocs\UmgInventario\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f97bc68703a55_27332521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43a26b0a47c0214a9d9594fe8b02d982202b452b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UmgInventario\\Views\\index.tpl',
      1 => 1603779664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_5f97bc68703a55_27332521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br /><br /><br />
<div class="container " >
    <div class="row ">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</h5>
            <form method="post" action="?controller=Home&action=Login" class="form-signin">
              <div class="form-label-group">
                <label for="inputName">User</label>
                <input type="text" name="user" id="inputName" class="form-control" placeholder="Name User" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
		

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
