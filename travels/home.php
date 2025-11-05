<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['name'])) {
    $userName = $_SESSION['name'];
    $loginTime = date('Y-m-d'); // Format the login time
} else {
    // Redirect to the login page if the user is not logged in
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .user-info{
            margin-top:45px;
        }
        </style>
    <title>Go Trip</title>
</head>

<body>

    <body>

     
        <section class="nav-bar">
            <div class="logo">SV Travels</div>
            <ul class="menu">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href="#">home</a></li>
                <li><a href="packages/packages.php">package</a></li>
                <li><a href="aboutus.php">about us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <div class="user-info">
            <span>Welcome, <?php echo $userName; ?></span><br>
    
            <span>Login Date: <?php echo $loginTime; ?></span>
        </div>
            </div>
            

        </section>
     
        <section class="banner">
            <div class="banner-text-item">
                <div class="banner-heading">
                    <h1>Find your Next tour!</h1>
                </div>
                <form class="form" id="travelForm">
    <input type="text" list="mylist" placeholder="Where would you like to go?" id="destinationInput">
    <datalist id="mylist">
      <option value="Kerala" data-url="packages/kerala-packages.php">
      <option value="Leh Ladakh" data-url="ladakh-packages.php">
      <option value="Jammu & Kashmir" data-url="jammu-kashmir-packages.php">
      <option value="Ooty" data-url="ooty-packages.php">
      <option value="Uttarakhand" data-url="uttarakhand-packages.php">
    </datalist>
    <input type="date" class="date" id="dateInput">
    <a s class="book" onclick="redirectToPackage()">Go</a>
  </form>

            </div>
        </section>
        <section class="places">
            <div class="places-text">
                <small>TOP PACKAGES</small>
                <h2>Best Selling Packages </h2>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="photos/munnar.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Best Couple Packages </h2>
                        <p class="cost">Rs6500/ Per Person</p>
                        <p>Couple Suits Included</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">🚎 Munnar,Kerala</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="photos/lehmain.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Dream Package</h2>
                        <p class="cost">Rs18999 / Per Person</p>
                        <p>38 Members Avilabel in 1 Slot</p>
                        <div class="card-box">
                            <p class="time">🕓 6Days</p>
                            <p class="location">🏍️Leh,Ladhak</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="photos/lfrds.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Ladhak Friends</h2>
                        <p class="cost">Rs22000/ Per Person (Only Friends)</p>
                        <p>Minimum 8 Person</p>
                        <div class="card-box">
                            <p class="time">🕓 6 Days</p>
                            <p class="location">🚎 Chardham, Uttarkhand</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img
                                src="photos/chardham.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Devoties Packages</h2>
                        <p class="cost">Rs12500 / Per Person</p>
                        <p>1Place 2Day stay (2times meal)</p>
                        <div class="card-box">
                            <p class="time">🕓 9 Days</p>
                            <p class="location">🚎 Uttarkhand, India</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="photos/kadernath.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>Kadernath package</h2>
                        <p class="cost">Rs3999 / Per Person</p>
                        <p>No Horse/Helicopter Ride provided</p>
                        <div class="card-box">
                            <p class="time">🕓 3 Days</p>
                            <p class="location">🚎 Gorekund, Uttarkhand</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="zoom-img">
                        <div class="img-card">
                            <img src="photos/karnataka.jpg">
                        </div>
                    </div>

                    <div class="text">
                        <span class="rating">⭐⭐⭐⭐⭐</span>
                        <h2>The Traditional Land</h2>
                        <p class="cost">Rs4870 / Per Person</p>
                        <p>2 time meals provided</p>
                        <div class="card-box">
                            <p class="time">🕓 4 Days</p>
                            <p class="location">🚎 Mysore, Karnataka</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===========About Us===============-->
        <section class="about">
            <div class="about-img">
                <img src="photos/vs.jpg">
            </div>
            <div class="about-text">
                <small>ABOUT US</small>
                <h2>We are SV Travels</h2>
                <p>Welcome to SV Travels! We were founded by Shashin and Varsha during our college years. As team members, our mission is to create a travel packages website that simplifies the journey for solo travelers and those looking to complete their trips on a budget.</p>
                <a href="aboutus.php">ABOUT US</a>
            </div>
        </section>

        <!--===========Footer=================-->
        <div class="footer">
            <div class="links">
                <h3>Quick Links</h3>
                <ul>
                    <li>Offers & Discounts</li>
                    <li>Get Coupon</li>
                    <li>Contact Us</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="links">
                <h3>New Products</h3>
                <ul>
                    <li>Woman Cloth</li>
                    <li>Fashion Accessories</li>
                    <li>Man Accessories</li>
                    <li>Rubber made Toys</li>
                </ul>
            </div>
            <div class="links">
                <h3>Support</h3>
                <ul>
                    <li>Frequently Asked Questions</li>
                    <li>Report a Payment Issue</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
        </div>
        <script>
    function redirectToPackage() {
      var destinationInput = document.getElementById('destinationInput').value;
      var dateInput = document.getElementById('dateInput').value;

      var dataList = document.getElementById('mylist');
      var options = dataList.options;

      for (var i = 0; i < options.length; i++) {
        if (options[i].value === destinationInput) {
          var redirectUrl = options[i].getAttribute('data-url');
          if (redirectUrl) {
            window.location.href = redirectUrl + '?date=' + dateInput;
          }
          break;
        }
      }
    }
  </script>
    </body>

</html>
