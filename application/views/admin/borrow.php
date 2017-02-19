<?php include('admin_footer.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>

	<div class="container">
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/borrow',$att) ?>
	<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Member ID</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'mem_id','placeholder'=>'Member ID','value'=>set_value('mem_id'),'readonly'=>'true');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Member Name</label>
      <div class="col-lg-10">
        <?php
        if(isset($s))
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'mem','placeholder'=>'Member Name','value'=>set_value('mem',$s->firstname),'readonly'=>'true');
   		else
   			 $att = array('type' =>'text' ,'class'=>'form-control','name'=>'mem','placeholder'=>'Member Name','value'=>set_value('mem'),'readonly'=>'true');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>

	 <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Book ID</label>
      <div class="col-lg-10">
        <?php
        if(isset($count)){
        	$att = array('type' =>'text' ,'class'=>'form-control','name'=>'book_id','id'=>'book_id', 'placeholder'=>'Book ID','value'=>set_value('book_id'), );
        }
        else
        $att = array('type' =>'text' ,'class'=>'form-control','name'=>'book_id','id'=>'book_id', 'placeholder'=>'Book ID','value'=>set_value('book_id') );	
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    <div  class="col-lg-6">
    <?php
        echo form_submit(['name'=>'submit','value'=>'Search','class'=>'btn btn-primary']);
        ?>
    	
    </div>
    </div>	
	</div>
	</form>
	<?php
	if (isset($res)):?>
	<div class="container">
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/borrow_comp',$att); 
		echo form_hidden('mem_id',$s->member_id);
		echo form_hidden('bk_id',$res->book_id);
		?>
		<legend>Book Details</legend>
		<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Book Name</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'bk_name','placeholder'=>'Book Name','value'=>set_value('Book Name',$res->book_title),'readonly'=>'TRUE');
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
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'auth','placeholder'=>'Author','value'=>set_value('Author',$res->author),'readonly'=>'TRUE');
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
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'pub','placeholder'=>'Publisher','value'=>set_value('Publisher',$res->book_pub),'readonly'=>'TRUE');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Date</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'date','placeholder'=>'Member ID','value'=>date('Y-m-d'),'readonly'=>'TRUE');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Return Date</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'r_date','placeholder'=>'Member ID','value'=>date('Y-m-d',strtotime("+7 day")),'readonly'=>'TRUE');
        echo form_input($att);
        ?>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
	 <?php
        echo form_submit(['name'=>'status','value'=>'Borrowed','placeholder'=>'Done','class'=>'btn btn-primary']);
        ?>
	</div>
	</div>
	</div>
	<?php 
		else:?>
		<div class="container">
    <div class="form-group">
      <h1>Book Not Found in Records</h1>
		</div>
		</div>
		</div>
	<?php endif;?>

</body>
</html>