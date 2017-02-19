<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LMS|Login</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
<div style="width:800px; margin:0 auto; margin-top: 150px ;">
<div class="container">
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Home/login_area',$att) 

	?>
  <fieldset>
    <div class="row">
    <legend class="col-lg-6">Login</legend></div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      <?php $att = array('type' =>'text' ,'class'=>'form-control','name'=>'username','placeholder'=>'Username','value'=>set_value('username'));
       echo form_input($att);
       ?>
      </div>
      </div>
      </div>
      <div class="col-lg-6">
      	<?php
      	echo form_error('username') ;?>
      </div>
     </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php $att = array('type' =>'password' ,'class'=>'form-control','name'=>'password','placeholder'=>'password' );
       echo form_password($att);
       ?>
        </div>
      </div>
     </div>
	<div class="col-lg-6">
		<?php
		echo form_error('password');?>
	</div>
	</div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
        echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); 
        echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
        ?>
      </div>
    </div>
  </fieldset>
  </form>
</div>
</div>
</body>
</html> 