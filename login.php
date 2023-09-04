<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "stylesheet" href="style-login.css">
    
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<!-- Fixed-top navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" target="_top" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_top" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" target="_top" href="about.php">About</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" target="_top" href="registration.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_top" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

  <h1>Login</h1>
  <form action="login_process.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
  <p><h4>Don't have an account? <a href="registration.php">Register here</a></h4></p>

    
</body>
</html>

