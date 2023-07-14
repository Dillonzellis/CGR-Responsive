<?
$username="cgrcredit";
$password="CGRwebdesign1";
$database="cgrapps";

$date=$_POST['date'];
$name=$_POST['name'];
$accountnum=$_POST['accountnum'];
$employer=$_POST['employer'];
$email=$_POST['email'];
$savings=$_POST['savings'];
$checking=$_POST['checking'];
$christmas=$_POST['christmas'];
$vacation=$_POST['vacation'];
$loana=$_POST['loana'];
$amounta=$_POST['amounta'];
$loanb=$_POST['loanb'];
$amountb=$_POST['amountb'];
$total=$_POST['total'];
$payrolldate=$_POST['payrolldate'];



mysql_connect('mysqlv14',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO payroll VALUES ('','$date','$name','$accountnum','$employer','$email','$savings','$checking','$christmas','$vacation','$loana','$amounta','$loanb','$amountb','$total','$payrolldate')";


mysql_query($query);

mysql_close();

echo "Your information has been submitted!<br>";
echo "Click <a href='https://www.cgrcu.org/pages/payroll-deduction-form.php'>here</a> to return.<br>"
?>

<?php 
$email_to = "msoq@cgrcu.org";
$email_subject = "Payroll Deduction Application from $name";
$email_body = "A new payroll deduction application has been submitted.";

if(mail($email_to, $email_subject, $email_body)){
    echo "The email $email_subject was successfully sent.";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
