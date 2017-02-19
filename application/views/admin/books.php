<?php include('Book_header.php');?>
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
        anchor("Book/add_book",'New Book',['class'=>'btn btn-success']);
        ?>
	<?php	$att = array('class' =>'form-horizontal');
		echo form_open('Admin/ret',$att);?>
	<legend>Books Available</legend>
	<table class="table">
		<thead>
			<tr>
				<th><font size="4">Book ID</font></th>
				<th><font size="4">Book Name</font></th>
				<th><font size="4">Author</font></th>
				<th><font size="4"><center>Action</center></font></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($res as $result):
		?>
			
			<tr>
				<td><font size="3"><?=$result->book_id?></font>
				</td>
				<td><font size="3"><?=$result->book_title?></font>
				</td>
				<td><font size="3"><?=$result->author?></font>
				</td>
				<td>
					    <div class="form-group">
     					 <div class="col-lg-10 col-lg-offset-2">
        					<?=anchor("Book/edit_book/{$result->book_id}",'Edit',['class'=>'btn btn-info']);?>
        					<?=anchor("Book/delete_book/{$result->book_id}",'Delete',['class'=>'btn btn-danger']);?>	
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
