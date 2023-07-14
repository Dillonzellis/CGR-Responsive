<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

ini_set('display_errors', 'on');
error_reporting(E_ALL);

$database_name = 'cgrapps';
$database_username = 'cgrcredit'; 
$database_password = 'CGRwebdesign1';
$database_host = 'mysqlv107';

$dblink = mysql_connect($database_host, $database_username, $database_password) or die("cant connect to server".mysql_error());
mysql_select_db($database_name, $dblink) or die('can\'t connect to prod database' .mysql_error());




function CalcDealerFee($financed){
    global $dblink;
    
    $qry = "SELECT DISTINCT
            calc_rates.year_model
            FROM
            calc_rates";
    $res = mysql_query($qry, $dblink);
    
    
    
if($financed < 10000){
  $fee = 0;
}elseif($financed >= 10000 && $financed < 20000){
  $fee = 100;
}else{
  $fee = 200;
}

 return $fee;
}
$calculate_html = '';
$rate_add_2 = '';
$term = array(24=>'24 months',36=>'36 months',48=>'48 months',60=>'60 months',72=>'72 months',84=>'84 months');
$creditrating = array('rate_a_plus'=>'Exceptional Credit (higher than 720)',
      'rate_a'=>'Excellent Credit (685-719)',
      'rate_b'=>'Good Credit (655-684)',
      'rate_c'=>'Average Credit (620-654)',
      'rate_d'=>'Below Average (585-619)',
      'rate_e'=>'Poor Credit (less than 584)');
$theLTV = array('rate_a_plus'=>115,
      'rate_a'=>110,
      'rate_b'=>105,
      'rate_c'=>100,
      'rate_d'=>90,
      'rate_e'=>80);

$errors = array();
$errorstring = '';
$row = array();
// DEFAULT TERMS PER CAMERON
$theterms = array(48,60,72,84);
if(isset($_POST['Submit']) && $_POST['Submit'] == 'Calculate New Loan'){

 // verify the data is correct

 if(isset($_POST['rembalance'])){
  $_POST['rembalance'] = str_replace(",", "", $_POST['rembalance']);
  $_POST['rembalance'] = str_replace('$', "", $_POST['rembalance']);
}
// if(isset($_POST['curmonthpay'])){
//  $_POST['curmonthpay'] = str_replace(",", "", $_POST['curmonthpay']);
//  $_POST['curmonthpay'] = str_replace('$', "", $_POST['curmonthpay']);
// }

// if(!isset($_POST['loanterm']) || !is_numeric($_POST['loanterm'])){
//  $errors[] = 'Please enter a valid loan term';
// }
if(!isset($_POST['rembalance']) || !is_numeric($_POST['rembalance'])){
  $errors[] = 'Please enter a valid loan amount';
}
// if(!isset($_POST['curmonthpay']) || !is_numeric($_POST['curmonthpay'])){
//  $errors[] = 'Please enter a valid currently monthly payment';
// }
if(isset($_POST['rembalance']) && $_POST['rembalance'] < 5000){
  $errors[] = 'The loan amount must be greater than $5,000.00';
}
if(!isset($_POST['vehicleyear'])){
  $errors[] = 'Please enter a valid year of vehicle';
}
if(!isset($_POST['Creditrating'])){
  $_POST['Creditrating'] = 'Excellent Credit';
}

 if(count($errors) == 0){
  
  // CONNECT TO DB FOR RATE
  
  //foreach($theterms as $termval){
   $qry = "SELECT
            calc_rates.".$_POST['Creditrating'].",
            calc_rates.year_model,
            calc_rates.loan_term, 
            calc_rates.term_months
            FROM
            calc_rates WHERE calc_rates.year_model = '".  mysql_real_escape_string($_POST['vehicleyear'])."' AND calc_rates.".$_POST['Creditrating']." > 0";
   
  // print $qry."<br />";
   
   $res = mysql_query($qry,$dblink);
   
  //}

  $calculate_html = '<h3><font face="Verdana, Geneva, sans-serif" >Results for '.$_POST['vehicleyear'].'</font></h3>';
  
  // formula
  $calculate_html .='<p><b><font face="Verdana, Geneva, sans-serif" size="2">Annual Percentage Rate (APR) based on '.htmlentities($creditrating[$_POST['Creditrating']]).' with an amount to finance of $'.number_format($_POST['rembalance'],2).'</font></b></p>';
  
  // foreach($theterms as $termval){
  while($row = mysql_fetch_assoc($res)){
   $interest_rate = $period_interest = $row[$_POST['Creditrating']]/100;
   // $period_interest = substr($period_interest,1);
   
   // If car older than 2007, add 2%
   if($_POST['vehicleyear'] < 2013){
    $period_interest = $period_interest+.02;
    $rate_add_2 = ' <font face="Verdana, Geneva, sans-serif" size="2">(2.00% added for vehicles older than 2009)</font>';
    $rate_add_2 = ''; // remove the statement per Cameron
   }
   
   $period_interest_calc = $period_interest/12;
   
   $c_period_payment  = $_POST['rembalance'] * ($period_interest_calc / (1 - pow((1 + $period_interest_calc), -($row['term_months']))));
                      //$loan_amount * ($period_interest / (1 - pow((1 + $period_interest), -($total_periods))));
                      
   $yearly_cost = $c_period_payment*12;
  // $yearly_current = $_POST['curmonthpay']*12;
  // $yearly_savings = $yearly_current - $yearly_cost;
   
   $total_paid        = number_format($c_period_payment * $row['term_months'], 2, '.', ',');
   $total_interest    = number_format($c_period_payment * $row['term_months'] - $_POST['rembalance'], 2, '.', ',');
   $total_principal   = number_format($_POST['rembalance'], 2, '.', ',');
   
   
    $calculate_html .= '<p><font face="Verdana, Geneva, sans-serif" size="2" ><b>APR:  '.number_format($interest_rate*100,2).'%'.$rate_add_2.', '.$row['loan_term'].' Payment: $'.number_format($c_period_payment,2).'</font></b></p>
        ';
   
  }
  
  $calculate_html .= '<p><form action="?" method="post"><input type="submit" name="return" value="Return to calculator" /></form></p>';
  
 }else{
  $errorstring .='<p>The follow errors occured:</p><ul>';
  foreach($errors as $value){
   $errorstring .= '<li>'.$value.'';
  }
  $errorstring .='</ul>';
}
}




$qry = "SELECT DISTINCT
            calc_rates.year_model
            FROM
            calc_rates";
    $res = mysql_query($qry, $dblink);
    
    $model_year = array();
    while($row = mysql_fetch_assoc($res)){
        $model_year[] = $row['year_model'];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union - Auto Loans</title>

<!--META DATA-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="Like all credit unions, CGR Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder – or an owner – of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
<meta name="keywords" content=""/>

<?php include ('../includes/head.php'); ?>

</head>

<body>
<?php include_once("../includes/analyticstracking.php") ?>
<?php include ('../includes/header.php');?>

<main id="main" class="content page">

<div class="container">

<div class="nine columns">	
 
<h1 class="page-title">Auto Loans</h1>

<p>Shopping for a new or used car or truck?  You’ve already got plenty to think about:  makes, models, optional equipment, colors, and the list goes on.  When it comes to financing, make it easy on yourself with an auto loan from CGR Credit Union.  Take advantage of our competitive interest rates and the kind of personalized service that only your credit union can provide.</p>

<div class="twelve columns">

<div class="six columns">
<p id="before" class="df-mtitle gbd_red fw600">Before You Buy</p>

<p>Buying a car is a big investment.  Before you grab the keys, use these tips to make sure the car you buy is the best one for you.</p> 

<ul>
<li>Determine the payment you are comfortable with.  Shop your loan before you shop your car.
<ul>
<li>CGR Auto Loans offer payment options that fit your budget.  Choose from weekly, bi-weekly, semi-monthly, or monthly payments with payroll deduction available.  Enjoy the benefit of first payment flexibility with no payment for the first 90 days.</li>
<li>Use our auto loan calculator to estimate your payments.</li>
<li>Get pre-approved for a loan before you shop</li>
</ul>
</li>

<li>Do a little research to find out what the car is worth
<ul>
<li>Check pricing and values using <a href="#" data-remodal-target="nada">NADA guides</a></li>
</ul>
</li>

<li>Don’t skip out on test driving.  Test drive several models on various road conditions.</li>
</ul>

<p>Already found the car for you?  Start the loan process with our <a id="loanappLink4" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=loanapp'); return false;" target="_blank">application here</a>.</p>
</div>

<div class="five columns loanCalc">
<p align="center"><img src="../images/pages/auto-loan1.jpg" alt="Before You Buy" width="321" height="214" title="Before You Buy"></p>

<p><?php print $calculate_html ?> <?php print $errorstring ?>
                  <?php if(!isset($calculate_html) || $calculate_html == ''){ ?>
                </p>
                <p style="font-size:18px;" align="center"><strong>Auto Loan Rate &amp; Payment Calculator</strong></p>
                <form action="?" method="post">
                 
                <p align="center"><strong>Your Credit Score?</strong> <?php
print '<select name="Creditrating" aria-label="Your credit score?">';
foreach($creditrating as $ratingkey=>$ratingvalue){
if(isset($_POST['Creditrating']) && $_POST['Creditrating'] == $ratingkey){
  print '<option value="'.$ratingkey.'" selected>'.$ratingvalue.'</option>';
}else{
  print '<option name="Creditrating" value="'.$ratingkey.'">'.$ratingvalue.'</option>';
}
}
print '</select>'
?></p>

<p align="center"><strong>Amount to Finance $</strong> <input style="display: block;" name="rembalance" type="text" id="rembalance" value="<?php (isset($_POST['rembalance']) && is_numeric($_POST['rembalance'])? print $_POST['rembalance']:print '') ?>" aria-label="Amount to Finance" /></p>

        <p align="center"><strong>Year of Vehicle</strong> <select name="vehicleyear" id="vehicleyear" aria-label="Year of Vehicle">
<?php
foreach($model_year as $model_value){
    print '<option value="'.$model_value.'" '.(isset($_POST['vehicleyear']) && $_POST['vehicleyear'] == $model_value ? ' SELECTED' : '').'>'.$model_value.'</option>';
}

?>
    </select>
                      <!--  br>
    Current Monthly Payment 
    $
    <input name="curmonthpay" type="text" id="curmonthpay" value="<?php (isset($_POST['curmonthpay']) && is_numeric($_POST['curmonthpay'])? print $_POST['curmonthpay']:print '') ?>" -->
                      <!--  Term of Loan 
    <select name="loanterm">
  <?php
/*foreach ($term as $termkey=>$termvalue){
if(isset($_POST['loanterm']) && $_POST['loanterm'] == $termkey){
  print '   <option value="'.$termkey.'" selected>'.$termvalue.'</option>'."\n";
}else{
  print '   <option value="'.$termkey.'">'.$termvalue.'</option>'."\n";
}
}
*/
?>
    </select -->
                  </p>
                      
                      <p align="center"><input type="submit" name="Submit" value="Calculate New Loan" /></p>
                      
                </form>
                <p>
                  <?php } ?>
                </p>
             
</div>

</div>

<div class="twelve columns">

<div class="five columns">
<p align="center"><img src="../images/pages/auto-loan2.jpg" alt="Ready to Buy" width="304" height="202" title="Ready to Buy"></p>
</div>

<div class="six columns">
<p id="ready" class="df-mtitle gbd_red fw600">Ready to Buy</p>

<p>Need a new car but don’t know where to start?  We can help with that!  Use our car buying service partnership to take the stress out of searching for the perfect car.  They will locate, negotiate, and finalize your deal, then bring the car to you.</p>  

<p><a href="#" data-remodal-target="auto">Go to Auto Assistance</a></p>
</div>

</div>


<p id="apply" class="df-mtitle gbd_red fw600">Apply for a Loan</p>

<p>You’ve done your homework, and now you are ready to buy. </p> 
 
<table role="presentation">
<tr><td>
<p style="color: #393b41;font-weight: bold;font-size: 24px;"><a id="loanappLink8" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=loanapp'); return false;" target="_blank">Apply</a> for a New or Used Auto Loan</p>

<p>When it comes to auto loans, we have our member’s best interest in mind.  We want you to get an excellent deal!  With an auto loan from CGR Credit Union, you can expect low rates, 100% financing, and superior service.</p>

<p><a href="https://www.cgrcu.org/pages/loan-rates.php">View Rates</a></p>
<p><a href="https://www.cgrcu.org/pages/what-i-need-to-apply.php">What You Need to Apply</a></p>
<p><a id="loanappLink5" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=loanapp'); return false;" target="_blank">Apply Now</a> or call <a href="tel:4787450494">(478) 745 - 0494</a> </p>
</td><td style="border-left-style:solid; border-left-color:#A20002; border-left-width:medium; padding-left:10px;">
<p style="color: #393b41;font-weight: bold;font-size: 24px;">Refinance Your Current Auto Loan</p>

<p>Do you have a loan from another financial institution?  Refinance your auto loan with CGR Credit Union; take advantage of our low rates and save yourself some money.  <a id="loanappLink6" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=loanapp'); return false;" target="_blank">Apply online</a> or <a href="https://www.cgrcu.org/pages/contact-us.php">in person</a>, and lower your monthly payments today.</p>

<p><a href="https://www.cgrcu.org/pages/loan-rates.php">View Rates</a></p>
<p><a href="https://www.cgrcu.org/pages/what-i-need-to-apply.php">What You Need to Apply</a></p>
<p><a id="loanappLink9" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=loanapp'); return false;" target="_blank">Refinance Now</a> or call <a href="tel:4787450494">(478) 745 - 0494</a> </p>
</td></tr></table>


</div><!--end eight columns-->

<div class="three columns sidebar">
<?php include ('../includes/loans-sidebar.php'); ?>
</div><!--end four columns sidebar-->
	</div>
</main>






<?php include ('../includes/footer.php');?>

<!--JAVASCRIPT INCLUDES-->


</body>

</html>