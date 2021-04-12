<html>
<head>
<title> Invoice Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css"/>
</head>
<body>
<div class="container">
<div class="row col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-heading">
<h1>Employee details</h1>
</div>
<div class="panel-body">
<form action="connect.php" method="post">
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" id="name" name="name"/>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" id="email" name="email"/>
</div>
<div class="form-group">
<label for="address">Address</label>
<input type="text" class="form-control" id="address" name="address"/>
</div>
<div class="form-group">
<label for="contact">Contact</label>
<input type="text" class="form-control" id="contact" name="contact"/>
</div>
<div class="form-group">
<label for="question">Your Question</label>
<input type="text" class="form-control" id="question" name="question"/>
</div>
<div>

<input type="submit" class="btn btn-primary" name="submit" value="submit">
</div>
</form>
</div>
<div class="panel-footer text-right">
<small>&copy; Oretes </small>
</div>
</div>
</div>
</div>
</body>
</html>