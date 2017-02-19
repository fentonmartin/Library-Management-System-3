<?php include('member_header.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
	<div class="container">
	 <?=
        anchor("Member/add_user",'New Member',['class'=>'btn btn-success']);
        ?>
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/ret',$att);?>
	<legend>Members Registerd</legend>
	<table class="table">
		<thead>
			<tr>
				<th><font size="4">Member ID</font></th>
				<th><font size="4">Member Name</font></th>
				<th><font size="4">Account Type</font></th>
				<th><font size="4"><center>Action</center></font></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($res as $result):
		?>
			
			<tr>
				<td><font size="3"><?=$result->member_id?></font>
				</td>
				<td><font size="3"><?=$result->firstname?></font>
				</td>
				<td><font size="3"><?=$result->type?></font>
				</td>
				<td>
					    <div class="form-group">
     					 <div class="col-lg-10 col-lg-offset-2">
        					<?=anchor("Member/edit_user/{$result->member_id}",'Edit',['class'=>'btn btn-info']);?>
        					<?=anchor("Member/delete_user/{$result->member_id}",'Delete',['class'=>'btn btn-danger']);?>	
						</div>
						</div>

				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
	</div>
</body>
</html>
