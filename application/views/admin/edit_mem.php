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
		echo form_open('Member/edit_db',$att);
    echo form_hidden('member_id',$res->member_id);
		?>
		<legend>Add Details</legend>
		<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'firstname','placeholder'=>'First Name','value'=>set_value('First Name',$res->firstname));
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
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'lastname','placeholder'=>'Last Name','value'=>set_value('First Name',$res->lastname));
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
        if($res->gender=="male")
       $att = array('male'=>'Male','female'=>'Female');
      else
        $att = array('female'=>'Female','male'=>'Male');
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
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'address','placeholder'=>'Address','value'=>set_value('First Name',$res->address));
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
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'contact','placeholder'=>'Contact','value'=>set_value('First Name',$res->contact));
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
        if($res->type=="student")
       $att = array('student'=>'student','faculty'=>'faculty');
     else
      $att = array('faculty'=>'faculty','student'=>'student');
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