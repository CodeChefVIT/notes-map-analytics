<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.grid.css">
    <link rel="stylesheet" type="text/css" media="screen" href="first_page_css.css">
    <title>NOTES MAP ANALYTICS</title>
</head>
<body>

    <!-- ----------------nav - bar ---------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "nav">
        <img src="vitlogo_white.png" class="logo">
        <a class="navbar-brand" href="#">NOTES MAP ANALYTICS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <!------------------login-form---------------------->
      <div class="container">
        <form method="post" action = "php.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" required id="InputEmail" name ="user" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" required id="InputPassword" placeholder="Password">
            </div>
            </h1>
            <input type = "submit" class="btn btn-primary"></button>
        </form>
      </div>
      </body>
</html>