<?php include ('C:\Users\sejal\OneDrive\Desktop\-Indian-Chula-Restaurant-simple-website\header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9611348e0d.js" crossorigin="anonymous"></script>
    
 </head>
 <body>
    <div class="section" style="max-width: 100%;">
    <img src= "images/FTC_5181_desktop (1).jpg" alt="background" style="width: 100%; height:auto"> 
        
    </div>
    <!---cards--->
    <div class="section" style="max-width: 70%;" >
        <div class="container-fluid px-4 pt-5">  <!---pt:padding ms:add margin to left, px- add horizontal padding--->
            <h2>What's happening</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/meeting.jpg" class="card-img-top" alt="MTA_meeting" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Upcoming MTA Board & Committe Meetings</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <img src="/images/queens.jpg" class="card-img-top" alt="queens_bus" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Queens Bus Network services changes begin Junw 29</h4>
                        </div>
                    </div>
                </div> 
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/new jersy and new york.jpg" class="card-img-top" alt="sea" width="100" height="100">
                        <div class="card-body">
                        
                            <h4>Service changes on the A line and Rockway Park Shuttle in 2025</h4>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    
        <div class="container-fluid px-4 pt-5">      
            <h2>Featured projects</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/meeting.jpg" class="card-img-top" alt="MTA_meeting" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Interborough Express</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/images/queens.jpg" class="card-img-top" alt="queens_bus" width="100" height="100" >
                        <div class="card-body">
                            
                            <h4>Congestion Pricing capital improvements</h4>
                        </div>
                    </div>
                </div> 
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/new jersy and new york.jpg" class="card-img-top" alt="sea" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Station accessiblity projects</h4>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>
        <div class="container-fluid px-4 pt-5">      
            <h2>Guides</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/meeting.jpg" class="card-img-top" alt="MTA_meeting" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Taking your bike on public transit</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/images/queens.jpg" class="card-img-top" alt="queens_bus" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Getting to New York-area airports on public transit</h4>
                        </div>
                    </div>
                </div> 
                <div class="col">
                    <div class="card h-100">
                        <img src="./images/new jersy and new york.jpg" class="card-img-top" alt="sea" width="100" height="100">
                        <div class="card-body">
                            
                            <h4>Getting to NYC- area stadiums and arenas on transit</h4>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
    </div>
    <a href="/chat-ai/chat-ai-api/chat.php" target="_blank">
    <img src="/images/robot.png" class="chatbot-logo" style="height: 70px;"></img></a>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h3>Create Account</h3>
                <div class="social-icons">
                    <button type= "button" class="fa-brands fa-google"></button>
                    <button type= "button" class="fa-brands fa-facebook"></button>
                    <button type= "button" class="fa-brands fa-linkedin"></button>
                </div>
                <span>or your email for registration</span>
                <div class="form-group">
                    <input type="text" placeholder="Enter your userid">
                    <input type="email" placeholder="Enter your email">
                    <input type="password" placeholder="Enter your password">
                    
                    <button type= "button" class="submit" id="sign-up">Sign Up</button>
                </div>
            </form>

        </div>
        <div class="form-container sign-in">
            <form>
                <h3>Sign In</h3>
                <div class="social-icons">
                    <button type= "button" class="fa-brands fa-google"></button>
                    <button type= "button" class="fa-brands fa-facebook"></button>
                    <button type= "button" class="fa-brands fa-linkedin"></button>
                </div>
                <div class="form-group">    
                    <input type="email" placeholder="Enter your email" required>
                    <input type="password" placeholder="Enter your password" required>
                    <a href="Forgot your password"></a>
              
                    
                    <button type= "button" class="submit" id="sign-in">Sign In</button>
                </div>
            </form>

        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-pannel toggle-left">
                    <h2>MTA</h2>
                    
                </div>
            </div>
        </div>
    </div>     
    
    
 </body>
<?php include ('C:\Users\sejal\OneDrive\Desktop\-Indian-Chula-Restaurant-simple-website\footer.php');?>
