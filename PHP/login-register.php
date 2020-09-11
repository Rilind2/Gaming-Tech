
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="CSS/Login-Register-style.css" rel="stylesheet" type="text/css">
	 <link href="CSS/style welvet.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    
</head>

<body>
<br/><br/>

    <?php
     require 'controller/loginController.php';
     require 'controller/userController.php';

     $user = new LoginController();
     $userReg = new UserController;
     if (isset($_POST['submited'])) {
        if(!empty($_POST['Lemail']) && !empty($_POST['Lpassword'])){
           $user->login($_POST);
       }
   else{
       echo "All fields are required!"; 
   }
    }
     if(isset($_POST['submitedRegister'])){ 
        
    if(!empty($_POST['Rname']) && !empty($_POST['Rlastname']) && !empty($_POST['Remail']) && !empty($_POST['Rpassword'])){
               $user->store($_POST);
       }
   else{
       echo "All fields are required!";
   }	
        
    }
    
    ?>
	<div class="header">
        <h1>Gaming Tech</h1>
        <div class="nav">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contact.php">Contact/Order</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <?php if(isset($_SESSION['name'])) : ?>
				<li><a href="requests.php">Requests</a></li>
                <li style="width:200px">Welcome, <?php echo $_SESSION['name']?><a href="logout.php">Logout</a></li>
                <?php else : ?>
                <li><a href="login-register.php">Login</a></li>
                <?php endif ?>

            </ul>
        </div>
    </div>
    <div class="main-content" id="main">
        <div class="box1">
            <header>
                <button id="h4-1">Login</button>
                <button id="h4-2">Register</button>
            </header>
            <div class="box1-content" id="login-form">
                <form action="" method="POST" id="Login-form">
                <input type="email" name="Lemail" placeholder="Email" id="emailL"/>
                <span id="loginEmailError">asdas</span>
                <input type="password" name="Lpassword" placeholder="Password" id="passwordL">
                <span id="loginPasswordError">asdas</span>
                <input type="submit" name="submited" placeholder="Login" value="Login" id="submitLogin" class="submit" style="background-color: rgb(33, 95, 219);height: 45px; text-align: center;width:100%">
               </form>
            </div>
        
            <div id="register-form" class=" box1-content">
                <form action="" method="POST" id='Reg-form'>
                <input type="text" name="Rname" placeholder="Name" id="nameR" >
                <span  id="nameError">asd</span>
                <input type="text" name="Rlastname" placeholder="Last Name" id="lastnameR" >
                <span id="lastnameError">asd</span>
                <input type="email" name="Remail" placeholder="Email" id="emailR">
                <span id="emailError">asdasd</span>
                <input type="password" name="Rpassword" placeholder="Password" id="passwordR">
                <span id="passwordError">asd</span>
                <input type="submit" name="submitedregister" value="Register" id="submitReg" >
            </form>
            </div>
        </div>
    </div>
    <script src="Javascript/script1.js" type="text/javascript"></script>
    <script src="Javascript/jQuery.js" type="text/javascript"></script>
</body>

</html>