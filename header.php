<?php
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9611348e0d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    
    <title>responsiveNavbar</title>
 </head>
 <body>
 <!---Navbar--->   
 <nav class="navbar navbar-expand-lg" style="background-color:black; color: white; padding: 10px; height: 80px">
    <div class="container-fluid">
        <!---offcanvas Toggle Button---->
        <button class= "btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#responsiveNavbar">
            <i class="fa-solid fa-bars"></i>
                
        </button>
        
        <!---Logo and Links--->
        <div class="navbar-brand-container">
            <img src= "images/MTA_.jpg" alt="MTA Logo" style="height: 70px;">
            <div class="navbar-content d-lg-flex gap-4 ms-4">
                <a href="Schedules" style="color: white; text-decoration:solid">Schedules</a>
                <a href="Maps" style="color: white; text-decoration:solid">Maps</a>
                <a href="Fares & Tolls" style="color: white; text-decoration:solid">Fares & Tolls</a>
                <a href="Planned Work" style="color: white; text-decoration:solid">Planned Work </a>

            </div>
        </div>
    </div>
    <!---search icon--->
    <div class="display: flex" style="margin-left: 20px">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    
</nav>
<!--offcanvas Sidebar-->

</div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="responsiveNavbar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            <li><a href="#" class="text-decoration-none">Schedule</a></li>
            <li><a href="#" class="text-decoration-none">Maps</a></li>
            <li><a href="#" class="text-decoration-none">Fares & Tolls</a></li>
            <li><a href="#" class="text-decoration-none">Planned Service Changes</a></li>
            <li><a href="#" class="text-decoration-none">Travel</a></li>
            <li><a href="#" class="text-decoration-none">Access-A-Ride Paratransit</a></li>
            <li><a href="#" class="text-decoration-none">About</a></li>
            <li><a href="#" class="text-decoration-none">Agencies</a></li>
            <li><a href="#" class="text-decoration-none">Contact Us</a></li>
        </ul>
    </div>
</div>


  

 </body>
</html>
<script src="script.js"></script>