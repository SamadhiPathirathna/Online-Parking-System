<?php
include('config.php');
session_start();
if(isset($_POST['login'])){


   $email=$_POST['txte'];
   $pwd=($_POST['txtp']);

   $query="SELECT * FROM loginform WHERE email='$email' AND password='$pwd'";
   $result=mysqli_query($conn,$query);

   $num=mysqli_fetch_array($result);
   if($num>0){
       $_SESSION['email']=$email;
       header('location:index.php');
   }else{
       echo "invalid";
   }
}
?>








<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylee.css">
  

    <title>LOG-IN</title>
    <style>
        .wrapper {
            display: flex;
        
            align-items: center;
        }
        
        .search_box {
            position: relative;
            padding: 15px;
            border-radius: 50px;
            display: flex;
        }
        
        .search_box .search_btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #60b4df;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            margin-right: 15px;
            cursor: pointer;
        }
        
        .search_box .input_search {
            outline: none;
            border: 0;
            background: #60b4df;
            border-radius: 50px;
            padding: 15px 20px;
            width: 300px;
            height: 50px;
            color: #fff;
        }
        
         ::placeholder {
            color: #fff;
        }
        
         ::-webkit-input-placeholder {
            color: #fff;
        }
        
         :-ms-input-placeholder {
            color: #fff;
        }
        
        .left {
            display: block;
            margin-left: 100;
            margin-right: auto;
        }
        
        .right {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .p1 {
            text-align: center;
            color: darkcyan;
        }
        
        .p2 {
            text-align: center;
            color: firebrick;
            font-size: small;
        }
        
        .p3 {
            color: firebrick;
            font-size: small;
            font-size: 1;
        }
        
        .container,
        .btn1 {
            background: none;
            padding: 6px 15px;
            font-size: 15px;
            font-family: "montserrat";
            color: #817d66;
            margin: 5px;
            transition: 0.4s;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .btn1:hover {
            color: #fff;
        }
        
        .btn1::before {
            content: "";
            position: absolute;
            left: 0px;
            width: 100%;
            height: 0%;
            background: #3498db;
            z-index: -1;
            transition: 0.4s;
        }
        
        .btn1:hover::before {
            height: 250%;
        }
        
        .btn1::before {
            top: 0;
            border-radius: 0 0 60px 60px;
        }
        /* arrow */
        
        .arrow {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 40px;
            height: 40px;
            line-height: 50px;
            text-align: center;
            cursor: pointer;
            background: #fb2274;
            border-radius: 50%;
        }
        
        .arrow img {
            width: 20px;
            height: 20px;
            z-index: 1;
        }

  

.wrapper{
    background: url("image/pic-10.jpeg  " );
    background-size: inherit;
    min-height: 50vh;
    height: 50px;
    width: 1350px;
  
}
.main-image {
    display: block;
    margin: 0 auto;
    width: 1200px;
    height: 500px;
    transition: 0.3s;
    object-fit: cover;
}



    </style>
</head>

<body>

    <header>

        <div class="container">

            <div class="logo-container">
                <img src="image/IMG.jpeg" width="100" height="50" class="left"> &nbsp;
                <h3 class="logo">Ez-<span>Park</span></h3>
            </div>
            
            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="AHome.html"><u>HOME</u></a>
                        </li>

                        <li class="nav-link" style="--i: 1.35s">
                            <a href="Help.html"><u>HELP</u></a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="GENERAL INFORMATION.html"><u>ABOUT</u></a>
                        </li>

                    </ul>
                </div>


                <div class="log-sign" style="--i: 1.8s">
                    <a href="login.php" class="btn transparent">Log in</a>
                    <a href="singup.php" class="btn solid">Sign up</a>
                    <img src="image/logo.png" width="60" height="60" class="right"> &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
    </header>
 
<br><br>
    <center>
       <h1> LOGIN</h1>
      <form method="post" action="">
    <p>EMAIL</p> 
    <input type="email" name="txte" placeholder="myemail@gmail.com">
       <p> PASSWORD</p>
      
        <input type="password" name="txtp" placeholder="password" > <br> <a href ="forget.php">forget password</a>
        
       <br> <br> <input type="submit" name="login" value="login"><br>
       </center>  
            
</form>
    </form>
    
 <br><br><br><br>
   


    
    

        
    
   
 



    <footer class="footer">

        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>GET US ON</h4>
                    <ul>
                        <a href="https://play.google.com/store/apps">
                            <img src="image/play.png" width="150" height="60" class="left"></a> <br>

                        <a href="https://www.apple.com/app-store/">
                            <img src="image/apps.png" width="150" height="60" class="left"></a><br>
                        <div class="p3">
                            <p>Ezpark.2021.All Right Reserved</p>
                        </div>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Quick-links</h4>
                    <ul>
                        <li><a href="AHome.html"><U>HOME</U></a></li>
                        <li><a href="Contact Us.html"><U>CONTACT US</U></a></li>
                        <li><a href="GENERAL INFORMATION.html"><U>ABOUT</U></a></li><br>

                </div>


                <div class="footer-col">
                    <h4>follow-us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/login.php"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://accounts.google.com/login?service=mail&lp=1
                        "><i class="fab fa-google"></i></a>
                        <a href="https://www.instagram.com/accounts/login"><i class="fab fa-instagram"></i></a>


                    </div>

                </div>
                <div class="footer-col">

                    <div class="social-links"><br>
                        <img src="image/IMG.jpeg" width="100" height="50" class="left"> <br> <br><br><br>
                        <a href="https://sdg2.mastercard.com">
                            <img src="image/card.png" width="180" height="50" class="left"></a>

                    </div>


                </div>
                <div class="arrow">
                    <a href="login.php"><img src="image/arrow.png"></a>
                </div>
            </div>






    </footer>



</body>

</html>