<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Email System !</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	<div class="container pt-8">
		<h1 class="text-center">Email System with CodeIgniter 4 !!!</h1>
		<div class="row form-group">

			<div class="col-md-2 pt-3"></div>

			<!-- Main content Starts here-->
			<div class="col-md-8 border border-info">
				<form method="post" action="<?= route_to('mail-post') ?>">
					<?= csrf_field() ?>
				<div class="p-4">
				<div class="row">
					<label class="col-md-2 pt-3 pl-2" for="from">From : </label>
					<div class="col-md-8">
						<input class="form-control" id="from" type="email" value="sk1023684@gmail.com" name="from" readonly>
					</div>
				</div>
				<div class="row">
					<label class="col-md-2 pt-3" for="to">To : </label>
					<span class="text-danger">*</span>
					<div class="col-md-8">
						<input class="form-control" id="to" type="email" name="to"  required>
					</div>
				</div>
				<div class="row">
					<label class="col-md-2 pt-3" for="subject">Subject : </label>
					<span class="text-danger">*</span>
					<div class="col-md-8">
						<input class="form-control" id="subject" type="text" name="subject" required>
					</div>
				</div>
				<div class="row">
					<label class="col-md-2 pt-3" for="description">Description : </label>
					<span class="text-danger">*</span>
					<div class="col-md-8">
						<textarea class="form-control" id="description" rows="4" type="text" name="msg" required></textarea>
					</div>
				</div>
				<div class="row text-center pt-3">
					<button class="btn btn-md btn-success" type="submit" name="submit" value="Submit">Send</button>
				</div>
			</div>
		</form>
	</div>
			<!-- main content ends here-->
			<div class="col-md-2 pt-3"></div>
		</div>
</div>
<!-- Latest compiled JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
