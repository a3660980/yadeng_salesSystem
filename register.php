<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="/css/semantic.css" rel="stylesheet" >
 
  
   <!-- jQuery (Bootstrap 所有外掛均需要使用) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 依需要參考已編譯外掛版本（如下），或各自獨立的外掛版本 -->
    <script src="/js/bootstrap.min.js"></script>
    </head>

    <body>
         
          <form action='../../html/Register/do_register.php' id="do_register" method='POST'>
               <input type='hidden' name='func' value='do_register'>
           <div class="panel panel-success"> 
<div class="panel-heading"> 
註冊帳號
</div> 
<div class="panel-body"> 
<table class="table table-striped table-bordered table-hover"> 


			


<tr> 
	<th> 
     帳號
	</th> 
	<td> 
	 <input type="text" name="register_user" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	密碼
	</th> 
	<td> 
	 <input type="password" name="register_password" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	請再次輸入密碼
	</th> 
	<td> 
	 <input type="password" name="check_password" class="form-control"> 
	</td> 
</tr> 
<tr> 
	<th> 
	姓名
	</th> 
	<td> 
	 <input type="text" name="register_realname" class="form-control">
	</td> 
</tr> 
<tr> 
	<th> 
	E-mail
	</th> 
	<td> 
	 <input type="email" name="register_email" class="form-control"> 
	</td> 
</tr> 

<tr> 
	<th> 
	手機
	</th> 
	<td> 
	 <input type="text" name="register_cellphone" class="form-control"> 
	</td> 
</tr> 



</table> 
</div> 
</div>
     <div style="display: none;">
           <button id="mybutton" form='do_register' type='submit' class="btn btn-warning"  style="float:right; visibility: hidden;">新增</button>
       </div>
       </form>
       
        </body>
        </html>
       



