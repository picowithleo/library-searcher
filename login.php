<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($username && $password){//If the username and password are not empty
        $sql = "select * from user where username = '$username' and password='$password'";//Check if the database has the corresponding username and password sql
        $result = mysqli_query($mysqli, $sql);//Execute SQL
        $rows = mysqli_num_rows($result);//Return a value

        if($rows){//0 false 1 true
            header("refresh:0;url=welcome.html");//If the login is successful, jump to the welcome.html page.
            exit;
        }else{
            echo "Wrong user name or password";
            echo "
                <script>
                        setTimeout(function(){window.location.href='login.html';},1000);
                </script>

            ";//If use js incorrectly, jump to the login page and try again after 1 second;
        }
             

    }else{//If the username or password is vacant
            echo "Incomplete form filling";

                    //If use js incorrectly, jump to the login page and try again after 1 second;
    }
    echo '<p>Connection OK '. $mysqli->host_info.'</p>';
    echo '<p>Server '.$mysqli->server_info.'</p>';
    $mysqli->close();
?>