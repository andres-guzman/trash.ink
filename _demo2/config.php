 <?php
$server = 'localhost';
$dbuser = 'g1e0s3x8_root';
$dbpass = '%bxBxO@6WtFW';
$dbname = 'g1e0s3x8_commentdb';
$con    = @mysql_connect($server, $dbuser, $dbpass);
if (isset($con)) {
    # code...
    $dbSelect = mysql_select_db($dbname);
    if (!$dbSelect) {
        echo "Problem in selecting database! Please contact administraator";
        die(mysql_error());
    }
} else {
    echo "Problem in database connection! Please contact administraator";
    die(mysql_error());
}
?> 
<!-- CREATE TABLE IF NOT EXISTS `tblcomment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERSON` varchar(50) NOT NULL,
  `COMMENT` text NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; -->