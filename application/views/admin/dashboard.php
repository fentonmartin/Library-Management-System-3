<?php include('admin_footer.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<!--<form class="form-horizontal">-->
	<?php $att = array('class' =>'form-horizontal'  );
		echo form_open('Admin/Mem_vald',$att);
	?>
  <fieldset>
    <legend>Borrow  Book</legend>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Member ID</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'mem_id','placeholder'=>'Member ID');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
     <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
        $att = array('type' =>'Submit' ,'class'=>'btn btn-primary','name'=>'search', 'value'=>'Search' );
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
   
  </fieldset>
</form>
</div>
</body>
</html>