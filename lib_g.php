<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Library Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
    * {
    box-sizing: border-box;
  }
  
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #e4f2f0;
  }
  
  /* Style the navigation bar */
  #navbar {
    overflow: auto;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
    display: block;
    transition: top 0.3s;
    z-index: 9999;
  }
  
  #navbar a {
    float: left;
    display: block; /*delete*/
    color: #f2f2f2;
    text-align: center;
    padding: 15px;
    text-decoration: none;
    font-size: 17px;
  }
  
  #navbar a:hover {
    background-color: rgb(196, 168, 168);
    color: black;
  }

  .navbar-right {
    float: right;
  }

  /* Responsive Navigation Bar */
  /* @media screen and (max-width: 600px) {
    .navbar a {
      float: none;
      display: block;
    }
  } */

  /* Hoverable Sidenav Buttons */
  #mySidenav {
    z-index: 9999;
  }

  #mySidenav a {
    position: fixed;
    right: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 10px 0 0 10px;
  }
  
  #mySidenav a:hover {
    right: 0;
  }
  
  #sideLib {
    top: 200px;
    background-color: #f77754;
  }
  
  #sideAbout {
    top: 260px;
    background-color: #584b42;
  }
  
  #sideContact {
    top: 320px;
    background-color: #537d91;
  }
  
  #sideLogin {
    top: 380px;
    background-color: #a4d1c8
  }
  
/* Style the header */
  header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
  }
  
  /* Container for flexboxes */
  /* section {
    display: -webkit-flex;
    display: flex;
  } */
  
  /* Style the content */
  /* article {
    -webkit-flex: 3;
    -ms-flex: 3;
    flex: 3;
    padding: 10px;
  } */

  /* popular library */
  #firstsection {
    padding-bottom: 140px;
  }

  div.popular {
    border: 1px solid rgb(235, 235, 235);
    
  }
  
  div.popular:hover {
    border: 1px solid rgb(87, 87, 87);
  }
  
  div.popular img {
    
    width: 100%;
    height: auto;
  }
  
  .popular #branchname {
    color: rgb(233, 156, 14);
    padding: 15px;
    text-align: center;
    font-weight: bold;
  }
  
  .responsive {
    padding: 0 6px;
    float: left;
    width: 33%;
  }
  
  @media only screen and (max-width: 700px) {
    .responsive {
      width: 50%;
      margin: 6px 0;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Style the about section */
  #about {
    background-color: #99d8d0;
    padding: 50px 16px;
    padding-bottom: 400px;
  }

  #about article {
    display: -webkit-flex;
    display: flex;
    -webkit-flex: 3;
    -ms-flex: 3;
    flex: 3;
    padding: 10px;
    margin-top: 64px;
  }

  .quarter {
    padding: 0 10px;
    max-width: 30%;
    text-align: center;;
  }

  .topic-center {
    text-align: center;
    font-size: 2em; 
  }

  .undertopic {
    text-align: center;
    font-weight: bold;
    font-size: 1.2em;
  }

  /* Style the contact section */
  #contact {
    background-color: #70416d;
    padding: 50px 16px;
  }
 
  .contact-info {
    margin-top: 100px;
    margin-left: 30%;
  }
  
  /* Style the footer */
  footer {
    background-color: #170a19;
    padding: 10px;
    text-align: center;
    color: rgba(255, 255, 255, 0.445);
  }
  

  /* Style the library page */
  
  figure img:hover {
    border: 2px solid rgb(87, 87, 87);
  }
 
  figure img {
    border: 2px solid rgb(235, 235, 235);
    width: 100%;
    height: auto;
    display: block;
	  max-width: 100%;
  }
  

  /* .lib-category #branchname {
    padding: 15px;
    text-align: left;
  }

  .lib-category #address {
    padding: 15px;
    text-align: left;
  }

  .lib-category #locality {
    padding: 15px;
    text-align: left;
  }

  .lib-category #postcode {
    padding: 15px;
    text-align: left;
  } */

  .lib-detail {
    padding-top: 70px;
  }

  .lib-detail p {
    color: rgb(9, 20, 180);
    font-weight: bold;
  }

  .lib-detail hr {
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: solid;
    border-width: 2px;
    border-color: #858180;
    z-index: -1;
    position: relative;
  }
  
  .lib-res-left .lib-category figure {
    max-width: 40vw;
    float: left;
  }

  .lib-res-right .lib-category figure {
    max-width: 40vw;
    float: left;
  }


  .lib-category {
    width: 85vw;
    height: 30vw;
  }

  .lib-res-left .lib-category .lib-detail {
    margin-left: 50%;
    max-width: 40vw;
    float: left;
    text-align: center;
    position: absolute;
    width: 100%;
    font-size: 1.5em;
  }

  .lib-res-right .lib-category .lib-detail {
    margin-left: -41%;
    max-width: 40vw;
    float: left;
    text-align: center;
    position: absolute;
    width: 100%;
    font-size: 1.5em;
  }


  .lib-res-right {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 50%;
    padding: 0 6px;
    width: 45%;
  }

  .lib-res-left {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 5%;
    padding: 0 6px;
    width: 45%;
  }
  
  @media only screen and (max-width: 700px) {
    .lib-res-left, .lib-res-right {
      width: 50%;
      margin: 6px 0;
    }
    .lib-res-left .lib-category .lib-detail {
      margin-left: 10%;
      font-size: 1.2em;
      position: relative;
    }
    .lib-res-right .lib-category .lib-detail {
      margin-left: 10%;
      font-size: 1.2em;
      position: relative;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .lib-res-left, .lib-res-right {
      width: 100%;
    }
    .lib-category .lib-detail {
      margin-left: 8%;
      font-size: 1em;
      position: relative;
    }
  }
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }


  /* Library Information Page */

  #branchname {
    font-weight: bold;
    font-size: 1.1em;
    color: rgb(233, 156, 14);
  }


  .lib-res-left .lib-category .infodetail {
    margin-left: 50%;
    max-width: 40vw;
    float: left;
    text-align: left;
    position: absolute;
    width: 100%;
    font-size: 1em;
  }

  .infodetail {
    padding-top: 70px;
    margin-bottom: 100px;
  }

  .infodetail p {
    color: rgba(199, 99, 32, 0.87);
    font-weight: bold;
  }

  .infodetail hr {
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: solid;
    border-width: 2px;
    border-color: #da401a;
    z-index: -1;
    position: relative;
  }

  @media only screen and (max-width: 1000px) {
    .lib-res-left .lib-category .infodetail {
      margin-left: 10%;
      font-size: 1em;
      position: relative;
    }
  }

  @media only screen and (max-width: 500px) {
    .lib-res-left .lib-category .infodetail {
      margin-left: 8%;
      font-size: 0.8em;
      position: relative;
    }
  }



  /* Style the login and sign up page*/

  .loginform{
    width: 400px;
    height: 500px;
    background-color:rgba(255,255,255,0.75);
    margin-top: 80px;
    margin-left: 35%;
    margin-bottom: 500px;
  }

  @media only screen and (max-width: 700px) {
    .loginform {
      margin-left: 18%;
    }
  }

  @media only screen and (max-width: 500px) {
    .loginform {
      margin-left: 8%;
      width: 350px;
    }
  }

  .headline{
    font-size: 22px;
    text-align: center;
    padding: 20px;
  }

  .loginform input[type="text"],
  .loginform input[type="submit"]{
    -web-kit-appearance:none;
      -moz-appearance: none;
      display: block;
      margin: 0 auto;
      font-size:15px;
      width: 240px;
  }

  .loginform input[type="text"]{
    height:35px;
    border-radius:3px;
    border:1px solid #c8cccf;
    color:#6a6f77;
    outline:0;
  }

  .loginform input[type="submit"]{
    margin-top: 25px;
    height: 35px;
    background: #357eb8;
    color: #bcedff;
    font-weight: bold;
    font-size: 16px;
  }

  .loginform input[type="submit"]:hover{
    background: #0e62a3;
    cursor: pointer;
  }

  .formstyle{
    margin: 5px 0 5px 42px;
    font-size:17px; 
    color: #6a6f77;
  }
  
  .createAccount{
    display: block;
    float: right;
    margin-right: 46px;
    font-size: 15px;
  }
  .createAccount a{
    text-decoration: none;
  }

  /* map section */

  #map {
    margin-bottom: 80px;
    width: 80vw;
    height: 80vh;
    margin: 0 auto;
    box-shadow: rgba(0,0,0,0.5) 0 5px 10px;
    /* https://css-tricks.com/fun-viewport-units */
  }


  /* Welcome page style */
  #welcome {
    text-align: center;
    color: chocolate;
    font-size: 3em;
    font-weight: bold;
    margin-top: 150px;
    margin-bottom: 500px;

  }

  /* forum style */

  #page {
    width: 90%;
    max-width: 600px;
    margin: 10px auto 0;
    padding: 20px 0 40px
  }

  #page h1{
    font-size: 1.2em;
    text-align: center;
  }

  .background {
    padding: 10px;
    margin: 0 0 20px 0;
    border: 1px solid #e6e6e6;
    animation: fadeIn .3s linear .3s both;
    box-shadow: 0 3px 24px rgba(0, 0, 0, 0.06);
    background: #fff;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 6px
  }

  #comments .comments-input {
    border: 1px solid #ddd;
    box-sizing: border-box;
    padding: .5em;
    margin-right: 1em;
    font-size: 14px;
    vertical-align: middle
  }

  #content {
    border: 1px solid #ddd;
    box-sizing: border-box;
    padding: .5em;
    margin: 1em 0 0;
    resize: vertical
  }


</style>
    </head>

    <body>

        <div id="navbar">
            <a href="index.php">LIBRARY PARADISE</a>
            <div class="navbar-right">
                <a href="library.php">Library</a>
                <a href="index.php#about">About</a>
                <a href="index.php#contact">Contact</a>
                <a href="login.html"><i class="fa fa-fw fa-user"></i>Login</a>
            </div>
            
        </div>

        <div id="mySidenav">
            <a href="library.php" id="sideLib">Library</a>
            <a href="index.php#about" id="sideAbout">About</a>
            <a href="index.php#contact" id="sideContact">Contact</a>
            <a href="login.html" id="sideLogin">Login</a>
        </div>
        <header>
            <h2>Library Information</h2>
        </header>

        <section>
            <div class="lib-res-left">
                <div class="lib-category">
                
                        <figure>
                        <img src="image/lia_g.jpg" alt="Library g"></a>
                        </figure>

                        <?php
                            // Create connection
                            $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
                            // Check connection
                            if (!$mysqli) {
                            die("Connection failed: " . mysqli_connect_error());
                            }
                            // Select infromtion from database
                            $sql = "SELECT library_name, address, locality, postcode, phone, wifi, email, opening_hours_monday, opening_hours_tuesday, opening_hours_wednesday, opening_hours_thursday, opening_hours_friday, opening_hours_saturday, opening_hours_sunday, date_created, date_last_updated FROM library WHERE library_name = 'Umagico Indigenous Knowledge Centre'";
                            $result = mysqli_query($mysqli, $sql);
                            $row = mysqli_fetch_row($result);
                        ?>
                        <!-- show information on website -->
                        <div class="infodetail">
                            <p id="branchname"><?php echo $row[0]?></p>
                            <hr>
                            <p id="address"><?php echo $row[1]?></p>
                            <p id="locality"><?php echo $row[2]?></p>
                            <p id="postcode"><?php echo $row[3]?></p>
                            <p id="phone">Phone:<?php echo $row[4]?></p>
                            <p id="wifi">WIFI Available:<?php echo $row[5]?></p>
                            <p id="email">Email:<?php echo $row[6]?></p>
                            <p id="opening_hours_monday">Monday:<?php echo $row[7]?></p>
                            <p id="opening_hours_tuesday">Tuesday:<?php echo $row[8]?></p>
                            <p id="opening_hours_wednesday">Wednesday:<?php echo $row[9]?></p>
                            <p id="opening_hours_thursday">Thursday:<?php echo $row[10]?></p>
                            <p id="opening_hours_friday">Friday:<?php echo $row[11]?></p>
                            <p id="opening_hours_saturday">Saturday:<?php echo $row[12]?></p>
                            <p id="opening_hours_sunday">Sunday:<?php echo $row[13]?></p>
                            <p id="date_created">Created on:<?php echo $row[14]?></p>
                            <p id="date_last_updated">Last updated:<?php
                            echo $row[15];
                            $mysqli->close();
                            ?></p>
                        </div>
                </div>
            </div>
        </section>

     

    

        <script src="js/script.js"></script>

    </body>

</html>

