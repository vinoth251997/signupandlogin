<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login=box">
        <div class="row">
            <div class="col-md-6">
                <h2>Login Here </h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</dic>
<label>password</label>

<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Login</button>



</form>
</div>
<div class="col-md-6">
                <h2>register Here </h2>
                <form action="reg.php" method="post">
                    <div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</dic>
<label>password</label>

<input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">register</button>

</div>
    
</body>
</html>