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
    <title>iMoves: Home</title>
    <link rel="stylesheet" href="styles/mobile.css"/>
    <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)"/>
</head>
<body class="indexBody">
    <div class="container"> 
        <div class="section"><video width="100%" controls poster="images/Poster1.PNG">
            <source src="videos/FBB-2.mp4" type="video/mp4" class="videos"> 
            Your browser does not support the video tag.
            </video>
        </div>
        <div>
            <table>
                <tr>
                    <td><div class="logoIndex"><a href="camera.html"><img src="images/cameraIcon.jpg" alt="Camera Icon" class="cameraIcon"></a></div></td>
                    <td><div class="logoIndex"><img src="images/pick-lLogo.png" alt="Logo Image" class="logo"></a></div></td>
                    <td><div class="pickleIndex"><a href="con.html"><img src="images/pickle.jpg" alt="Pickle Image" class="pickleImageI"></a></div></td>
                </tr>
            </table>
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
    </div>
</body>
</html> 