<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?= link_tag('assets/css/bootstrap.min.css') ?>
	
</head>
<body>
<script src="<?= base_url('assets/js/jquery-3.1.1.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Library Management System</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="dashboard">Borrow</a></li>
        <li class="active"><a href="Ret_bk">Dues<span class="sr-only">(current)</span></a></li>
        <li><?=anchor("Member/mem_list",'Members');?></li>
        <li><?=anchor("Book/book_list",'Books');?></li>
        <li><?=anchor("User/user_list",'Users');?></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
 <li><?=anchor("Home/index",'Logout');?></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>