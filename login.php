<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
	<div name="error"></div>

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="checklogin.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value=" Log In"/>
                        </div>
                                            <p class="loginhere">
                        Don't have a account ? <a href="index.php" class="loginhere-link">Register here</a>
                    </p>

                    </form>
                </div>
            </div>
        </section>

    </div>
 

</body>
</html>