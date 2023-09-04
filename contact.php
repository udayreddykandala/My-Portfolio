<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-contact.css">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us</title>
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
    
<div class="profile_card">
        <img src="uday.jpeg" alt="profile">
        <button id="toggleBtn" class="toggleBtn"><i class="fas fa-arrow-up"></i></button>
        <div class="info" id="info">
            <ul class="social-icons">
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/udaykumar104"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-github"></i></a>
                </li>
            </ul>
            <h4 class="name">Uday Kumar Reddy Kandala</h4>
            <p class="profession">Full stack Developer</p>
        </div>
    </div>

    <div class="container-mt3">
        <h2>Contact me</h2>
    <form action="contact_process.php" method="POST">
        <div class="mb-3 mt-3">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        </div>
        <div class="mb-3">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        </div>
        <div class="mb-3">
        <label for="message">Message:</label><br>
        <textarea name="message" rows="4" cols="50" required></textarea><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>