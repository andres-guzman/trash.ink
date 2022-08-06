<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$host="internal-db.s228714.gridserver.com";
$username="db228714";
$password="o!taI{K^f48";
$databasename="db228714_comments";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['user_comm']))
{
  $comment = mysql_real_escape_string($_POST['user_comm']);
  $insert=mysql_query("insert into comments values('','$comment',CURRENT_TIMESTAMP)");
  
  $id=mysql_insert_id();

  $select=mysql_query("select comment,post_time from comments where comment='$comment' and id='$id'");
  
  if($row=mysql_fetch_array($select))
  {
	  $comment = mysql_real_escape_string($row['comment']);
    $time=$row['post_time'];
  ?>

    <li class="comment_div">
      <div class="comment-wrapper">
        <p class="comment"><?php echo htmlspecialchars($comment);?>
        <p class="time"><?php echo date('M d Y - H:i a', strtotime($time));?></p>
      </div>
    </li>

  <?php
  }
exit;
}

?>