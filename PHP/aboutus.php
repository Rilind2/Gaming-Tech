<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="CSS/style welvet.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/contact-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

</head>
<body>
    <div class="header">
        <h1>Gaming Tech</h1>
        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contact.php">Contact/Order</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <?php if(isset($_SESSION['name'])) : ?>
                <li style="width:200px">Welcome, <?php echo $_SESSION['name']?><a href="logout.php">Logout</a></li>
                <?php else : ?>
                <li><a href="login-register.php">Login</a></li>
                <?php endif ?>

            </ul>
        </div>
    </div>
		<br/><br/><br/><br/><br/><br/><br/>
	 <div class="about-content">
        
	
    <?php
    require './controller/AboutUsController.php';

    $abouts = new AboutUsController;
    $about_us = $abouts->getById(1);
    
    ?>
    <div class="about-content">
        <p><?php echo $about_us['a_welcome']?></p>
        <p><?php echo $about_us['a_description']?></p>
        <p><?php echo $about_us['a_message']?></p>
        </div>
        <footer>
            <p><strong><a href="https://github.com/Rilind2/Gaming-Tech.git">@2020 - September</a></strong></p>
            <ul>
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a> </li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a> </li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a> </li>
                <li><a href="https://github.com/"><i class="fab fa-github-square"></i></a> </li>
                <li><a href="https://aboutme.google.com/"><i class="fab fa-google-plus-g"></i></a> </li>
            </ul>
            <h4>Contact Information</h4>
            <p>Tel: +38344122122</p>
            <p>Email: GamingTech@gmail.com</p>
            <p>Location: Kosovo</p>
        </footer>
</body>
</html>