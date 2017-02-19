<?php include('user_header.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
  <div class="container">
  <?php $att = array('class' =>'form-horizontal');
    echo form_open('User/new_user',$att);
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
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'username','placeholder'=>'Username');
        echo form_input($att);
        echo form_error('username') ;
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'password','placeholder'=>'Password');
        echo form_password($att);
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