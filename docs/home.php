<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Pick-l: Home</title>
    <link rel="stylesheet" href="styles/mobile.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/pickle.ico">
</head>
<body class="indexBody">
    <div class="container">
        <div class="section"><video width="100%" controls poster="images/Poster1.PNG">
            <source src="videos/FBB-2.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>

        <div class="headBar">
            <div class="cameraIndex"><a href="camera1.html"><i class="fa fa-camera" alt="Camera Icon" class="cameraIcon" style="color: #a4a7ff"></i></a></div>
            <div class="logoIndex"><img src="images/logo4a4.png" alt="Logo Image" class="logo"></a></div>
            <div class="pickleIndex"><a href="avatarCustomise.html"><img src="images/pickle.jpg" alt="Pickle Image" class="pickleImageI"></a></div>
            <div class="welMess"><p>Hello, <?=$_SESSION['name']?>!</p></div>
        </div>

        <div class="section"><video width="100%" controls poster="images/Poster2.PNG">
            <source src="videos/Active.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
        
         <div class="section"><video width="100%" controls poster="images/Poster3.PNG">
            <source src="videos/Brain 4-7.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                     
        <div class="section"><video width="100%" controls poster="images/Poster4.PNG">
            <source src="videos/Brain 7-11.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                  
        <div class="section"><video width="100%" controls poster="images/Poster5.PNG">
            <source src="videos/Breathing.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                        
        <div class="section"><video width="100%" controls poster="images/Poster6.PNG">
            <source src="videos/AB-1.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
    
        <div class="section"><video width="100%" controls poster="images/Poster7.PNG">
            <source src="videos/AB-2.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                               
        <div class="section"><video width="100%" controls poster="images/Poster8.PNG">
            <source src="videos/FBB-1.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>

        <div class="section"><video width="100%" controls poster="images/Poster9.PNG">
            <source src="videos/Yoga.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                        
        <div class="section"><video width="100%" controls poster="images/Poster10.PNG">
            <source src="videos/FBB-3.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                                
        <div class="section"><video width="100%" controls poster="images/Poster11.PNG">
            <source src="videos/Jump.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>                  
    
        <div class="section"><video width="100%" controls poster="images/Poster1.PNG">
            <source src="videos/Pilates.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
    
        <div class="section"><video width="100%" controls poster="images/Poster2.PNG">
            <source src="videos/YBB-1.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
                                  
        <div class="section"><video width="100%" controls poster="images/Poster3.PNG">
            <source src="videos/YBB-2.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>

        <div class="section1">
            <div class="doneMess">
                <p>Great job!</p>
                <p>Come back later for more!</p>
                <p><div class="logoutButton"><a href="logout.php" style="color:#a5a8ff"><i class="fas fa-sign-out-alt" style="color:#a5a8ff"></i>Logout</a></div></p>
            </div>
        </div>

    </div>
</body>
</html> 