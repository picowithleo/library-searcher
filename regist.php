<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $mysqli = new mysqli('34.68.67.60:3307', 'project', 'project', 'project');
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($username && $password && $confirm){//If the username and password are not empty
        if ($password != $confirm) {
            echo "passwods are not the same, please try agin!";
            echo "
                <script>
                        setTimeout(function(){window.location.href='signup.html';},5000);
                </script>
            ";
            $mysqli->close();
            exit;
        }
        $sql="insert into user(username,password) values ('$username','$password')";//Insert sql of the value of the form into the database
        mysqli_query($mysqli, $sql);//Execute SQL
        if (mysqli_affected_rows($mysqli) > 0){
            echo "Regist success, please login";//Successfully registered output result
            echo "
                <script>
                        setTimeout(function(){window.location.href='login.html';},5000);
                </script>
            ";
            $mysqli->close();
            exit;
            //If use js incorrectly, jump to the login page and try again after 1 second;
            
        }else{
            echo "the username has been registed, please try again!";
            echo "
                <script>
                        setTimeout(function(){window.location.href='signup.html';},5000);
                </script>
            ";
            $mysqli->close();
            exit;
            //If use js incorrectly, jump to the login page and try again after 1 second;
        }
    }else{//If the username or password is vacant
            echo "empty username or password";
            echo "
                <script>
                        setTimeout(function(){window.location.href='login.html';},5000);
                </script>
            $mysqli->close();
            exit;
            ";//If use js incorrectly, jump to the login page and try again after 1 second;
    }
    echo '<p>Connection OK '. $mysqli->host_info.'</p>';
    echo '<p>Server '.$mysqli->server_info.'</p>';
    $mysqli->close();
?>