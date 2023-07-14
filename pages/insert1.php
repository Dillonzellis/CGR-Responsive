<?
$username="cgrcredit";
$password="CGRwebdesign1";
$database="cgrapps";

$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$account=$_POST['account'];


mysql_connect('mysqlv14',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO enrollment VALUES ('','$name','$email','$tel','$account')";


mysql_query($query);

mysql_close();

echo "Your information has been submitted!<br>";
echo "Click <a href='https://www.cgrcu.org'>here</a> to return.<br>"
?>

<?php 
$email_to = "msoq@cgrcu.org";
$email_subject = "Enrollment Form from $name";
$email_body = "A new Remote Deposit Capture form has been submitted.";

if(mail($email_to, $email_subject, $email_body)){
    echo "The email $email_subject was successfully sent.";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
