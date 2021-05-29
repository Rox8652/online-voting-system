
<html>
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
  if (window.XMLHttpRequest) {
    
        xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","travelpoll.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
<li class="nav-item"><?php
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
<div id="poll" align="center">
<h3>who is your class CR:</h3>
<form>
🦖The past: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
🤖The future: <input type="radio" name="vote" value="1" onclick="getVote(this.value)"><br>
🛩There is enough in the present:<input type="radio" name="vote" value="2" onclick="getVote(this.value)">

</form>
</div>

</body>
</html>