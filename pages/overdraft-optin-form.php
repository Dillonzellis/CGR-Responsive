<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union - Overdraft OptIn Form</title>

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
<h1 class="page-title">Overdraft Opt-In Form</h1>

<p class="df-mtitle fw600">What You Need to Know about Overdrafts and Overdraft Fees</p>

<p>An overdraft occurs when you do not have enough money in your account to cover a transaction, but we pay it anyway. We can cover your overdrafts in two different ways:</p>

    <ol><li>We have standard overdraft practices that come with your account.</li>
    <li>We also offer overdraft protection plans, such as a link to a savings account, which may be less expensive than our standard overdraft practices. To learn more, ask us about these plans.</li></ol>

<p>This notice explains our standard overdraft practices.</p>

<p class="df-mtitle fw600">What are the standard overdraft practices that come with my account?</p>

<p>We do authorize and pay overdrafts for the following types of transactions:</p></p>

    <ul><li>Checks and other transactions made using your checking account number</li>
    <li>Automatic bill payments</li>
    </ul>
<p>After August 15, 2010, we will not authorize and pay overdrafts for the following types of transactions unless you ask us to (see below):</p>

    <ul><li>ATM transactions</li>
        <li>Everyday debit card transactions</li>
</ul>
<p>We pay overdrafts at our discretion, which means we do not guarantee that we will always authorize and pay any type of transaction. If we do not authorize and pay an overdraft, your transaction will be declined.</p></p>

<p class="df-mtitle fw600">What fees will I be charged if CGR Credit Union pays my overdraft?</p>

<p>Under our standard overdraft practices:</p></p>
<ul>
    <li>We will charge you a fee of up to $28 each time we pay an overdraft.</li>
    <li>There is no limit on the total fees we can charge you for overdrawing your account.</li>
</ul>
    <p class="df-mtitle fw600">What if I want CGR Credit Union to authorize and pay overdrafts on my ATM and everyday debit card transactions?</p>

<p><p>If you also want us to authorize and pay overdrafts on ATM and everyday debit card transactions, complete and submit the form below and a member service representative will contact you shortly.</p>


    
    <div class="clearfix"></div>
    <form id="overdraft-optin-form" action="insert14.php" method="post"> 
  

        <input type="checkbox" name="no" value="I do not want" aria-label="I do not want CGR CU to authorize."/> 
        I <strong class="underline">do not</strong> want CGR Credit Union to authorize and pay overdrafts on my ATM and everyday debit card transactions.
        <br>
        <input type="checkbox" name="yes" value="I want" aria-label="I want CGRU CU to authorize"/>  
        I <strong class="underline">want</strong> CGR Credit Union to authorize and pay overdrafts on my ATM and everyday debit card transactions. <span class="underline">I understand that I have an ongoing right to revoke my consent at any time. <strong>How to Opt-Out:</strong> Please call CGR Credit Union at 478-745-0494 or stop by one of our branches to revoke your authorization at any time.<br>
        <br>
        </span>
        
        
        <input type="text" class="" name="name" placeholder="Name" required aria-label="Name"/>
        <input type="text" class="" name="account" placeholder="Account Number" required aria-label="Account Number Field"/>
        <input type="text" class="" name="confirmationdate" placeholder="Confirmation Date" required aria-label="Confirmation Date"/>
<br>
        
           
        <input type="text" class="" name="street" placeholder="Street Address" required aria-label="Street Address"/>
        <input type="text" class="" name="city" placeholder="City" required aria-label="City"/>
        <input type="text" class="" name="state" placeholder="State" required aria-label="State"/>
        <input type="text" class="" name="zip" placeholder="Zip Code" required aria-label="Zip"/>
        <br>
        
        
        <input type="email" class="" name="email" placeholder="Email" required aria-label="Email"/>
       
        
        <fieldset>
			<legend>Home Phone:</legend>
        <label><input type="text" size="3" maxlength="3" name="hphone1" required/> - <input type="text" size="3" maxlength="3" name="hphone2" required/> - <input type="text" size="3" maxlength="4" name="hphone3" required/></label>
        </fieldset>
        
      <fieldset>
			<legend>Mobile Phone:</legend>
        <label><input type="text" size="3" maxlength="3" name="cphone1" required/> - <input type="text" size="3" maxlength="3" name="cphone2" required/> - <input type="text" size="3" maxlength="4" name="cphone3" required/></label>
        </fieldset>
    
       
        <input type="submit" value="Submit"/>
        <input type="reset" value="Reset Form"/>
        
      
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