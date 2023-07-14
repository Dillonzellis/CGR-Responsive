<?
$username="cgrcredit";
$password="CGRwebdesign1";
$database="cgrapps";

$no=$_POST['no'];
$yes=$_POST['yes'];
$name=$_POST['name'];
$account=$_POST['account'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$confirmationdate=$_POST['confirmationdate'];
$hphone1=$_POST['hphone1'];
$hphone2=$_POST['hphone2'];
$hphone3=$_POST['hphone3'];
$cphone1=$_POST['cphone1'];
$cphone2=$_POST['cphone2'];
$cphone3=$_POST['cphone3'];

mysql_connect('mysqlv14',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO optin VALUES ('','$no','$yes','$name','$account','$street','$city','$state','$zip','$email','$confirmationdate','$hphone1','$hphone2','$hphone3','$cphone1','$cphone2','$cphone3')";


mysql_query($query);

mysql_close();

echo "Your information has been submitted!<br>";
echo "Click <a href='overdraft-optin-form.php'>here</a> to return.<br>"
?>

<?php 
$email_to = "msoq@cgrcu.org";
$email_subject = "Overdraft Opt-In Form Submitted by $name";
$email_body = "A new overdraft opt-in form has been submitted by $name.";

if(mail($email_to, $email_subject, $email_body)){
    echo "The email $email_subject was successfully sent.";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
