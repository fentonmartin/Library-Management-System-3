<?php include('user_header.php');?>
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
        anchor("User/add_user",'New User',['class'=>'btn btn-success']);
        ?>
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/ret',$att);?>
	<legend>User's Registered</legend>
	<table class="table">
		<thead>
			<tr>
				<th><font size="4">Registration Number</font></th>
				<th><font size="4">First Name</font></th>
				<th><font size="4">Username</font></th>
				<th><font size="4">Password</font></th>
				<th><font size="4"><center>Action</center></font></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($res as $result):
		?>
			
			<tr>
				</td>
				<td><font size="3"><?=$result->user_id?></font>
				</td>
				<td><font size="3"><?=$result->firstname?></font>
				</td>
				<td><font size="3"><?=$result->username?></font>
				</td>
				<td><font size="3"><?=$result->password?></font>
				</td>
				<td>
					    <div class="form-group">
     					 <div class="col-lg-10 col-lg-offset-2">
        					<?=anchor("User/edit_user/{$result->user_id}",'Edit',['class'=>'btn btn-info']);?>
        					<?=anchor("User/delete_user/{$result->user_id}",'Delete',['class'=>'btn btn-danger']);?>	
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
