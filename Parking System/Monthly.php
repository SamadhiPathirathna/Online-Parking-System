<?php

include_once'config.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/myscript.js"></script>
	 <script src="js/search.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Monthly</title>
    <style>
        .wrapper {
            display: flex;
            justify-content: center;
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
            color: #3498db;
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

  <center>
				 <a href="Monthly.php"><button class="btnn" onclick="#">Monthly</button></a><br>
          
    </center>
    <div class="wrapper">
        <div class="search_box">
            <div class="search_btn"><i class="fas fa-search"></i></div>
          <input type="text" class="input_search" id="search" onchange="openpage()" placeholder="What are you looking for?"></a>
        </div>
    </div>
    <hr>


   <center>
   <h3> Monthly Parking Reservations</h3>
   </center>
   <h5>Near Location</h5>
   <h2>Colombo</h2>
   </div>
<div>
Sort by 
<br> 
<hr>
     
     <button id="bt1"onclick="location.href='mcheap.html'">Cheapest</button>
</div>
    <section class="list">
        <div class="container">
		  <?php
		  $sql="SELECT * FROM locations";
		  $result=mysqli_query($conn,$sql);
		  $count=mysqli_num_rows($result);
		  if ($count >0)
		  {  
			  while($row=mysqli_fetch_assoc($result))
			  {
				  $id=$row["Location_Id"];
				  $name=$row["Location_Name"];
				  $desc=$row["Description"];
				  $price2=$row["Monthly_Price"];
				  ?>
				 
				<div class="list-box">
                <div class="img">
                    <img src="image/mall.jfif"  class="img-responsive img-curve">
                </div>
				 <div class="list-desc">
				 
                    <h4><?php echo $name?></h4>
                    <p class="price"><?php echo $price2?></p>
                    <p class="detail"><?php echo $desc?><br>
					   
					   <a href="monthlyreservations2.html"><button class="btnn" onclick="#">Book Now</button></a><br>
				<?php
		  }}
				?>
					   
		     </div>
            </div>
			</p>
		 <div class='clearfix'></div>
        </div>
		  </section>
		 
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.48137402922!2d79.85759417617626!3d6.9061039701576945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259706bfa613f%3A0xf79d7adae85305f7!2sCinnamon%20Gardens%2C%20Colombo!5e0!3m2!1sen!2slk!4v1633350544689!5m2!1sen!2slk" 
  width="1400" height="500" style="border:1;" allowfullscreen="" loading="lazy">
</iframe>

   

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
                            <img src="image/card.png" width="200" height="50" class="left"></a>

                    </div>


                </div>
                <div class="arrow">
                    <a href="index.html"><img src="image/arrow.png"></a>
                </div>
            </div>






    </footer>



</body>

</html>