<?php
session_start();

?>
<head>
    <title>Login| Quiz </title>
    <link rel="stylesheet" href="s.css">
</head>

<body>
<img src="https://www.jdrf.org/wp-content/uploads/2020/12/AWS-logo-2.jpg" width="100"  height="100">
    <form  method="post">

        <div>
            <h1> Welcome Back </h1>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Login</button>
 	<pre>Don't have a account?, <a href='Sign-up.php'>Click Here</a>

        </div>
    </form>


<?php
if ($_POST)
{
$t=$_POST['uname'];
$t1=$_POST['psw'];
$conn = mysqli_connect('localhost', 'root', '','quiz');
$result =mysqli_query($conn, "select pass from user where name='$t'");
if (mysqli_num_rows($result)==0){
print "<h1>You don't have an account.</h1>";
}
else
{
$row= mysqli_fetch_assoc($result);
$s=mysqli_query($conn,"select score from leaderboard where name='$t'");
$row1=mysqli_fetch_assoc($s);
$_SESSION["score1"]=$row1["score"];
$_SESSION["Admin"]=$t;
if ($t1== $row["pass"])
header("location: home.php");
else
print  "<h1>You enter a wrong password</h1>";
}
}
?>



</body>

</html>

