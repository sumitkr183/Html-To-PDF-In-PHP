<!DOCTYPE html>
<html>
<head>
	<title>HTML To PDF</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<h2 class="text-center">HTML TO PDF</h2>
			<div class="col-md-4 col-md-offset-4">
				<form method="post" action="pdf.php">
					<div class="form-group">
						<label>Full Name :</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email Address :</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone Number :</label>
						<input type="text" name="phone" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Message :</label>
						<textarea class="form-control" name="message"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Get PDF</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>