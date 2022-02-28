<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <title>Verification</title>
</head>
<body>
    <header>
        <a href="" class="logo"><span>Tex</span>GEAR<span></span></a>
    </header>

    <div class="container">
        <h1>VERIFY YOUR IDENTITY</h1>
        <hr color="#FF304F" width="250" size="4">

        <form action="verification.php">
            <div class="input-container">
                <i class="icon"><img src="../res/img/profile.png" alt=""></i>
                <input class="input-field" type="text" placeholder="Full name" name="psw">
            </div>

            <div class="input-container">
                <i class="icon"><img src="../res/img/user.png" alt=""></i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
            </div>

            <div class="input-container">
                <i class="icon"><img src="../res/img/email.png" alt=""></i>
                <input class="input-field" type="email" placeholder="E-mail" name="psw">
            </div>

            <div class="input-container">
                <i class="icon"><img src="../res/img/phone.png" alt=""></i>
                <input class="input-field" type="tel" placeholder="Phone number" name="psw">
            </div>

            <button type="submit" class="btn">VERIFY</button>
        </form> 
    </div>

    <footer>
        <center>
            <p>Tex-GEAR, All rights reserved @2022</p>
        </center>
    </footer>
</body>
</html>