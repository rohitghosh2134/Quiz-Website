<head>
    <title>Login| Quiz </title>
    <link rel="stylesheet" href="s.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '','quiz');
?>
<body>
<div class='main_div'><img src ="https://www.jdrf.org/wp-content/uploads/2020/12/AWS-logo-2.jpg" width="100" height="100">
    <form  method="post">

        <div>
            <h1> Hello User </h1>
            <pre style="text-align: center;">
                Fill the details to create an account
            </pre>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            
<?php
    $t=$_POST['uname'];
    $row="select * from user where name='$t' ";
$result=mysqli_query($conn,$row);
if (mysqli_num_rows($result)>0)
{
    print("<p class= 'u_e'>Username name already exist</p>");
}
?>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="age" style="margin-right:10%;"><b>Age :</b></label>
            <input type="number" placeholder="Enter Age" name="Age" required>
            <label for="gender" style="margin:2%;"><b>Gender :</b></label>
            <label for="male"><b>Male</b></label>
            <input type="radio" placeholder="Enter Gender " name="Gender" >
            <label for="gender "><b>Female</b></label>
            <input type="radio" placeholder="Enter Gender" name="Gender"><br><br>
            <label for="Country" style="margin-right:4%;"><b>Country</b></label>
            <input type="text" placeholder="Enter Country" name="Country" required>
            <button type="submit">Create Account</button>
            <pre>
               Already have an Account? To sign-in <a href="index.php"> Click Here</a>
            </pre>

        </div>
    </form>
</div>
<?php
if ($_POST)
{
$t1=$_POST['psw'];
$t2=$_POST['Age'];
$t3=$_POST['Country'];
if (mysqli_num_rows($result)==0)
{
$sql = "insert into user(name,pass,age,country) values('$t','$t1',$t2,'$t3')";
$sql1 = "insert into leaderboard(name,score) values('$t',0)";
$result = mysqli_query($conn,"select * from user");
mysqli_query($conn,$sql1);
mysqli_query($conn, $sql);
print "<h1>Account created</h1>";
header("location: index.php");
}
}

?>







</body>

</html>


