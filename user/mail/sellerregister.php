<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../loginpage/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../loginpage/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <img src="images/signup-bg.jpg" alt="">
            <div class="container">
                <div class="signup-content">
                    <form action="slogreg.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Delivery Register Here</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="phno" id="phno" placeholder="Your phone number"/>
                        </div>

                         <div class="form-group">
                            <textarea class="form-input" placeholder="Enter your current address" rows="4" cols="65" name="text"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your current google Email"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="current gmail Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                       

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="sregister" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already registered ?then <a href="sellerlogin.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>