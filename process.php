<?php
session_start();
include 'config.php';
/* set a query for inserting records */
$sqlQuery = "INSERT INTO `tblcomment` (`PERSON`, `COMMENT`, `DATEPOSTED`) 
VALUES ('".$_POST['NAME']."','".$_POST['COMMENT']."',Now())";
/* execute the query */
$result = mysqli_query($sqlQuery) or die(mysql_error());
/* checking if the query has successfully executed. */
if ($result==1) {
	/* set a query for retrieving the data .*/
    $sqlQuery = "SELECT * FROM  `tblcomment`  order by ID desc"; 
	/* execute the query */
	$result = mysqli_query($sqlQuery) or die(mysql_error());
	/* loop the executed query */
	while ($row = mysql_fetch_array($result)) {

		echo '<article class="comment-window">'; 
		echo '<div class="comment-postedby">Posted by: ' . $row['PERSON'].'</div>';
		echo '<div class="comment-body">';
		echo  $row['COMMENT'];
		echo '</div>';
		echo '<div class="comment-date">';
		echo 'Date Posted: ' . $row['DATEPOSTED'];
		echo '</div>';
		echo '</article>'; 
	}	 
}
?>