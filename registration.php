<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="style-registration.css">
   <!--  <link rel = "stylesheet"href = "style-index.css"> -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Registration</title>
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
<h2>User Registration</h2>
    <form action="register_process.php" method="POST">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text"name="username" required><br><br>
</div>
<div class="form-group">
        <label for="password">Password:</label>
        <input type="password"name="password" required><br><br>
</div>
<div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
</div>
<div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text"name="phone" required><br><br>
</div>
<button type="submit" class="btn btn-primary">Register</button>
    </form>
    <p><h3>Already  have an account? <a href="login.php"><button type="submit"class="btn-btn-primary">Login here</button></a></h3></p>
</div>
</body>
</html>