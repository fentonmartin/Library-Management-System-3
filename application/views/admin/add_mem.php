<?php include('member_header.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
	<div class="container">
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Member/new_user',$att);
		?>
		<legend>Add Details</legend>
		<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'firstname','placeholder'=>'First Name');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
	<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'lastname','placeholder'=>'Last Name');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <?php
       $att = array('male'=>'Male','female'=>'Female');
        echo form_dropdown('Gender',$att,'',['class'=>'form-control']);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Address</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'address','placeholder'=>'Address');
        echo form_textarea($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Contact</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'contact','placeholder'=>'Contact');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Member Type</label>
      <div class="col-lg-10">
        <?php
       $att = array('student'=>'student','faculty'=>'faculty');
        echo form_dropdown('type',$att,'',['class'=>'form-control']);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
	 <?php
        echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
        ?>
	</div>
	</div>
	</div>
	</div>
</body>
</html>