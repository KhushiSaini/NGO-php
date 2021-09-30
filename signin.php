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
if(isset($_POST['Submit']))
{
$c=$_POST['name'];
$d=$_POST['email'];
$e=$_POST['pass'];
$f=$_POST['j'];
$sql="INSERT INTO signin(Name,Email,Pass,Gender)VALUES('$c','$d','$e','$f')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "done";
}
else
{
echo"signin failed " ;
}
}
mysqli_close($conn);
?>
<div style="width:100%">
<div style="width:100%;height:100%;background-color:#F0E68C;background-image:url(m.jpg);background-repeat:no-repeat;background-size:cover;float:left">
<form action="" method="POST" style="padding:95px;margin:95px;font-size:25px">
<center>
<pre>
Name:<input type="text" name="name" required>
E-Mail:<input type="text" name="email">
Password:<input type="password" name="pass">
Gender:<input type="radio" name="j"value="M">M <input type="radio" name="j" value="F">F
<input type="Submit" value="Sign-In" name="Submit"> 
</pre>
</center>
</form>
</div>
</div>
