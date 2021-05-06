<?php      
include "connection.php";    
$conn = mysqli_connect ($servername , $username , $password,"test") or die("unable to connect to host");  
if(isset($_GET['fname'])){    
$sql = "update `registration` set `password`='".$_GET['pwd']."' where username='".$_GET['fname']."'";
$result = mysqli_query($conn,$sql);  
echo $result; 
}   
$sql = "select * from registration";    
$res = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>username</td>    
                <td>password</td>     
                <td colspan = "2">Action</td>    
                <p></p>
            </tr>    
        </table>    
    </body>    
</html>    