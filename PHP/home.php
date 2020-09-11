<!DOCTYPE html>
<html>

<head>
    <title>Gaming Tech</title>
    // <link href="CSS/style welvet.css" rel="stylesheet">
	
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

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
    <div class="side">
        <div class="in-side">
            <div class="image-slider">
                <img src="https://images-na.ssl-images-amazon.com/images/I/71916r38cNL._AC_SL1500_.jpg" id="first">
				<img src="https://mobilemodegaming.s3.ap-south-1.amazonaws.com/wp-content/uploads/2020/04/Top-Best-PUBG-Mobile-Controllers-of-2020.jpg" alt="">
                <img src="https://teckknow.com/wp-content/uploads/2019/02/Logitech-G-Lineup-of-Gaming-Headsets.jpg" alt="">
                <img src="https://image-cdn.essentiallysports.com/wp-content/uploads/20200604143357/Screenshot-2076.jpg" alt="">
				 <img src="https://i.ytimg.com/vi/N3RXEU9NfI0/maxresdefault.jpg" alt="">
				  <img src="https://media.contentapi.ea.com/content/dam/eacom/images/2020/03/stay-play-featured-image.jpg.adapt.crop191x100.628p.jpg" alt="">

            </div>
           
               
                    <ul class="bullet-points">
                        <span  onclick="moveSlide(0)"></span>
                        <span onclick="moveSlide(1)"></span>
                        <span onclick="moveSlide(2)"></span>
                        <span onclick="moveSlide(3)"></span>
                        <span onclick="moveSlide(4)"></span>
                        <span  onclick="moveSlide(5)"></span>
                    </ul>
            <i class="fas fa-long-arrow-alt-left btn" id="prevbtn"></i>
            <i class="fas fa-long-arrow-alt-right btn " id="nextbtn"></i>
        </div>
    <div class="banner" id="line-hope">
        <h3>Welcome to Gaming Tech.Home to the best equipments on the market.Find anything you need anytime!.</h3>
    </div>
    <div class="article-side">
        <div  class="article">
            <img src="https://en.letsgodigital.org/uploads/2020/07/playstation-5.jpg?width=185" alt="PlayStation">
            <p>PlayStation 5</p>
            <p>The PlayStation 5 is a home video game console developed by Sony Interactive Entertainment.</p>
            <h3> Price:499$</h3>
			<h4>Product code:10</h4>
			<p>
			  <a id="special-offer" href="product1.php">View offer</a>
			  </p>
        </div>
        <div class="article">
            <img src="https://cdn.vox-cdn.com/thumbor/UPucga77lT8tqHkB0kW2FavgtFY=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19526256/xboxseriesxconsole.jpg" alt="XBox">
            <p>XBox X</p>
            <p>Xbox Series X is a home video game console developed by Microsoft</p>
            <h3> Price:499$</h3>
            <h4>Product code:72</h4>
			<p>
			  <a id="special-offer" href="product2.php">View offer</a>
			  </p>

        </div>
        <div class="article">
            <img src="https://image-us.samsung.com/SamsungUS/home/computing/monitors/gaming-monitors/pdp/lc24rg50fqnxza/1-CRG5_001_Front_Black.jpg?$product-details-jpg$" alt="Monitor">
            <p>Gaming Monitor</p>
            <p>Gaming monitor 4k from Samsumg.Experience the reality.</p>
            <h3> Price:169$</h3>
            <h4>Product code:137</h4>
			<p>
			  <a id="special-offer" href="">View offer</a>
			  </p>

        </div>
		<div class="article">
            <img src="https://cdn.alzashop.com/ImgW.ashx?fd=f3&cd=JL289e2a4" alt="Headsets">
            <p>Logitech headset</p>
            <p>Logitech G PRO X wireless Gaming Headset.Join the Gaming world. </p>
            <h3> Price:113$</h3>
            <h4>Product code:3</h4>
			<p>
			  <a id="special-offer" href="">View offer</a>
			  </p>

        </div> 
		<div class="article">
            <img src="https://ae01.alicdn.com/kf/HTB1svzeQhTpK1RjSZFMq6zG_VXas/Pro-Gamer-Gaming-Mouse-8D-3200DPI-Adjustable-Wired-Optical-LED-Computer-Mice-USB-Cable-Silent-Mouse.jpg_960x960.jpg" alt="Mouse">
            <p>Pro gaming Mouse</p>
            <p>Pro Gamer Gaming Mouse 8D 3200DPI with adjustabe cable. </p>
            <h3> Price:19$</h3>
           <h4>Product code:73</h4>
		   <p>
			  <a id="special-offer" href="">View offer</a>
			  </p>

        </div>
		
       

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
        <p>Tel: +383445897582</p>
        <p>Email: GamingTech@gmail.com</p>
        <p>Location: Kosovo</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="JavaScript/slider1.js"></script>

</body>

</html>