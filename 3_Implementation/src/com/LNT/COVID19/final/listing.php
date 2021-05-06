<?php      
include "connection.php";    
$conn = mysqli_connect ($servername , $username , $password,"test") or die("unable to connect to host");  
if(isset($_POST['fname'])){    
$sql = "delete from registration where username = '".$_POST['fname']."'";    
$result = mysqli_query($conn,$sql);    
}      
$sql = "select * from registration";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>username</td>    
                <td>password</td>     
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    