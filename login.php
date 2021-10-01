
<?php
$t=$_POST['uname'];
$t1=$_POST['psw'];
$conn = mysqli_connect('localhost', 'root', '','users');
$result =mysqli_query($conn, "select psw from user where name='$t'");
if (mysqli_num_rows($result)==0){
print "<h1 target ='pl'>You don't have an account.</h1>";

echo "To create an account,<a href='Sign-up.html' >Click Here</a>";
}
?>


