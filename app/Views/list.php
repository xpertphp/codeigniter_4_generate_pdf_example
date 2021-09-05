<!DOCTYPE html>
<html>
<head>
  <title>CodeIgniter 4 Pagination Example Tutorial - XpertPhp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>List Student</h2>
			</div>
			<div class="col-md-3">
				<a class="btn btn-dark" href="<?php echo site_url('student/convertToPdf') ?>">
					Convert to PDF
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<table class="table table-bordered">
				 <thead>
					<tr>
					   <th>Id</th>
					   <th>First Name</th>
					   <th>Last Name</th>
					   <th>Email</th>
					   <th>Mobile</th>
					</tr>
				 </thead>
				 <tbody>
					<?php if($students): ?>
					<?php foreach($students as $student): ?>
					<tr>
					   <td><?php echo $student['id']; ?></td>
					   <td><?php echo $student['first_name']; ?></td>
					   <td><?php echo $student['last_name']; ?></td>
					   <td><?php echo $student['email']; ?></td>
					   <td><?php echo $student['mobile']; ?></td>
					</tr>
				   <?php endforeach; ?>
				   <?php endif; ?>
				 </tbody>
			   </table>
			</div>
		</div>
	</div>
</body>
</html>