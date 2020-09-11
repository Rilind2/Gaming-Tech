<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="CSS/style welvet.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="CSS/product1.css">
</head>

<body>
    <div class="header-parent">
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
    </div>
    <div class="wraper">
        <div class="product-image">
            <section class="main-image">
                <img src="https://static2.srcdn.com/wordpress/wp-content/uploads/2020/06/PS5-On-Its-Side.jpg?width=100" alt="Smartphone">
            </section>

            <div class="nav-image">
                <ul class="nav">
                    <li> <img src="https://cdn.mos.cms.futurecdn.net/qkttBKRkkQbaEcPphdgmoZ-1200-80.jpeg?width=80" alt=""></li>
                    <li><img src="https://static2.srcdn.com/wordpress/wp-content/uploads/2020/06/PS5-On-Its-Side.jpg?width=100" alt=""></li>
                    
                </ul>
            </div>
        </div>
        <div class="main-side">
            <div class="description">
                <h2>PlayStation 5</h2>
                <h4>Company:Sony Interactive Entertainment</h4>
                <p>The PlayStation 5 is an upcoming home video game console developed by Sony Interactive Entertainment. 
				Announced in 2019 as the successor to the PlayStation 4, it is scheduled to launch in late 2020.</p>
                <ul>
                    <li>Storage: 825 GB</li>
                    <li>Memory: 16 GB</li>
                    <li>CPU: 8-core AMD Zen 2, variable frequency, up to 3.5 GHz</li>
					
					<li><h1>Total Price : 499$</h1></li>
					<li><b>Product Code:10</b></li>
                </ul>
            </div>
            
        </div>
    </div>
    <footer>
        <p><strong><a href="https://github.com/Rilind2/Gaming-Tech.git">@2020 - September</a></strong></p>
        <ul>
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a> </li>
            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i></a> </li>
            <li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a> </li>
            <li><a href="https://github.com/"><i class="fab fa-github-square"></i></a> </li>
            <li><a href="https://aboutme.google.com"><i class="fab fa-google-plus-g"></i></a> </li>
        </ul>
        <h4>Contact Information</h4>
        <p>Tel: +38345486957</p>
        <p>Email: gamingtech@hotmail.com</p>
        <p>Location: Kosovo</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="JavaScript/product1.js"></script>
</body>

</html>