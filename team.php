<?php 
session_start();
$loginDetails = array(
    array(
        'username' => 'team@2024',
        'password' => 'lib@231'
    )
   
    );


    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $loggedIn = false;
        foreach ($loginDetails as $user) {
            if($username == $user['username'] && $password == $user['password']) {
                    $_SESSION['username'] = $username;
                    $loggedIn = true;

                        //redirect to the dashboard 
                        header("Location: dashboard.php");
                        exit;
                    echo "Login successful. Welcome, $username!";
                    break;

            }
        }
        if(!$loggedIn) {
                echo "Invalid login credentials. Please try again.";
        }
    }

           
?>

                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!-- bootstrap cdn link here-->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                    <title>Team Login</title>
                </head>
                <body style="background-image: url('img/bg2.jpg');">

                   
                    <form style="margin-left: 13%; margin-top: 5%; box-shadow: 0px 0px 12px; width: 310px; border-radius: 12%; height: 348px;" method="POST"><br><br>
                        <center><h2 style="color: blue; font-size: 23px">Login</h2></center>
                        <label style="font-size: 23px; margin-left: 6%; color: white; " for="username">Username:</label><br>
                        <input style="margin-left: 6%; width: 165px; height: 30px; border: none; background-color: lightgrey;" type="text" id="username" name="username"><br><br>

                        <label style="font-size: 23px; margin-left: 6%; color: white; " for="password">Password:</label><br>
                        <input style="margin-left: 6%; width: 165px; height: 30px; border: none; background-color: lightgrey;" type="text" id="password" name="password"><br><br>
                        <input style="margin-left: 19%; width: 125px; height: 35px; font-size: 23px; background-color: blue; color: orange; border: none;" type="submit" name="submit" value="Login"><br><br>
                        <a style="font-size: 22px; margin-left: 19%; text-decoration: none; color: red;" href="index.html">Home</a>
</form>
                    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                </body>
                </html>