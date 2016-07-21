<?php
/* Smarty version 3.1.29, created on 2016-06-05 14:52:49
  from "/home/ubuntu/workspace/templates/bar/navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57543cc109aea6_69228819',
  'file_dependency' => 
  array (
    'dbeb2e0e2b70bc562b7bf82c66b5c1779ae24971' => 
    array (
      0 => '/home/ubuntu/workspace/templates/bar/navbar.tpl',
      1 => 1465138362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57543cc109aea6_69228819 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <font class="navbar-title">YaDeng</font>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <table class="nav-table">
          <tr>
            </td>
        <form name="form1" action = "../../index.php" method="POST">
          <input type="hidden" name="func" value="show_sales_page">
		  	<li><a class="nav-a" href="javascript:document.form1.submit();" > <i class="dollar icon"></i> 銷貨管理</a></li>
		</form>
		
		 <form name="form2" action = "../../index.php" method="POST" >
          <input type="hidden" name="func" value="show_purchase_page">
		  	<li><a class="nav-a" href="javascript:document.form2.submit();"> <i class="shop icon"></i>進貨管理</a></li>
		</form>
	
		<form name="form3" action = "../../index.php" method="POST" >
          <input type="hidden" name="func" value="show_depot_page">
		  	<li><a class="nav-a" href="javascript:document.form3.submit();"> <i class="cubes icon"></i>庫存管理</a></li>
		</form>
	
       <form name="form4" action = "../../index.php" method="POST" >
          <input type="hidden" name="func" value="show_customer_page">
		  	<li><a class="nav-a" href="javascript:document.form4.submit();"> <i class="users icon"></i>會員管理</a></li>
		</form>
		
		<form name="form5" action = "../../index.php" method="POST" >
          <input type="hidden" name="func" value="show_product_page">
		  	<li><a class="nav-a" href="javascript:document.form5.submit();"> <i class="cube icon"></i>產品管理</a></li>
		</form>
		
		<form name="form6" action = "../../index.php" method="POST" >
          <input type="hidden" name="func" value="show_vendor_page">
		  	<li><a class="nav-a" href="javascript:document.form6.submit();"> <i class="suitcase icon"></i> 供應商管理</a></li>
		</form>
		
		</td>
		</tr>
      </table>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a class="nav-a"  href="../../index.php?func=show_user_page&id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><i class="user icon"></i><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></li>
        <li><a class="nav-a"   href="./html/do_logout.php"><i class="Sign out icon"></i>登出</a></li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }
}
