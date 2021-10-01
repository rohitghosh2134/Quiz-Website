<?php
// Start the session
session_start();
if (!isset($_SESSION["Admin"]))
{
header("location:index.php");
}
$conn=mysqli_connect('localhost','root','','quiz');
$p=$_SESSION["Admin"];
$sql1="select * from `leaderboard` where `name`='$p'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
?>
<html>
<head>
    <title>Home| Quiz </title>
    <link rel="stylesheet" href="s2.css">
</head>

<body>
 <nav id="navbar">
      <div class="container">
<div id="img-container">
<img src="https://www.jdrf.org/wp-content/uploads/2020/12/AWS-logo-2.jpg" width="100" height="100">
</div>
<div id="inside">
Hello <?php echo $_SESSION["Admin"]; ?><br>
Your Score: <?php echo $row['score']; ?>
</div>

<ul>
<li><a href='home.php'>Home</a></li>
<li><a href='quiz.php'> Quiz</a></li>
<li id='btn'><a href='logout.php'>Logout</a></li>
</ul>
</div>
</nav>
<div id='showcase'>
<a href='quiz.php' id='a_q'>Attempt Quiz</a>
</div>
</body>
</html>

