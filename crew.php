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
   
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="common.css">
        <title>Document</title>
        
    </head>
    <body>
        <nav style="top:0">
            <ul>
              <img style="width: 200px; height: 35px; margin:0px  30px ;" src="images/newapex.png" alt="">
    
    
              <a style="text-decoration: none;" href="index.php" ><li style="color: white; background-color: #234b9e;">HOME <ion-icon name="home-outline" style="margin: 0px 0px 2px 6px;"></ion-icon></li></a>
    
    
              <a style="text-decoration: none;" href="#about"><li>ABOUT<ion-icon style="margin: 0px 0px 0px 6px; color: #234b9e;"name="information-circle-outline"></ion-icon></li></a>
    
    
              <a style="list-style: none; text-decoration: none;   border-radius: 25px;" href="admin.php" class="signin"><li style=" display: flex; justify-content: center;align-items: center;"><?= htmlspecialchars($user["name"]) ?><ion-icon style="padding:0px 0px 0px 5px; color: #234b9e;" name="log-out-outline"></ion-icon></li></a> 
    
    
            </ul>
        </nav>
    
        <div class="display-info"  style="padding-top : 100px">
            <div class="intro-info">
                <div class="image-info">
                    <img  src="images/new posters/crew.avif" alt="">
                </div>
                <div class="information">
                    <div class="part1">
                        <h2 id="header">CREW</h2>
                        <p id="cost">190 Rs</p>
                        <p>2h 04m • Comedy • UA </p>
                        <p> हिन्दी (3D)</p>
                        <p style="margin: 10px 0px;"><b>Release Date</b> :  1 June, 2024</p>
                        
                        
                    </div>
                    <div class="part2">
                        <a href="https://youtu.be/3uvfq4Cu8R8?si=KR4rrSONDWWouGvY"><button id="submit">Watch trailer</button></a>
                    </div>
                </div>
            </div>
    
            <div class="about-section">
                <h1>About</h1>
                <p>
                    Three ordinary air hostesses from Mumbai set out on a journey to chase their dreams, only to find themselves entangled in unforeseen misfortunes along the way.
                </p>
            </div>
    
            <div class="cast-crew">
                <h1>Cast</h1>
                <div class="cast">
                    <div class="cast-info">
                        <img src="images/cast/crew/Tabu.avif" alt=""> 
                        <h3>Tabu</h3>  
                        <p style="font-size: 10px; color: grey;">Actress</p>
                    </div>
                    <div class="cast-info">
                        <img src="images/cast/crew/Kareena-Kapoor-Khan.avif" alt="">
                        <h3>Kareena Kappor</h3> 
                        <p style="font-size: 10px; color: grey;">Actor</p>
                    </div>
                    <div class="cast-info">     
                        <img src="images/cast/crew/kri-0fea9940-8eae-11ed-bd95-b7350954b20c.avif" alt="">
                        <h3>Kriti Sanon</h3> 
                        <p style="font-size: 10px; color: grey;">Actress</p>
                    </div>
                    <div class="cast-info">
                        <img src="images/cast/crew/Diljit-Dosanjh.avif" alt="">
                        <h3>Diljit Dosanjh</h3> 
                        <p style="font-size: 10px; color: grey;">Actor</p>
                    </div>
                    <div class="cast-info">
                        <img src="images/cast/crew/kapil-3f0fd490-b8ef-11ed-b550-35cfc7a73d37.avif" alt="">
                        <h3>Kapil Sharma</h3> 
                        <p style="font-size: 10px; color: grey;">Actor</p>
                    </div>
                </div>
                
            </div>
        </div>
    
    
    
        <footer id="about">
            <div class="description">
                <img  src="images/newapex.png" style="width: 200px; margin-top: 5px;" alt="">
                <div class="informations" style="font-size: 15px;">
                    <br>
                    Welcome to Apex Theater, your premier destination for cinematic experiences in Nashik. Immerse yourself in state-of-the-art facilities, comfortable seating, and a wide selection of the latest blockbuster movies.<br> Join us for an unforgettable journey into the world of cinema."Experience the magic of movies at Apex Theater, where entertainment meets excellence. Located in the heart of Nashik, our theater boasts cutting-edge technology, plush seating, and a welcoming atmosphere for movie lovers of all ages. Discover the joy of cinema with us today.
                    <br>
                    <br>
                    © 2024 All rights reserved
                </div>
            </div>
            <div class="otherLinks">
                <h1 style="color: #234b9e;">Contact</h1>
                <br>
                <p>PHONE </p>
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
                <br>
                Apex Theater, A Division of Apex Arts Ltd, Apex House, Behind Whistling Woods Institute, Filmcity Complex, Canada Corner, Nashik - 411 112
                <div class="bms" style="display: flex;margin-top: 37px; align-items: center;">
                    <span>Powered By : &nbsp; </span>
                    <img src="images/bms-logo-light.webp" alt="">
                </div>
                
            </div>
          </footer>
        
        <script>
            const title = document.getElementById("header")
            const buttons = document.getElementById("submit")
            const timingss1 = document.getElementById("timings1")
            const timingss2 = document.getElementById("timings2")
            const timingss3 = document.getElementById("timings3")
            const cost = document.getElementById("cost")
             
    
            buttons.addEventListener('click',function(e){
                
    
                const titlename = title.innerText;
                const totalCost = cost.innerText;
                const time1 = timingss1.innerText 
                const time2 = timingss2.innerText  
                const time3 = timingss3.innerText 
                console.log(time1);
    
                localStorage.setItem('title',titlename)
                localStorage.setItem('cost',totalCost)
                localStorage.setItem('time1',time1)
                localStorage.setItem('time2',time2)
                localStorage.setItem('time3',time3)
    
                window.location.href = "index.html";
            })
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
 
