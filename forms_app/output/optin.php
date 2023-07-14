<html lang="en">
<head>
<title>Overdraft Opt-In Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include 'config.php';
include 'opendb.php';

// how many rows to show per page
$rowsPerPage = 1;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

$query  = "SELECT id, no, yes, name, account, street, city, state, zip, email, confirmationdate, hphone1, hphone2, hphone3, cphone, cphone2, cphone3
           FROM optin
		   ORDER BY id DESC 
		   LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');

// print the student info in table
echo '<table border="1">';
while(list($id, $no, $yes, $name, $account, $street, $city, $state, $zip, $email, $confirmationdate, $hphone1, $hphone2, $hphone3, $cphone, $cphone2, $cphone3) = mysql_fetch_array($result))
{
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='3' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Overdraft Opt-In Form</b></center></font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>ID:</b> $id</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'>$no</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'>$yes</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Name:</b> $name</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Account No.:</b> $account</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Address:</b> $street</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $city</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $state</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $zip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Email:</b> $email</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Confirmation Date:</b> $confirmationdate</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Home Phone:</b> ($hphone1) $hphone2-$hphone3</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Cell Phone:</b> ($cphone) $cphone2-$cphone3</font></td></tr>";

}
echo '</table>';
echo '<br>';
echo '<font size="2" face="Arial, Helvetica, sans-serif"><a href="delete_optin.php">Click to delete</a></font>';
echo '<br>';
echo '<br>';

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM optin ORDER BY id DESC";
$result  = mysql_query($query) or die('Error, query failed');
$row     = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage);

$self = $_SERVER['PHP_SELF'];

// creating 'previous' and 'next' link
// plus 'first page' and 'last page' link

// print 'previous' link only if we're not
// on page one
if ($pageNum > 1)
{
	$page = $pageNum - 1;
	$prev = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$page\">[Prev]</a></font> ";

	$first = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=1\">[First Page]</a></font> ";
}
else
{
	$prev  = ' <font size="2" face="Arial, Helvetica, sans-serif">[Prev]</font> ';       // we're on page one, don't enable 'previous' link
	$first = ' <font size="2" face="Arial, Helvetica, sans-serif">[First Page]</font> '; // nor 'first page' link
}

// print 'next' link only if we're not
// on the last page
if ($pageNum < $maxPage)
{
	$page = $pageNum + 1;
	$next = "  <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$page\">[Next]</a></font> ";

	$last = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$maxPage\">[Last Page]</a></font> ";
}
else
{
	$next = '<font size="2" face="Arial, Helvetica, sans-serif"> [Next]</font> ';      // we're on the last page, don't enable 'next' link
	$last = ' <font size="2" face="Arial, Helvetica, sans-serif">[Last Page]</font> '; // nor 'last page' link
}

// print the page navigation link
echo $first . $prev . " <font size='2' face='Arial, Helvetica, sans-serif'>Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages</font> " . $next . $last;

include 'closedb.php';
?>

</body>
</html>
