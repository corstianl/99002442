<?php      
include "connection.php";    
$conn = mysqli_connect ($servername , $username , $password,"test") or die("unable to connect to host");  
if(isset($_GET['fname'])){    
$sql = "update `registration` set `password`='".$_GET['pwd']."' where username='".$_GET['fname']."'";
$result = mysqli_query($conn,$sql);  
// echo $result; 
}   
$sql = "select * from registration";    
$res = mysqli_query($conn,$sql);    
?>    
<html>    
    <body style="background-color:black">    
        <div class="buttons" id="click">
            <button class="primary">
                <a href="login1.html"><b> Go To Login page </b></a>
            </button>
        </div>
    </body>    
</html>    