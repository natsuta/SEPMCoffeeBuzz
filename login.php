<html>
<head>
<title> Login Page</title>
    <link rel="stylesheet" type ="text/css" href ="style.css">
</head>  
    
<body>
    <div class="loginbox">
    <div class="form">
        <form class="registeration-form">
        <input type="text" placeholder="user name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email id"/>
        <button>Create </button>
            <p class="message">Already our customer.? 
            <a href="index.php">Login</a>
            </p>
        </form>
        <img src ="avatar2.png" class="avatar"> 
    
        <form class="login-form">
         <input type ="text"  placeholder="Enter username">
         <input type ="password" name ="" placeholder="Enter Password">
            <button ><a href="index.php">login</a></button><br>
        <p class="message"> Not Registered? <a href="#"> Register</a></p>
            <a href ="#"> Forgot password.?</a><br>
        </form>
    </div>
    </div>
    
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

    <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity:"toggle"},"slow");
        });
                              
    </script>
</body>
 
</html>