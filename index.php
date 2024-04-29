<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    
    <?php if (isset($user)): ?>
        
        
        
<head>
   
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
          <img style="width: 200px; height: 35px; margin:0px  30px ;" src="images/newapex.png" alt="">


          <a style="text-decoration: none;" href="#image" ><li style="color: white; background-color: #234b9e;">HOME <ion-icon name="home-outline" style="margin: 0px 0px 2px 6px;"></ion-icon></li></a>


          <a style="text-decoration: none;" href="#about"><li>ABOUT<ion-icon style="margin: 0px 0px 0px 6px; color: #234b9e;"name="information-circle-outline"></ion-icon></li></a>


          <a style="list-style: none; text-decoration: none;   border-radius: 25px;" href="admin.php" class="signin"><li style=" display: flex; justify-content: center;align-items: center;">Hello, <?= htmlspecialchars($user["name"]) ?><ion-icon style="padding:0px 0px 0px 5px; color: #234b9e;" name="log-out-outline"></ion-icon></li></a> 

          <a style="list-style: none; text-decoration: none;   border-radius: 25px;" href="logout.php" class="signin"><li style=" display: flex; justify-content: center;align-items: center;">LOG OUT<ion-icon style="padding:0px 0px 0px 5px; color: #234b9e;" name="log-out-outline"></ion-icon></li></a> 


        </ul>
    </nav>
    <div class="images">
        <div class="inner" id="image" >
            <img class="image" width="95%"  src="images/bademiya.avif" alt="">
            <img class="image" width="95%"  src="images/maiddan.avif" alt="">
            <img class="image" width="95%"  src="images/omen.avif" alt="">            
        </div>
    </div>
    <div class="options" >
        <div class="option1 option"><a href="#Now">Showing</a></div>
        <div class="option2 option"><a href="#upcomming">Upcomming</a></div>
        <div class="option3 option"><a href="#trailer">Trailers</a></div>
        <div class="option3 option"><a href="#offers">Offers</a></div>
    </div>
    
    <h1 style="margin:30px 0px 5px 17px; font-family: Merienda, cursive;" id="Now" >Now Showing</h1>
    <div class="movies">
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/et00109952-xwauyplnlp-portrait.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Maidaan</h2>
                    <p class="time">3h 1m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">2D</p>
                </div>
                <a href="maidaan.php"><button class="book">Book</button></a>
            </div>
        </div>
        
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/savarkar.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Svatantra Veer Savarkar</h2>
                    <p class="time">2h 58m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">2D</p>
                </div>
                <a href="savarkar.php"><button class="book">Book</button></a>
            </div>
        </div>
        
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/et00322647-xccudsrenu-portrait.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Bade Miyaan<br> Chote Miyaan</h2>
                    <p class="time">2h 41m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">2D</p>
                </div>
                <a href="bmcm.php"><button class="book">Book</button></a>
            </div>
        </div>
    </div>




<h1 style="margin:20px 0px 10px 17px; font-family: Merienda, cursive;" id="upcomming">Popular Upcommings</h1>
    <div class="upcomming">
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/godzilla.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Godzilla x Kong:The New Empire</h2>
                    <p class="time">1h 54m (UA)</p>
                    <p class="language">English/Hindi(Dub)</p>
                    <p class="quality">3D</p>
                </div>
                <a href="godzilla.php"><button class="book">Review</button></a>
            </div>
        </div>
        
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/crew.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Crew</h2>
                    <p class="time">2h 4m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">2D</p>
                </div>
                <a href="crew.php"><button class="book">Review</button></a>
            </div>
        </div>
        
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/madgoan.webp" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Madgoan Express</h2>
                    <p class="time">2h 25m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">2D</p>
                </div>
                <a href="madgoan.php"><button class="book">Review</button></a>
            </div>
        </div>
        <div class="container">
            <div class="poster">
                <img width="100%" src="images/posters/appu.avif" alt="">
            </div>
            <div class="info">
                <div class="head">
                    <h2 class="name">Appu</h2>
                    <p class="time">1h 15m (UA)</p>
                    <p class="language">Hindi</p>
                    <p class="quality">3D</p>
                </div>
                <a href="appu.php"><button class="book">Review</button></a>
            </div>
        </div>
    </div>




    <h1 style="margin:20px 0px 10px 17px; font-family: Merienda, cursive;">Trailers</h1>

    
        <div class="trailers" id="trailer">
            <iframe style="border-radius: 25px;" src="https://www.youtube.com/embed/tZMkLuvLfbg?si=rERI_HZJyPZhqSlh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" src="https://www.youtube.com/embed/LQpxMRwS_bU?si=JvlEcLZiY8QslZWC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" src="https://www.youtube.com/embed/Yxe-mIVIwM4?si=uwj9rPbKvyRiqeOu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" src="https://www.youtube.com/embed/IGzLHNPO4QI?si=A5c4ZffzU2Qb02Lq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" width="560" height="315" src="https://www.youtube.com/embed/qqrpMRDuPfc?si=B__iaX1xNTQ8SNn0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" width="560" height="315" src="https://www.youtube.com/embed/3uvfq4Cu8R8?si=oDkrHzcUYrbR2E3-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" width="560" height="315" src="https://www.youtube.com/embed/B7VP47oCZfE?si=Mdww1H3Mts-yrUYr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe style="border-radius: 25px;" width="560" height="315" src="https://www.youtube.com/embed/X10oGrVu-7M?si=CR_7AF6pugoMSdlB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <!-- Add more iframe elements for additional trailers -->
          
      </div>
      <div class="controls">
        <button onclick="prevTrailer()">Previous</button>
        <button onclick="nextTrailer()">Next</button>
      </div>


      <h1 id="offers" style="margin:20px 0px 10px 17px; font-family: Merienda, cursive;">Offers</h1>
      <div class="offers" >
        <div class="offer">
            <div class="offerImage">
                <img src="images/offers/11508_SHVQaMYB.avif" alt="">
            </div>
            <div class="offerInfo">
                <h3 class="offerHeading">Federal Bank - Debit Card Buy 1 Get 1</h3>
                <div class="offerAccess">
                    <p class="validity">Valid till: <b>Wed, Dec 31, 2025</b></p>
                    <button>View</button>
                </div>
                
            </div>
        </div>

        
        <div class="offer">
            <div class="offerImage">
                <img src="images/offers/flashco.jpg" alt="">
            </div>
            <div class="offerInfo">
                <h3 class="offerHeading">Flash.co- Flat 50 % cash back on PVR INOX Passport</h3>
                <div class="offerAccess">
                    <p class="validity">Valid till: <b>Fri, May 31, 2024</b></p>
                    <button>View</button>
                </div>
                
            </div>
        </div>


        <div class="offer">
            <div class="offerImage">
                <img src="images/offers/axisbank.avif" alt="">
            </div>
            <div class="offerInfo">
                <h3 class="offerHeading">Axis Bank Business Supreme Debit Card- Buy 1 Get 1</h3>
                <div class="offerAccess">
                    <p class="validity">Valid till: <b>Wed, Dec 31, 2025</b></p>
                    <button>View</button>
                </div>
                
            </div>
        </div>


        <div class="offer">
            <div class="offerImage">
                <img src="images/offers/b1g1.avif" alt="">
            </div>
            <div class="offerInfo">
                <h3 class="offerHeading">Federal Bank Signet/Imperio Credit Card 1+1</h3>
                <div class="offerAccess">
                    <p class="validity">Valid till: <b>Sun, Jun 30, 2024</b></p>
                    <button>View</button>
                </div>
                
            </div>
        </div>

      </div>




      <footer id="about">
        <div class="description">
            <img  src="images/newapex.png" style="width: 200px; margin-top: 5px;" alt="">
            <div class="informations" style="font-size: 15px;">
                Welcome to Apex Theater, your premier destination for cinematic experiences in Nashik. Immerse yourself in state-of-the-art facilities, comfortable seating, and a wide selection of the latest blockbuster movies.<br> Join us for an unforgettable journey into the world of cinema."Experience the magic of movies at Apex Theater, where entertainment meets excellence. Located in the heart of Nashik, our theater boasts cutting-edge technology, plush seating, and a welcoming atmosphere for movie lovers of all ages. Discover the joy of cinema with us today.
                <br>
                <br>
                © 2024 All rights reserved
            </div>
        </div>
        <div class="otherLinks">
            <h1 style="color: #234b9e;">Contact</h1>
            <p>Phone</p>
            <p>+91 99130 30137</p>
            <p>0253 1233 2132</p>
            <p>apexmovies@gmail.com</p>
            <div class="appicons" style="margin-top: 20px;">
                <img width="100px" src="images/Google Play.c5689d4f9b55e58a8076b39af11d5ab9.svg" alt="">
                <img width="100px" src="images/App Store.537219f079dde0437e2c8e0e3ec2162d.svg" alt="">
            </div>
        </div>
        <div class="address">
            <h1 style="color: #234b9e;">Address</h1>
            Apex Theater, A Division of Apex Arts Ltd, Apex House, Behind Whistling Woods Institute, Filmcity Complex, Canada Corner, Nashik - 411 112
            <div class="bms" style="display: flex;margin-top: 37px; align-items: center;">
                <span>Powered By : &nbsp; </span>
                <img src="images/bms-logo-light.webp" alt="">
            </div>
            
        </div>
      </footer>





</body>
</html>



<script>
     document.addEventListener("DOMContentLoaded", function () {
          // Get all image elements and store them in an array
          const images = document.querySelectorAll(".image");
          
          let currentIndex = 0;
      
          function showImage(index) {
            // Hide all images
            images.forEach(image => image.style.opacity = 0);
      
            // Show the current image
            images[index].style.opacity = 1;
          }
      
          function cycleImages() {
            // Increment index and reset to 0 if it exceeds the number of images
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
          }
      
          // Initial display
          showImage(currentIndex);
      
          // Set an interval to cycle images every 3 seconds (adjust as needed)
          setInterval(cycleImages, 3000);
        });


        let currentTrailer = 0;
const trailers = document.querySelectorAll('.trailers iframe');

function showTrailer(index) {
  trailers.forEach((trailer, idx) => {
    if (idx === index) {
      trailer.style.display = 'block';
    } else {
      trailer.style.display = 'none';
    }
  });
}

function nextTrailer() {
  currentTrailer = (currentTrailer + 1) % trailers.length;
  showTrailer(currentTrailer);
}

function prevTrailer() {
  currentTrailer = (currentTrailer - 1 + trailers.length) % trailers.length;
  showTrailer(currentTrailer);
}

showTrailer(currentTrailer);
</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    