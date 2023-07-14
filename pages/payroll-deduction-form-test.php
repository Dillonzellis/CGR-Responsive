<?php
	if(isset($_POST['SubmitButton'])){
		
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$privatekey = '6LeCchoTAAAAADsx3sRjCVZkZ3fX23nzaWOtTAlc';
		$response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
		$data = json_decode($response);
		
		if(isset($data->success) AND $data->success==true){
			
			header('Location: insert13.php?CaptchaPass=True');
			
		}else{
			
			header('Location: payroll-deduction-form.php?CaptchaFail=True');
			
		}
		
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union - Payroll Deduciton Form</title>

<!--META DATA-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="Like all credit unions, CGR Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder – or an owner – of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
<meta name="keywords" content=""/>
<script src='https://www.google.com/recaptcha/api.js'></script>


<?php include ('../includes/head.php'); ?>

</head>

<body>
<?php include_once("../includes/analyticstracking.php") ?>
<?php include ('../includes/header.php');?>

<main id="main" class="content page">


    
    <div class="container">

<div class="nine columns">
<h1 class="page-title">Payroll Deduction Form</h1>


<form id="payroll-deduction-form" class="" method="POST" action="#">
    
    
    
    <input aria-label="Date" type="text" name="date" required placeholder="Date" class=""/>
    <input aria-label="Name" type="text" name="name" required placeholder="Name" class=""/><br>
    
    
    
    <input aria-label="Account Number Field" type="text" name="accountnum" required placeholder="Account Number" class=""/>
    <input aria-label="Employer" type="text" name="employer" required placeholder="Employer" class=""/>
    <input aria-label="Email" type="text" name="email" required placeholder="Email" class=""/>
   
    
    <p class="df-mtitle fw600">Deduction Information </p>
    
    <input aria-label="Savings Amount" type="text" name="savings" placeholder="Savings Amount" class=""/>
    <input aria-label="Checking Amount" type="text" name="checking" placeholder="Checking Amount" class=""/>
    <input aria-label="Christmas Amount" type="text" name="christmas" placeholder="Christmas Amount" class=""/>
    <input aria-label="Vacation Amount" type="text" name="vacation" placeholder="Vacation Amount" class=""/>   
   
    <br>
    
    
    <input aria-label="Loan Number" type="text" name="loana" placeholder="Loan Number" value="" class=""/>
    <input aria-label="Amount" type="text" name="amounta" placeholder="Amount" value="" class=""/>
    <br>
    
    
    <input aria-label="Loan Number 2" type="text" name="loanb" placeholder="Loan Number" value="" class=""/>
    <input aria-label="Amount 2" type="text" name="amountb" placeholder="Amount" value="" class=""/>
    <br>
    
    
    <input aria-label="Total Deductions" type="text" name="total" placeholder="Total Deductions" value="" class=""/>
    <input aria-label="Next Payroll Date" type="text" name="payrolldate" placeholder="Next Payroll Date" value="" class=""/>
    <br>
    <div class="g-recaptcha" data-sitekey="6LeCchoTAAAAABeBTaD2j8Xq8bZ1NeWFf0Vc7YuX"></div>
    <br>
	<?php if(isset($_GET['CaptchaFail'])){ ?>
	Captcha Failed. Please try again.
	<?php } ?>
	<br>
    <input type="submit" value="Submit" name="SubmitButton" id="SubmitButton"/>
    <input type="reset" value="Reset"/>
    
    </form>


</div><!--end nine columns-->

<div class="three columns sidebar">
<?php include ('../includes/applications-sidebar.php'); ?>
</div><!--end three columns sidebar-->
        
        
        
</main>






<?php include ('../includes/footer.php');?>

<!--JAVASCRIPT INCLUDES-->


</body>

</html>