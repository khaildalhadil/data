<?php


session_start();

include('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $fullname = $_POST['fullname'];
    $gmail = $_POST['email'];
    $phonenum = $_POST['phone'];
    $veisnum = $_POST['fe'];
    $password = $_POST['pass'];
    $confpassword = $_POST['passc'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "insert into form (fullname, email,fe, phone, pass, passc) values('$fullname','$gmail', '$phonenum','$veisnum', '$password', '$confpassword')";

        mysqli_query($con, $query);
        echo "<script type=' text/javascript'> alert ('Successfully Register')</script";
    }
    else{
        echo "<script type=' text/javascript'> alert ('Please Enter some Valid Intformation')</script";
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
            width: 1020px;

            background: transparent;
            border: 2px solid rgba(255,255,255,.2);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
            backdrop-filter: blur(45px);
            box-shadow: rgba(0,0,0,.2);
        }

        h1 {
            font-size: 36px;
            text-align: center;
        }

        .input_box {
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }


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
            margin: 15px 0 15px;
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
            display: inline-block;
            margin-top: 50px;
            margin-left: 300px;
            padding: 15px 140px;
            background-color: white;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
            display: inline-block;
            text-decoration: none;
        }
        
        .ask {
            font-size: 15px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .ask p a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }

        .ask p a:hover {
            text-decoration: underline;
        }

        .grid_box {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(4, 55px);
            gap: 30px;
        }
    </style> -->
</head>
<body>
<div class="login">
            <div class="form-value">
                <form method="POST">
            <h1>Sing in</h1>
            
                <!--link ###      boxicons.com/usage      ###-->
                <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="fullname" required>
                        <label for="fname">Full Name</label>
                    </div>
                <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="phone" name="phone" required>
                        <label for="phone">Phone Number</label>
                    </div>
                

                <div class="input_box">
                    <input type="password" placeholder="fize card" name="fe" >
                </div>

                <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="pass" name="pass" required>
                        <label for="psw">Password</label>
                    </div>
                <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="passc" name="passc" required>
                        <label for="pswC">Confirm Password</label>
                    </div>
                
                <div class="remember-forgt">
                    <label for="a"><input type="checkbox" name="" id="a">Remember me</label>
                </div>
            </div>

            <button>Submit</button>

            <div class="ask">
                <p> I Have account <a class="a" href="login.php"> Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>