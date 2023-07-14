<html lang="en">
<head>
<title>Membership Application</title>
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

$query  = "SELECT id, accounttype1, accounttype2, accounttype3, accounttype4, accounttype5, name, membership, ssn, address, dlnumber, expdate, city, state, zip, bday, homephone, employment, workphone, email, mother, pod, podall, podspecific, podspecifica, podben, podbenstreet, podbencity, podbenstate, podbenzip, relation, ssn2, dob2, ugma, ugmaminor, ugmaminorssn, agent, ugmaspecifica, other, othera, authcard
           FROM member
		   ORDER BY id DESC 
		   LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');

// print the student info in table
echo '<table border="1">';
while(list($id, $accounttype1, $accounttype2, $accounttype3, $accounttype4, $accounttype5, $name, $membership, $ssn, $address, $dlnumber, $expdate, $city, $state, $zip, $bday, $homephone, $employment, $workphone, $email, $mother, $pod, $podall, $podspecific, $podspecifica, $podben, $podbenstreet, $podbencity, $podbenstate, $podbenzip, $relation, $ssn2, $dob2, $ugma, $ugmaminor, $ugmaminorssn, $agent, $ugmaspecifica, $other, $othera, $authcard) = mysql_fetch_array($result))
{
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='3' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Membership Application</b></center></font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>ID:</b> $id</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Account Type:</b> $accounttype1 $accounttype2 $accounttype3 $accounttype4 $accounttype5</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Applicant Information</b></center></font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Name:</b> $name</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Eligibility for Membership:</b> $membership</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Social Security No.:</b> $ssn</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Drivers License No.:</b> $dlnumber</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Expiration Date:</b> $expdate</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Address:</b> $address</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $city</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $state</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $zip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Birthdate:</b> $bday</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Home Phone:</b> $homephone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employment:</b> $employment</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Work Phone:</b> $workphone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>E-Mail Address:</b> $email</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Mothers Maiden Name:</b> $mother</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Account Designations</b></center></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Payable on Death (POD)/Trust Account:</b> $pod</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>All Accounts:</b> $podall</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Designate specific account(s):</b> $podspecific</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Specific Accounts:</b> $podspecifica</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Beneficiary/POD Payee:</b> $podben</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Address:</b> $podbenstreet</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $podbencity</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $podbenstate</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $podbenzip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Relationship to Applicant:</b> $relation</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Social Security No.:</b> $ssn2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Birthdate:</b> $dob2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'>&nbsp;</td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>UTMA/UGMA<br>(as custodian for minor under the Uniform Transfer/Gifts to Minors Act):</b> $ugma</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Minors Name:</b> $ugmaminor</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Minor TIN/SSN:</b> $ugmaminorssn</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Name of Agent:</b> $agent</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Specific Accounts:</b> $ugmaspecifica</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Other:</b> $other</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Description of Other:</b> $othera</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>See Account Authorization Card:</b> $authcard</font></td></tr>";

}
echo '</table>';
echo '<br>';

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM member ORDER BY id DESC";
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
