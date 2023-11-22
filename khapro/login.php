<?php 
session_start();



include("db.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $gmail = $_POST['email'];
    $password = $_POST['pass'];
    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query ="select * from form where email ='$gmail'limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_date = mysqli_fetch_assoc($result);
                if ($user_date ['pass'] == $password)
{
                    
                
                    header("locaction: index.php");
                    die;


                }
                
            }
            
        }
        echo "<script type=' text/javascript'> alert ('wrong email or password')</script";
        
    }
    else{echo "<script type=' text/javascript'> alert ('wrong email or password')</script";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("../project/img.JPG");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .content {
            width: 420px;
            background: transparent;
            border: 2px solid rgba(255,255,255,.2);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
            backdrop-filter: blur(15px);
            box-shadow: rgba(0,0,0,.2);
        }

        h1 {
            font-size: 36px;
            text-align: center;
        }

        .input_box {
            /* position: relative */
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }

        /* input_box i {
            position: absolute;
            right: 20px;
            top: 50%;
            font-size: 20px;
            tranform: translateY(-50%);
        } */

        .input_box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255,255,255,.2);
            border-radius: 40px;
            font-size: 16px;
            color: white;
            padding: 20px 45px 20px 20px;
        }

        .input_box input::placeholder {
            color: white;

        }

        .remember-forgt {
            display: flex;
            justify-content: space-between;
            font-size: 15px;
            margin: -15px 0 15px;
        }

        .remember-forgt label input {
            accent-color: #fff;
            margin-right: 3px;
        }

        .remember-forgt a {
            text-decoration: none;
            color: #fff;
        }

        .remember-forgt a:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            height: 45px;
            background-color: white;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
        
        .ask {
            font-size: 15px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .ask p a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .ask p a:hover {
            text-decoration: underline;
        }
    </style> -->
</head>
<body>
<div class="login">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="pass" name="pass" required>
                        <label for="psw">Password</label>
                    </div>

            <div class="remember-forgt">
                <label for="a"><input type="checkbox" name="" id="a">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button class="btn">Login</button>

            <div class="ask">
                <p>Don't have an account? <a href="sininn.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>