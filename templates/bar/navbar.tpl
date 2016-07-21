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
        
        <li><a class="nav-a"  href="../../index.php?func=show_user_page&id={$userid}"><i class="user icon"></i>{$username}</a></li>
        <li><a class="nav-a"   href="./html/do_logout.php"><i class="Sign out icon"></i>登出</a></li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>