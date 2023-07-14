<html lang="en">
<head>
<title>Loan Application</title>
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

$query  = "SELECT id, applytype, date, loantype, purpose, loanamt, appName, membership, appSSN, email, appAddress, appBirthday, appCity, appState, appZip, appHomePhone, appResTime, appPayType, appPayment, appEmp, appEmpPosition, appEmpTime, appEmpAdd, appEmpCity, appEmpState, appEmpZip, appEmpPhone, appEmpSalary, appPayFrequency, appOtherInc, appOtherSource, appEmp2, appEmpPosition2, appEmpTime2, appEmpAdd2, appEmpCity2, appEmpState2, appEmpZip2, appEmpPhone2, appEmpSalary2, appPayFrequency2, jointName, jointAcct, jointSSN, jointAddress, jointBirthday, jointCity, jointState, jointZip, jointHomePhone, jointResTime, jointPayType, jointPayment, jointEmp, jointEmpPosition, jointEmpTime, jointEmpAddress, jointEmpCity, jointEmpState, jointEmpZip, jointEmpPhone, jointEmpSalary, jointPayFrequency, jointOtherInc, jointOtherSource, comments, contact
           FROM loan
		   ORDER BY id DESC 
		   LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');

// print the student info in table
echo '<table border="1">';
while(list($id, $applytype, $date, $loantype, $purpose, $loanamt, $appName, $membership, $appSSN, $email, $appAddress, $appBirthday, $appCity, $appState, $appZip, $appHomePhone, $appResTime, $appPayType, $appPayment, $appEmp, $appEmpPosition, $appEmpTime, $appEmpAdd, $appEmpCity, $appEmpState, $appEmpZip, $appEmpPhone, $appEmpSalary, $appPayFrequency, $appOtherInc, $appOtherSource, $appEmp2, $appEmpPosition2, $appEmpTime2, $appEmpAdd2, $appEmpCity2, $appEmpState2, $appEmpZip2, $appEmpPhone2, $appEmpSalary2, $appPayFrequency2, $jointName, $jointAcct, $jointSSN, $jointAddress, $jointBirthday, $jointCity, $jointState, $jointZip, $jointHomePhone, $jointResTime, $jointPayType, $jointPayment, $jointEmp, $jointEmpPosition, $jointEmpTime, $jointEmpAddress, $jointEmpCity, $jointEmpState, $jointEmpZip, $jointEmpPhone, $jointEmpSalary, $jointPayFrequency, $jointOtherInc, $jointOtherSource, $comments, $contact) = mysql_fetch_array($result))
{
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='3' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Loan Application</b></center></font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>ID:</b> $id</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Date:</b> $date</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Applying for Joint Credit?</b> $loantype</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Loan Type:</b> $loantype</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Purpose:</b> $purpose</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Loan Amount Requested:</b> $loanamt</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Applicant Information</b></center></font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>Name:</b> $appName</font></td></tr>";
	echo "<tr><td colspan='2'><font size='2' face='Arial, Helvetica, sans-serif'><b>If you are not already a member, how would you be eligible?</b> $membership</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Social Security No.:</b> $appSSN</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>E-mail Address:</b> $email</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Birthdate:</b> $appBirthday</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Address:</b> $appAddress</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $appCity</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $appState</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $appZip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Home Phone:</b> $appHomePhone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Time at Residence:</b> $appResTime</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>$appPayType</b></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Monthly Payment:</b> $appPayment</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Employment Information (Applicant)</b></center></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer:</b> $appEmp</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Position:</b> $appEmpPosition</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Length of Employment:</b> $appEmpTime</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Address:</b> $appEmpAdd</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $appEmpCity</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $appEmpState</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $appEmpZip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Phone:</b> $appEmpPhone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Gross Salary:</b> $appEmpSalary</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>$appPayFrequency</b></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Other Gross Monthly Income:</b> $appOtherInc</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Source of Other Income:</b> $appOtherSource</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Other Employment Information (Applicant)</b></center></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer:</b> $appEmp2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Position:</b> $appEmpPosition2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Length of Employment:</b> $appEmpTime2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Address:</b> $appEmpAdd2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $appEmpCity2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $appEmpState2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $appEmpZip2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Phone:</b> $appEmpPhone2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Gross Salary:</b> $appEmpSalary2</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>$appPayFrequency2</b></font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Co-Applicant Information</b></center></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Name:</b> $jointName</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Account Number:</b> $jointAcct</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Social Security No.:</b> $jointSSN</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Birthdate:</b> $jointBirthday</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Address:</b> $jointAddress</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $jointCity</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $jointState</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $jointZip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Home Phone:</b> $jointHomePhone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Time at Residence:</b> $jointResTime</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>$jointPayType</b></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Monthly Payment:</b> $jointPayment</font></td></tr>";
	echo "<tr><td colspan='2' bgcolor='#007cb8'><font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'><center><b>Employment Information (Co-Applicant)</b></center></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer:</b> $jointEmp</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Position:</b> $jointEmpPosition</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Length of Employment:</b> $jointEmpTime</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Address:</b> $jointEmpAddress</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>City:</b> $jointEmpCity</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>State:</b> $jointEmpState</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Zip:</b> $jointEmpZip</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Employer Phone:</b> $jointEmpPhone</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Gross Salary:</b> $jointEmpSalary</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>$jointPayFrequency</b></font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Other Gross Monthly Income:</b> $jointOtherInc</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Source of Other Income:</b> $jointOtherSource</font></td></tr>";
	echo "<tr><td colspan='2'>&nbsp;</td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Comments:</b> $comments</font></td></tr>";
	echo "<tr><td><font size='2' face='Arial, Helvetica, sans-serif'><b>Preferred Method of Contact:</b> $contact</font></td></tr>";


}
echo '</table>';
echo '<br>';
echo '<br>';

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM loan ORDER BY id DESC";
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

<form action="delete_loan.php" method="post">
<table border="0" cellpadding="4" cellspacing="0" align="left">
<tr><td><font size='2' face='Arial, Helvetica, sans-serif'>ID to Delete: <input type="text" name="id" size="4" value=""></font></td>
<td><font size='2' face='Arial, Helvetica, sans-serif'><input type="submit" name="submit" value="Delete It"></font></td></tr>
</table>
</form>

</body>
</html>
