
<?php

$process         = $_GET['process'];
$nim             = $_GET['nim'];
$course          = $_GET['course'];
$uts_score       = $_GET['uts_score'];
$uas_score       = $_GET['uas_score'];
$assigment_score = $_GET['assigment_score'];

if(!empty($process)){
	echo 'Proses : '.$proses;
 echo '<br/>Nimm : '.$nim;
 echo '<br/>Course : '.$course;
 echo '<br/>UTS Score : '.$uts_score;
 echo '<br/>UAS Score : '.$uas_score;
 echo '<br/>assigment_score : '.$assigment_score;

}


?>