<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home|Library Paradise</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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

  #contact #page {
      margin-top:10px;
    margin-left:190.4px;
    margin-right:190.400px;
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

    <?php
        $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
        $sql = "select library_name from library order by prefer_index desc";
        $result = mysqli_query($mysqli, $sql);
    ?>
    <body>

        <!-- Navbar (sit on top) -->
        <div id="navbar">
            <a href="index.php">LIBRARY PARADISE</a>
            <div class="navbar-right">
                <a href="library.php">Library</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <a href="login.html"><i class="fa fa-fw fa-user"></i>Login</a>
            </div>
        </div>

        <header id="home">
            <h2>Library Paradise</h2>
        </header>

        <h3>Most Popular:</h3>
        <!-- Popular Library Section -->
        <section id="firstsection">
            <div class="responsive">
                <div class="popular">
                    <a href="lib_a.php">
                    <img src="image/lia_a.jpg" alt="Most popular Library a">
                    </a>
                    <div id="branchname">
                        <?php
                        $row = mysqli_fetch_row($result);
                        echo"$row[0]";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="responsive">
                <div class="popular">
                    <a href="lib_b.php">
                    <img src="image/lia_b.jpg" alt="Most popular Library b">
                    </a>
                    <div id="branchname">
                        <?php
                        $row = mysqli_fetch_row($result);
                        echo"$row[0]";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="responsive">
                <div class="popular">
                    <a href="lib_c.php">
                    <img src="image/lia_c.jpg" alt="Most popular Library c">
                    </a>
                    <div id="branchname">
                        <?php
                        $row = mysqli_fetch_row($result);
                        echo"$row[0]";
                        $mysqli->close();
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
        </section>
        
        <!-- Map of library Section -->
        <?php
        $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
        $sql = "select library_name, wifi, address, locality, postcode, latitude_decimal, longitude_decimal from library";
        $abc = array();
        $result = mysqli_query($mysqli, $sql);
        while ($rows = mysqli_fetch_array($result)){
            array_push ($abc, $rows);
        }
        $abc = json_encode($abc);
	    ?>

	    <section id="map"></section>


        <!-- About Section -->
        <section id="about">
            <h3 class="topic-center">ABOUT</h3>
            <p class="undertopic">Key features of our website</p>
            <article>
                <div class="quarter">
                <!-- <i class="fa fa-desktop"></i> -->
                <p class="undertopic">Purposes</p>
                <p>This website application can provide plenty of convenience 
                    for users to find their desired library. 
                    They can find detailed information and other people's comments on the website. </p>
                </div>
                
                <div class="quarter">
                <!-- <i class="fa fa-heart"></i> -->
                <p class="undertopic">Objective</p>
                <p>Whateve age, education level and status they are,users can use this web easily</p>
                </div>

                <div class="quarter">
                <!-- <i class="fa fa-diamond"></i> -->
                <p class="undertopic">Design</p>
                <p>Users can sign up and login in
                <br>
                <br>
                Users can check the detailed information of the libraries
                <br>
                <br>
                They can see other user's comment on libraries</p>
                </div>
                
                <div class="quarter">
                <!-- <i class="fa fa-cog"></i> -->
                <p class="undertopic">Motivation</p>
                <p>
                A website can help people to find the library.
                <br>
                <br>
                Provide convenience for users who prefer to visit traditional libraries.
                </p>
            </article>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h3 class="topic-center">CONTACT</h3>
            <p class="undertopic">Please contact us. Send us a message:</p>
            <div class="contact-info">
                <p><i class="fa fa-map-marker"></i> St Lucia QLD 4072, AU</p>
                <p><i class="fa fa-phone"></i> Phone: +61 421343328</p>
                <p><i class="fa fa-envelope"> </i> Email: picowithleo@gmail.com</p>
            </div>

            <div id="page">
                <h1>Comment</h1>
                <div id="comments" class="background">
                    <form id="comment" method="post">
                        <div>
                            <input class="comments-input" id="user" name="user" type="text" required placeholder="Name" />
                            <button>Submit</button>
                        </div>
                        <textarea class="" id="content" name="comment" style="width:100%; height:80px" required
                            placeholder="Write your comment here"></textarea>
                        <div id="message"></div>
                    </form>
                </div>
                <?php
                    $id = 0;
                    @$name = $_POST['user'];
                    @$content = $_POST['comment'];
                    if ($name && $content) {
                        $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
                        if (!$mysqli) {
                            die("Connection Fail: " . mysqli_connect_error());
                        }
                        $sql = "select * from comment";
                        $result = mysqli_query($mysqli, $sql);
                        $rows = mysqli_num_rows($result);
                        if ($rows == 0) {
                            $id = 1;
                        }else {
                            $result = mysqli_query($mysqli, "select max(id) from comment");
                            $row = mysqli_fetch_row($result);
                            $id = $row[0] + 1;
                        }
                        $time = date('Y-m-d h:i:s', time());
                        $sql="insert into comment(id,user,content,time) values ('$id','$name','$content','$time')";
                        mysqli_query($mysqli, $sql);
                        $mysqli->close();
                    }
                ?>
                <ol id="comment-list" class="background">
                    <?php
                    $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
                    if (!$mysqli) {
                        die("Connection Fail: " . mysqli_connect_error());
                    }
                    $sql = "select * from comment";
                    $result = mysqli_query($mysqli, $sql);
                    while($row=mysqli_fetch_row($result)){
                        echo "
                        <div>
                        ".$row[1].": ".$row[3]." </br>
                        ".$row[2]."</br></br>
                        </div>
                        ";
                    }
                    $mysqli->close();
                    ?>  
                </ol>
            </div>
        </section>


        <!-- Footer -->
        <footer>
            <a href="#home"><i class="fa fa-arrow-up"></i>To the top</a>
            <p>© 2019 Team 19 RESERVED</p>
        </footer>

        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
        <script>
            var myMap = L.map('map').setView([-21, 148], 4);
    
            L.tileLayer("https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw", {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: "mapbox.streets"
            }).addTo(myMap);
    
            var jsonData = <?php echo $abc; ?>;
            
            //console.log(jsonData.result.records);
    
            $.each(jsonData, function(recordKey, recordValue) {
                console.log(recordValue);
                var lat = recordValue[5];
                var lng = recordValue[6];
                console.log(lat, lng);
                L.marker([lat, lng]).addTo(myMap).bindPopup("<h3>" + recordValue[0] + "</h3></br><p>"+recordValue[2]+"</br>"+recordValue[3]+"</br>"+recordValue[4]+"</p>");       
        });
        </script>

        <script src="js/script.js"></script>

    </body>

</html>



