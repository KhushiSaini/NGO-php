<html>
<head>
</head>
<body>
<form method="post">
<input type="text" name="n">
<input type="submit" value="click" name="submit">
</form>
<?php
$conn=mysqli_connect('localhost','root','','ngo');
$a=$_POST['n']; 
$sql="INSERT INTO `abc`(`name`) VALUES ('$a')";
$res=mysqli_query($conn,$sql);
if($res)
{
echo "ädd";
}
else
{
echo "not";
}
?>
</body>
</html>