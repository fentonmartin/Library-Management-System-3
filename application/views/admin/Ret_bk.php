<?php
include('Dues_header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<?php link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>

	<div class="container">
		<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/search_dues',$att) ?>
	<legend>Check Dues of Member</legend>
	<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Member ID</label>
      <div class="col-lg-10">
        <?php
       $att = array('type' =>'text' ,'class'=>'form-control','name'=>'mem_id','placeholder'=>'Member ID','value'=>set_value('mem_id'));
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
	if(isset($res)):
	?>
	<div class="container">
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/ret',$att);?>
	<legend>Books Issued</legend>
	<table class="table">
		<thead>
			<tr>
				<th><font size="4">Book ID</font></th>
				<th><font size="4">Book ID</font></th>
				<th><font size="4">Book Name</font></th>
				<th><font size="4">Due Date</font></th>
				<th><font size="4">Action</font></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($res as $result):
		?>
			
			<tr>
				<td><?=$result->bk_id?>
				</td>
				<td><?=$result->borrow_id?>
				</td>
				<td><?=$result->bk_name?>
				</td>
				<td><?=$result->r_date?>
				</td>
				<td>
        <?=anchor("Admin/ret/{$result->borrow_id}",'Return',['class'=>'btn btn-primary']);
        ?></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>

		
	</div>
<?php 
elseif (isset($t)):?>
<h2>No Dues</h2>
<?php endif;?>
</body>
</html>