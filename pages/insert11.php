<?php
  require_once('recaptchalib.php');
  $privatekey = "6LeCchoTAAAAADsx3sRjCVZkZ3fX23nzaWOtTAlc";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("<center><img src='/images/logo.png'><br><font size='2' face='Arial, Helvetica, sans-serif'>The reCAPTCHA wasn't entered correctly. <a href='#' onclick='history.go(-1)'>Please go back</a> and try it again.</center></font>");
  } else {
    // Your code here to handle a successful verification
  }
  ?>
<?
$username="cgrcredit";
$password="CGRwebdesign1";
$database="cgrapps";

$applytype=$_POST['applytype'];
$date=$_POST['date'];
$loantype=$_POST['loantype'];
$purpose=$_POST['purpose'];
$loanamt=$_POST['loanamt'];
$appName=$_POST['appName'];
$membership=$_POST['membership'];
$appSSN=$_POST['appSSN'];
$email=$_POST['email'];
$appAddress=$_POST['appAddress'];
$appBirthday=$_POST['appBirthday'];
$appCity=$_POST['appCity'];
$appState=$_POST['appState'];
$appZip=$_POST['appZip'];
$appHomePhone=$_POST['appHomePhone'];
$appResTime=$_POST['appResTime'];
$appPayType=$_POST['appPayType'];
$appPayment=$_POST['appPayment'];
$appEmp=$_POST['appEmp'];
$appEmpPosition=$_POST['appEmpPosition'];
$appEmpTime=$_POST['appEmpTime'];
$appEmpAdd=$_POST['appEmpAdd'];
$appEmpCity=$_POST['appEmpCity'];
$appEmpState=$_POST['appEmpState'];
$appEmpZip=$_POST['appEmpZip'];
$appEmpPhone=$_POST['appEmpPhone'];
$appEmpSalary=$_POST['appEmpSalary'];
$appPayFrequency=$_POST['appPayFrequency'];
$appOtherInc=$_POST['appOtherInc'];
$appOtherSource=$_POST['appOtherSource'];
$appEmp2=$_POST['appEmp2'];
$appEmpPosition2=$_POST['appEmpPosition2'];
$appEmpTime2=$_POST['appEmpTime2'];
$appEmpAdd2=$_POST['appEmpAdd2'];
$appEmpCity2=$_POST['appEmpCity2'];
$appEmpState2=$_POST['appEmpState2'];
$appEmpZip2=$_POST['appEmpZip2'];
$appEmpPhone2=$_POST['appEmpPhone2'];
$appEmpSalary2=$_POST['appEmpSalary2'];
$appPayFrequency2=$_POST['appPayFrequency2'];
$jointName=$_POST['jointName'];
$jointAcct=$_POST['jointAcct'];
$jointSSN=$_POST['jointSSN'];
$jointAddress=$_POST['jointAddress'];
$jointBirthday=$_POST['jointBirthday'];
$jointCity=$_POST['jointCity'];
$jointState=$_POST['jointState'];
$jointZip=$_POST['jointZip'];
$jointHomePhone=$_POST['jointHomePhone'];
$jointResTime=$_POST['jointResTime'];
$jointPayType=$_POST['jointPayType'];
$jointPayment=$_POST['jointPayment'];
$jointEmp=$_POST['jointEmp'];
$jointEmpPosition=$_POST['jointEmpPosition'];
$jointEmpTime=$_POST['jointEmpTime'];
$jointEmpAddress=$_POST['jointEmpAddress'];
$jointEmpCity=$_POST['jointEmpCity'];
$jointEmpState=$_POST['jointEmpState'];
$jointEmpZip=$_POST['jointEmpZip'];
$jointEmpPhone=$_POST['jointEmpPhone'];
$jointEmpSalary=$_POST['jointEmpSalary'];
$jointPayFrequency=$_POST['jointPayFrequency'];
$jointOtherInc=$_POST['jointOtherInc'];
$jointOtherSource=$_POST['jointOtherSource'];
$comments=$_POST['comments'];
$contact=$_POST['contact'];


mysql_connect('mysqlv14',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO loan VALUES ('','$applytype','$date','$loantype','$purpose','$loanamt','$appName','$membership','$appSSN','$email','$appAddress','$appBirthday','$appCity','$appState','$appZip','$appHomePhone','$appResTime','$appPayType','$appPayment','$appEmp','$appEmpPosition','$appEmpTime','$appEmpAdd','$appEmpCity','$appEmpState','$appEmpZip','$appEmpPhone','$appEmpSalary','$appPayFrequency','$appOtherInc','$appOtherSource','$appEmp2','$appEmpPosition2','$appEmpTime2','$appEmpAdd2','$appEmpCity2','$appEmpState2','$appEmpZip2','$appEmpPhone2','$appEmpSalary2','$appPayFrequency2','$jointName','$jointAcct','$jointSSN','$jointAddress','$jointBirthday','$jointCity','$jointState','$jointZip','$jointHomePhone','$jointResTime','$jointPayType','$jointPayment','$jointEmp','$jointEmpPosition','$jointEmpTime','$jointEmpAddress','$jointEmpCity','$jointEmpState','$jointEmpZip','$jointEmpPhone','$jointEmpSalary','$jointPayFrequency','$jointOtherInc','$jointOtherSource','$comments','$contact')";


mysql_query($query);

mysql_close();

echo "Your information has been submitted!<br>";
echo "Click <a href='https://www.cgrcu.org'>here</a> to return.<br>"
?>

<?php 
$email_to = "msoq@cgrcu.org";
$email_subject = "Loan Application from $appName";
$email_body = "A new loan application has been submitted.";

if(mail($email_to, $email_subject, $email_body)){
    echo "The email $email_subject was successfully sent.";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
