<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll1_result.txt";
$content = file($filename);
//put content in array

$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];
$rohit= $array[2];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}
if ($vote == 2){
  $rohit = $rohit + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no."||".$rohit;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Saurabh:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes+$rohit),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes+$rohit),2)); ?>%
</td>
</tr>
<tr>
<td>Rohan:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes+$rohit),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes+$rohit),2)); ?>%
</td>
</tr>
<tr>
<td>Rohit:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($rohit/($no+$yes+$rohit),2)); ?>'
height='20'>
<?php echo(100*round($rohit/($no+$yes+$rohit),2)); ?>%
</td>
</tr>
</table>