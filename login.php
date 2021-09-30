<div style="width:100%; color:white">
<div style="width:20%;background-color:#F4A460; float:left">
<a href="divnav.php"><h1>Home</h1></a>
</div>
<div style="width:20%; background-color:#F4A460; float:right">
<a href="contact.php"><h1>Contact</h1></a>
</div>
<div style="width:20%; background-color:#F4A460; float:right">
<a href="volunteer.php"><h1>Volunteer</h1></a>
</div>
<div style="width:20%; background-color:#F4A460; float:right">
<a href="login.php"><h1>Login</h1></a>
</div>
<div style="width:20%; background-color:#F4A460; float:right">
<a href="about.php"><h1>About</h1></a>
</div>
</div>
<?php
$conn=mysqli_connect('localhost','root','','ngo');
if(isset($_POST['submit']))
{
$a=$_POST['email'];
$b=$_POST['pass'];
$sql="INSERT INTO login(Email,Password)VALUES('$a','$b')";
$result=mysqli_query($conn,$sql);
if($result)
{
 echo "done";
}
else
{
echo"log in failed";
}
}
mysqli_close($conn);
?>
<div style="width:100%; color:red">
<div style="width:100%; height:100%; background-color:#F0E68C;background-image:url(ht.jpg);background-repeat:no-repeat;background-size:cover;float:left">
<form action=""method="POST" style="padding:95px;margin:95px;font-size:25px">
<center>
<pre>
E-Mail:<input type="text" name="email" ><br>
Password:<input type="password" name="pass">
<input type="submit" value="Log-In" name="submit">
<a href="signin.php"><h6 style="color:white">Not have an account</h6></a>
</pre>
</center>
</form>
</div>
<div style
</div>



