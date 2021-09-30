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
<?
$conn=mysqli_connect('localhost','root','','ngo');
if(isset($_POST['Submit']))
{
$a=$_POST['name'];
$b=$_POST['fname'];
$c=$_POST['j'];
$d=$_POST['email'];
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
<div style="width:100%;color:yellow; font-size:35px">
<div style="width:100%;height:100%;background-color:#F0E68C;background-image:url(reg.jpg);background-repeat:no-repeat;background-size:cover;float:left">

<form action="" method="POST">

NAME <input type="text"name="name">
F_NAME <input type="text"name="fname">
Gender:<input type="radio" name="j">M <input type="radio" name="j">F
EMAIL <input type="text"name="email">
CONTACT <input type="text"name="cont">
catt<input type="text"name="cat">
prog <input type="text"name="pro">

<input type="Submit" value="Submit" name="Submit">



</form>
</div>
</div>
<div style="width:100%; height:14%;color:blue; background-color:#F4A460;float:left">
<h1><pre>                                             @2018
                                                      </pre></h1>
</div>
</div>