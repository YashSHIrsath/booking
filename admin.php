

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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin-Page</title>
        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
    
        <nav style="top: 0;">
            <ul>
              <img style="width: 200px; height: 35px; margin:0px  30px ;" src="images/newapex.png" alt="">
    
    
              <a style="text-decoration: none;" href="index.php" ><li style="color: white; background-color: #234b9e;">HOME <ion-icon name="home-outline" style="margin: 0px 0px 2px 6px;"></ion-icon></li></a>
    
    
              <a style="text-decoration: none;" href="#about"><li>ABOUT<ion-icon style="margin: 0px 0px 0px 6px; color: #234b9e;"name="information-circle-outline"></ion-icon></li></a>
    
    
              <a style="list-style: none; text-decoration: none;   border-radius: 25px;" href="" class="signin"><li style=" display: flex; justify-content: center;align-items: center;">Hello, <?= htmlspecialchars($user["name"]) ?><ion-icon style="padding:0px 0px 0px 5px; color: #234b9e;" name="log-out-outline"></ion-icon></li></a> 
    
              <a style="list-style: none; text-decoration: none;   border-radius: 25px;" href="logout.php" class="signin"><li style=" display: flex; justify-content: center;align-items: center;">LOG OUT<ion-icon style="padding:0px 0px 0px 5px; color: #234b9e;" name="log-out-outline"></ion-icon></li></a> 
    
    
            </ul>
        </nav>
        <div class="main" style="padding-top: 100px;">
            <div class="header" style="background-color: black; display: flex; flex-direction: column;
            align-items: center; width: 90%;">
                <div class="profile-container" onclick="chooseFile()">
                    <input type="file" class="file-input" id="fileInput" accept="image/*" onchange="displayImage(event)">
                    <img id="profileImg" src="#" alt="Profile Picture">
                    
                </div>
                
                
                <div class="remove-container">
                    <button class="add-button" onclick="chooseFile()">Add Profile Picture</button>
                    <button class="remove-button" onclick="removeImage()">Remove</button>
                </div>
    
                <p style=" color: white; font-size: 20px;">Hi, <?= htmlspecialchars($user["name"]) ?></p>
            </div>
    
            <div class="profile" style="width: 90%; background-color: #fff; padding: 40px 20px;">
                <h1>Personal Information</h1>
                <p  style="margin-top: 20px;">Username : <?= htmlspecialchars($user["name"]) ?></p>
                <p style="margin-top: 20px;">Email : <?= htmlspecialchars($user["email"]) ?></p>
                <p style="margin-top: 20px;">Mobile Number : <?= htmlspecialchars($user["mobile"]) ?></p>
            </div>
        </div>
    
    
        <script>
            // Check if profile picture is saved in localStorage and display it
            var savedImage = localStorage.getItem('profileImage');
            if (savedImage) {
                document.getElementById('profileImg').src = savedImage;
            }
        
            function chooseFile() {
                document.getElementById('fileInput').click();
            }
        
            function displayImage(event) {
                var image = document.getElementById('profileImg');
                image.src = URL.createObjectURL(event.target.files[0]);
        
                // Save the selected image to localStorage
                var selectedImage = event.target.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    localStorage.setItem('profileImage', reader.result);
                }
                reader.readAsDataURL(selectedImage);
            }
        
            function removeImage() {
                // Remove the image from localStorage
                localStorage.removeItem('profileImage');
                // Remove the image from the <img> src attribute
                document.getElementById('profileImg').src = '';
            }
        </script>
        </body>
        
        

        
    <?php else: ?>
        
        <p></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    

