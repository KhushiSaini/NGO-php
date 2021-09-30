<div style="width:100%; color:white">
<div style="width:20%;background-color:#F4A460;float:left">
<a href="divnav.php"><h1>Home</h1></a>
</div>
<div style="width:20%;background-color:#f4A460;float:right">
<a href="contact.php"><h1>Contact</h1></a>
</div>
<div style="width:20%;background-color:#F4A460;float:right">
<a href="volunteer.php"><h1>Volunteer</h1></a>
</div>
<div style="width:20%; background-color:#F4A460;float:right">
<a href="login.php"><h1>Login</h1></a>
</div>
<div style="width:20%; background-color:#F4A460;float:right">
<a href="about.php"><h1>About</h1></a>
</div>
</div>
<?php
$conn=mysqli_connect('localhost','root','','ngo');
if(isset($_POST['Submit']))
{
$a=$_POST['name'];
$b=$_POST['fname'];
$c=$_POST['j'];
$d=$_POST['emil'];
$e=$_POST['cont'];
$f=$_POST['cat'];
$g=$_POST['pro'];

$sql="INSERT INTO form(Name,Fname,Gender,Email,Contact,Category,Programes)VALUES('$a','$b','$c','$d','$e','$f','$g')";
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
<div style="width:100%;color:black; font-size:35px">
<div style="width:100%;height:100%;background-color:#F0E68C;background-image:url(reg.jpg);background-repeat:no-repeat;background-size:cover;float:left">
<form action=""method="POST" style="padding:25px; margin:25px" >
<center>
<pre>
Name:<input type="text" name="name"requireda>
Father's Name:<input type="text" name="fname">
Gender:<input type="radio"name="j" value="M">M <input type="radio" name="j" value="F">F
E-Mail:<input type="email" name="emil">
Contact:<input type="text" pattern="[0-9]{10}" name="cont">
Category:<select name="cat">
<option></option>
<option>Category I</option>
<option>Category II</option>
<option>Category III</option>
</select>
Programmes:<select name="pro">
<option></option>
<option>For class:12-9</option>
<option>For class:8-4</option>
<option>For class:3-Lower kindergarten</option>
<option>Baby sitting</option>
<option>Art & craft</option>
<option>Story Telling</option>
<option>Mythological Programmes</option>
<option>Advisory Programmes</option>
<option>Digital Awareness Programmes</option>
<option>Sewing</option>
<option>Painting</option>
<option>Cooking</option>
</select>
<input type="Submit"value="submit" name="Submit">
</pre>
</center>
</form>
</div>
</div>
<div style="width:100%; height:14%;color:blue; background-color:#F4A460;float:left">
<h1><pre>                                             @2018
                                                      </pre></h1>
</div>
</div>