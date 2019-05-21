<html>
    <head>
    <title> Login Page</title>
        <link rel="stylesheet" type ="text/css" href ="style.css">
    </head>  

    <body>
         <div class="loginbox">
        <div class="form">
            <form class="registeration-form" name="RegForm" onsubmit="return validation()" method="post">
            <input type="text" placeholder="user name" name = "Name"/>
            <input type="password" placeholder="password" name = "Password"/>
            <input type="text" placeholder="email id" name = "Email"/>
            <button type="submit" value="create" name="Submit">Create</button>
                <p class="message">Already our customer? 
                <button type="button" id="formButton"><a href="index.php">Login</a></button>
                </p>
            </form>
        <img src ="avatar2.png" class="avatar">
             <form id="form1" name="loginForm" onsubmit="return validationLogin()" method="post">
             <input type="text" placeholder="user name" name = "Name"/>
            <input type="password" placeholder="password" name = "Password"/>
            <button type="submit" value="submit" name="Submit">Submit</button>
            </form>
             </div>
            </div>
    </body>
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
     <script>
         $("#formButton").click(function(){
            $("#form1").toggle(250);
        });
         function validation()
         {
            var name = document.forms["RegForm"]["Name"];
            var email = document.forms["RegForm"]["Email"];
            var password = document.forms["RegForm"]["Password"];

             if (name.value == "")                                  
        { 
            
            window.alert("Please enter your name."); 
            name.focus(); 
            return false; 
        }

             if (email.value == "")                                   
        { 
            window.alert("Please enter a valid e-mail address."); 
            
            email.focus(); 
            return false; 
        } 

        if (email.value.indexOf("@", 0) < 0)                 
        { 
            window.alert("Please enter a valid e-mail address."); 
            email.focus(); 
            return false; 
        } 

        if (email.value.indexOf(".", 0) < 0)                 
        { 
            window.alert("Please enter a valid e-mail address."); 
            email.focus(); 
            return false; 
        } 

           if (password.value == "" && password.value.length < 8)                        
        { 
            window.alert("Please enter your password"); 
            password.focus(); 
            return false; 
        }
            if (password.value.length < 8)                        
        { 
            window.alert("Please enter atleast 8 character"); 
            password.focus(); 
            return false; 
        }
                 return true;
         }
         
         function validationLogin()
        {
                var name = document.forms["LoginForm"]["Name"];
                var password = document.forms["LoginForm"]["Password"];

             if (name.value == "")                                  
        { 
            window.alert("Please enter your name."); 
            name.focus(); 
            return false; 
        }

         if (password.value == "")                        
        { 
            window.alert("Please enter your password"); 
            password.focus(); 
            return false; 
        }
                 return true;
             }

        </script>
    </html>