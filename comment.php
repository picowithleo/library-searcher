<!DOCTYPE html>
<html lang="en">

<head>
    <title>Comment</title>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f2f2f2
        }

        a,
        a:link {
            color: #03699e;
            text-decoration: none
        }

        a:hover {
            color: #10b369
        }

        a:active {
            color: #065177
        }

        #page {
            width: 90%;
            max-width: 1200px;
            margin: 10px auto 0;
            padding: 20px 0 40px
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

        #add {
            display: inline-block;
            margin-bottom: 0;
            padding: .6em 1.2em;
            vertical-align: middle;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            white-space: nowrap;
            background-image: none;
            color: #fff;
            background-color: #29bb9c;
            border-radius: 4px;
            cursor: pointer;
            border: 0;
            outline: 0;
            -webkit-transition: background-color .3s ease-out, border-color .3s ease-out;
            transition: background-color .3s ease-out, border-color .3s ease-out
        }

        #add:hover {
            background-color: #239e84
        }

        #add:active {
            background-color: #1c806b
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
   
   
    <div id="page">
        <h1>Comment test</h1>
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
    


</body>
</html>