<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

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
                    <form method="POST" action="formsubmit.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lastname" id="lastname" placeholder="Your Lastname"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <p name="emailtest" class="display-msg2"></p>
                        <div class="form-group">
                            <input type="date" class="form-input" name="date" id="date"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="image" id="image" placeholder="Your Image url"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="job" id="job" placeholder="What do you do for the living?"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                                            <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                                                <div class="form-group">
                            <input type="hidden" class="form-input" name="emailcheck" id="emailcheck" placeholder="Repeat your password" value=""/>
                        </div>
                                                <div class="form-group">
                            <input value = ""type="hidden" class="form-input" name="usernamecheck" id="usernamecheck" placeholder="Repeat your password"/>
                        </div>

                    </form>
<!--                     <p class="loginhere">
    Have already an account ? <a href="#" class="loginhere-link">Login here</a>
</p> -->
                </div>
            </div>
        </section>

    </div>
 
<script>

    $("#email").keyup(function() {
      var emailvalue = $(this).val();

    if(emailvalue.length > 0){
      console.log(emailvalue);
      // Fire off the request to /form2.php

      request = $.ajax({
         url: "form2.php",
         type: "POST",
         data: {value3:emailvalue}, //we will send value2 key (which has value from the var value (line 16)) over POST method to the form2.php file
         success : function(data){
                  if (data == "email is allready in our database"){
                      $(".display-msg2").html(data);
                      $(".display-msg2").css("color","red");
                      document.getElementById("emailcheck").value = data;
                  } else {
                      $(".display-msg2").html(data);
                      $(".display-msg2").css("color","green");
                      document.getElementById("emailcheck").value = data;
                  }
              }
      });
     //console.log(value2);
    } else {
      $(".display-msg2").html("Please insert your email");
    }
  }).keyup();


</script>
</body>
</html>