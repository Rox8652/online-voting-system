
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lognew.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
    <title>Document</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
    <?php
session_start();

if($_SESSION['user']==true)
{

echo "welcome      "."   ".$_SESSION["user"];   
}
else {
    header('location:index.php');
}
?>

    </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="logout.php">Logout</a>
      </li>
    </ul>
          </div>
          <a class="navbar-brand" href="#">
    <img src="logo.png.png" width="50" height="50" alt="">
  </a>
          <a class="navbar-brand font-weight-normal font-weight-bold" href="index.php" >Online Voting System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>
</header>
<body class="bg-dark text-white">
<br>
<h4 align="center">Questions</h4>
1.Choose your class CR<a href="main1.php"> Click here</a><br><br>
2.Which superpower would you like to have?<a href="superpower.php"> Click here</a><br><br>
3.If you could travel in time, what would you want to see?<a href="travel.php"> Click here</a><br><br>
4.How many hours a day do you spend online/on a Zoom call?<a href="zoom.php"> Click here</a><br><br>
5.Are you an early bird or a night owl? (Multiple choice)<a href="owl.php"> Click here</a><br><br>
6.What is your current role?<a href="role.php"> Click here</a><br><br>
7.Which technology trend will have the greatest impact on our industry over the next year?<a href="trend.php"> Click here</a><br><br>
<br><br><br>
<h3 align="center">WHAT'S A PUBLIC OPINION POLL?</h3>
<p><br>
A scientific, nonbiased public opinion poll is a type of survey or inquiry designed to measure the public's views regarding a particular topic or series of topics. Trained interviewers ask questions of people chosen at random from the population being measured. Responses are given, and interpretations are made based on the results. It is important in a random sample that everyone in the population being studied has an equal chance of participating. Otherwise, the results could be biased and, therefore, not representative of the population. Representative samples are chosen in order to make generalizations about a particular population being studied.
</p><br><br>
<h3>WHY ARE OPINION POLLS IMPORTANT?</h3>
<p>
Polls tell us what proportion of a population has a specific viewpoint. They do not explain why respondents believe as they do or how to change their minds. This is the work of social scientists and scholars. Polls are simply a measurement tool that tells us how a population thinks and feels about any given topic.
</p>
<p>
This can be useful in helping different cultures understand one another because it gives the people a chance to speak for themselves instead of letting only vocal media stars speak on behalf of all. Opinion polling gives people who do not usually have access to the media an opportunity to be heard.
</p>
<div id="poll" align="center">
<h3>Do like this website?</h3>
<form>
Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
</body>
</html>