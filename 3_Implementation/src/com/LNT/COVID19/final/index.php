<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />    
        <h2>Forgot Password</h2>    
        <form name = "form1" action="forgot.php" method ="get" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>New Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>   
                <div class = "form_group">    
                    <input type = "submit" name = "sub" value = "Change Password" />    
                </div>   
            </div>    
        </form>    
    </body>    
</html>    