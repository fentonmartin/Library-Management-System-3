<?php include('book_header.php');?>
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
		echo form_open('Book/new_book',$att);
		?>
		<legend>Add Details</legend>
		<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Book Name</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'book_title','placeholder'=>'Book Name');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
	<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Author</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'author','placeholder'=>'Author');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Publisher</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'book_pub','placeholder'=>'Publisher');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ISBN Number</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'isbn','placeholder'=>'ISBN Number');
        echo form_input($att);
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