<?
$username="cgrcredit";
$password="CGRwebdesign1";
$database="cgrapps";

$accounttype1=$_POST['accounttype1'];
$accounttype2=$_POST['accounttype2'];
$accounttype3=$_POST['accounttype3'];
$accounttype4=$_POST['accounttype4'];
$accounttype5=$_POST['accounttype5'];
$name=$_POST['name'];
$membership=$_POST['membership'];
$ssn=$_POST['ssn'];
$address=$_POST['address'];
$dlnumber=$_POST['dlnumber'];
$expdate=$_POST['expdate'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$bday=$_POST['bday'];
$homephone=$_POST['homephone'];
$employment=$_POST['employment'];
$workphone=$_POST['workphone'];
$email=$_POST['email'];
$mother=$_POST['mother'];
$pod=$_POST['pod'];
$podall=$_POST['podall'];
$podspecific=$_POST['podspecific'];
$podspecifica=$_POST['podspecifica'];
$podben=$_POST['podben'];
$podbenstreet=$_POST['podbenstreet'];
$podbencity=$_POST['podbencity'];
$podbenstate=$_POST['podbenstate'];
$podbenzip=$_POST['podbenzip'];
$relation=$_POST['relation'];
$ssn2=$_POST['ssn2'];
$dob2=$_POST['dob2'];
$ugma=$_POST['ugma'];
$ugmaminor=$_POST['ugmaminor'];
$ugmaminorssn=$_POST['ugmaminorssn'];
$agent=$_POST['agent'];
$ugmaspecifica=$_POST['ugmaspecifica'];
$other=$_POST['other'];
$othera=$_POST['othera'];
$authcard=$_POST['authcard'];



mysql_connect('mysqlv14',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO member VALUES ('','$accounttype1','$accounttype2','$accounttype3','$accounttype4','$accounttype5','$name','$membership','$ssn','$address','$dlnumber','$expdate','$city','$state','$zip','$bday','$homephone','$employment','$workphone','$email','$mother','$pod','$podall','$podspecific','$podspecifica','$podben','$podbenstreet','$podbencity','$podbenstate','$podbenzip','$relation','$ssn2','$dob2','$ugma','$ugmaminor','$ugmaminorssn','$agent','$ugmaspecifica','$other','$othera','$authcard')";


mysql_query($query);

mysql_close();

echo "Your information has been submitted!<br>";
echo "Click <a href='forms_app_inx.html'>here</a> to return.<br>"
?>

<?php 
$email_to = "msoq@cgrcu.org";
$email_subject = "Membership Application from $name";
$email_body = "A new membership application has been submitted.";

if(mail($email_to, $email_subject, $email_body)){
    echo "The email $email_subject was successfully sent.";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
