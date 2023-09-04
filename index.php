<?php
session_start();

// Check if the user is logged in; if not, redirect them to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "stylesheet"href = "style-index.css">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
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

    <!-- Page content goes here -->
        <h1><b><i>Welcome to My portfolio</i></b></h1>
        <h2><b>Why this portfolio?</b></h2>
        <div class="container">
        
        <img src="uday.png" alt="Image Description" class="side-image"></img>
        <p>Through this blog, I aim to share my insights, tips, and best practices in web and full-stack development.
             I believe that continuous learning is key in this ever-evolving field, and I'm excited to contribute to the community of developers and enthusiasts who share my passion.
Thank you for visiting my blog, and I hope you find the content here <a href = "about.php">read more....</a>valuable and informative. Feel free to reach out, connect, or drop a comment—I'd love to hear from you!</p>

    </div>
    <h3><b>Skill Progression</b></h3>
     <div class="container">
     <div class="para">
     <img src="IMG_8999.jpg" alt="Image Description" class="left-image"></img>
  
  <p>In the dynamic world of web development, individuals like Uday shine as beacons of expertise and potential. 
  Uday, a dedicated professional armed with a master's degree and an ardent passion for coding, is on a quest to 
  find the perfect opportunity to showcase his talents and propel his career to new heights.
  With a solid academic foundation, Uday embarked on his journey by completing his master's degree. However, 
  he didn't stop there. Uday's insatiable thirst for knowledge and improvement led him to pursue certifications 
  in Java and ISTQB, showcasing his commitment to excellence and his desire to stay at the forefront of the industry.
  You can just <a href = "contact.php">contact me here...</a>
  </p>
</div>
</div>
  <h3><b>Mastering the Craft:</b></h3>
  <div class= "container">
  <img src = "IMG_4086 2.jpg" alt="Image Description" class="side-image"></img>
  
  <p>Uday's technical prowess is a sight to behold. Proficient in both Java and PHP, he embodies the versatility 
  required of a full stack developer. His knack for crafting seamless user experiences is complemented by his ability 
  to navigate the intricacies of back-end development. This dual expertise enables Uday to bridge the gap between the user
   interface and the underlying systems, creating cohesive digital landscapes.</p>
</div>
<h3><b>ISTQB Certified: A Mark of Quality:</b></h3>
<div class="container">
     <div class="para">
     <img src="IMG_6253.jpg" alt="Image Description" class="left-image"></img>
  
  <p>Uday's ISTQB certification stands as a testament to his dedication to delivering high-quality software. 
  This coveted certification not only validates his proficiency in software testing but also demonstrates his 
  commitment to ensuring that every project he touches is nothing short of exceptional.
  Uday's journey isn't solely defined by lines of code. His desire to excel extends to personal growth and career 
  advancement. With each project he undertakes, he seeks not only to solve technical challenges but also to surpass 
  his own limits. Uday envisions a role that provides him with ample opportunities to leverage his skills and contribute 
  to projects that leave a lasting impact.</p>
</div>
</div>
<h3><b>Following the passion </b></h3>
<div class= "container">
  <img src = "IMG_4706.jpg" alt="Image Description" class="side-image"></img>
  
  <p>As Uday continues his job search, his passion and skillset are sure to set him apart in a crowded field. His aspirations 
  to find a role that not only values his technical prowess but also encourages his growth resonate with those who understand the 
  importance of a supportive and progressive work environment.In conclusion, Uday's journey as a Java and PHP full stack developer is an inspiring tale of dedication, expertise,
   and ambition. With his academic achievements, certifications, and technical skills, Uday is poised to make a significant 
   mark in the web development landscape. As he seeks the perfect opportunity to showcase his talents, Uday's story serves as a
    reminder that the pursuit of excellence is a journey with no limits.</p>
</div>
</div>
  <p><b>Note:</b> This is a fictional blog post created based on the information you provided. Feel free to modify and personalize it 
  according to your preferences and actual experiences.</p>
  </paragraph>
  </div>
   

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src ="index.js"></script>

</body>
</html>

