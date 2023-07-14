<?php
$id=$_POST['id'];
$con = mysql_connect("mysqlv107","cgrcredit","CGRwebdesign1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cgrapps", $con);

mysql_query("DELETE FROM loan WHERE id='$id'");

echo '<font face="arial" size="2">The application has been deleted!</font>';
echo '<br>';
echo '<font face="arial" size="2">Click <a href="loan_output.php">here</a> to go back.</font>';

mysql_close($con);

?>