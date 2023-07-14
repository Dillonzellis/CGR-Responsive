<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union - Loan Application</title>

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
<h1 class="page-title">Loan Application Form</h1>


<form method="POST" action="insert11.php" id="loan-application-form">    
    
        <p>Applying for Joint Credit?</p>

    <fieldset class="applyforcredit">
    <label class=""><input type="radio" name="applytype" value="Yes"/><span>Yes</span></label>
        <label class=""><input type="radio" name="applytype" value="No"/><span>No</span></label>    
    </fieldset>
    
     <fieldset>
    <input type="text" name="date" value="" placeholder="Date" class="" required/>
    <input type="text" name="loanamt" value="" placeholder="Loan Amount Requested" class="" required/>
    <input type="text" name="purpose" value="" placeholder="Purpose of Loan" class="" required/>
    <select class="loan-type" name="loantype">
         <option>Loan Types**</option>
        <option>New Vehicle</option>
        <option>Used Vehicle</option>
        <option>Recreational Vehicle</option>
        <option>Line of Credit</option>
        <option>Credit Card</option>
        <option>Signature Loan</option>
        <option>Share/CD Secured Loan</option>
        <option>Other</option>
         </select>
    </fieldset>
    
    
    <div class="clearfix"></div>
    <p class="df-mtitle fw600 form-section-title">Applicant Information</p>
     <fieldset>
    <input type="text" name="appName" value="" placeholder="Name" class="" required/>
         <input type="text" name="appSSN" value="" placeholder="SSN" class="" required/>
         <input type="text" name="email" value="" placeholder="Email" class="" required/>
    <input type="text" name="appAddress" value="" placeholder="Residence Adress" class="" required/>
    <input type="text" name="appCity" value="" placeholder="City" class="" required/>
    <input type="text" name="appState" value="" placeholder="State" class="" required/>
    <input type="text" name="appZip" value="" placeholder="Zip" class="" required/>
         <input type="text" name="appResTime" value="" placeholder="Time at Residence" class="" required/>
    <input type="text" name="appBirthday" value="" placeholder="Birthdate" class="" required/>
    <input type="text" name="appHomePhone" value="" placeholder="Home Phone" class="" required/>
    <input type="text" name="appPayment" value="" placeholder="Monthly Payment" class=""  required/>
    
           </fieldset>
         
    <fieldset>
         
         <label><input type="radio" name="appPayType" value="Buying/Own" placeholder="" class="" required/><span>Buying/Own</span></label>
    <label><input type="radio" name="appPayType" value="Rent" placeholder="" class="" required/><span>Rent</span></label>
    <label><input type="radio" name="appPayType" value="Other" placeholder="" class="" required/><span>Other</span></label>
      
    </fieldset>
    
         <fieldset>
         
         <label>If you are not already a member, how would you be eligible?
</label>
         <select name="membership" class="eligibility">
         
         <option>Healthcare Professional or Employee working in Bibb or Houston, GA Counties</option>
         <option>Family member of, or living with, a healthcare professional or employee working in Bibb or Houston, GA Counties</option>
         <option>Retired from a healthcare provider, company, or organization</option>
         <option>None of the above but interested in joining CGRCU</option>
         </select>
         
          </fieldset>
         
         
    
     <div class="clearfix"></div>
    <p class="df-mtitle fw600 form-section-title">Employment Information (Applicant)</p>
    
     <fieldset>
    <input type="text" name="appEmp" value="" placeholder="Employer" class="" required/>
         <input type="text" name="appEmpPosition" value="" placeholder="Position" class="" required/>
         <input type="text" name="appEmpTime" value="" placeholder="Length of Employment" class="" required/>
         <input type="text" name="appEmpAdd" value="" placeholder="Employer Address" class="" required/>
         <input type="text" name="appEmpCity" value="" placeholder="City" class="" required/>
         <input type="text" name="appEmpState" value="" placeholder="State" class="" required/>
         <input type="text" name="appEmpZip" value="" placeholder="Zip Code" class="" required/>
         <input type="text" name="appEmpPhone" value="" placeholder="Phone" class="" required/>
         <input type="text" name="appEmpSalary" value="" placeholder="Gross Salary" class="" required/>
         <input type="text" name="appOtherInc" value="" placeholder="Other Gross Monthly Income" class="" required/>
         <input type="text" name="appOtherSource" value="" placeholder="Source of Other Income" class="" required/>
    
    </fieldset>
    
    <fieldset>
         <p>How Are You Paid?</p>
         <label><input type="radio" name="appPayFrequency" value="Weekly" placeholder="" class="" required/><span>Weekly</span></label>
    <label><input type="radio" name="appPayFrequency" value="Semi-Monthly" placeholder="" class="" required/><span>Semi-Monthly</span></label>
    <label><input type="radio" name="appPayFrequency" value="Bi-Weekly" placeholder="" class="" required/><span>Bi-Weekly</span></label>
    <label><input type="radio" name="appPayFrequency" value="Monthly" placeholder="" class="" required/><span>Monthly</span></label>
      
    </fieldset>
    
    
         <div class="clearfix">**Alimony, child support, or separate maintenance need not be revealed unless you want such income considered as a basis for repayment of this obligation.</div>
    <p class="df-mtitle fw600 form-section-title">Other Employment Information (Applicant)</p>
    
         <fieldset>
    <input type="text" name="appEmp2" value="" placeholder="Employer" class="" required/>
         <input type="text" name="appEmpPosition2" value="" placeholder="Position" class="" required/>
         <input type="text" name="appEmpTime2" value="" placeholder="Length of Employment" class="" required/>
         <input type="text" name="appEmpAdd2" value="" placeholder="Employer Address" class="" required/>
         <input type="text" name="appEmpCity2" value="" placeholder="City" class="" required/>
         <input type="text" name="appEmpState2" value="" placeholder="State" class="" required/>
         <input type="text" name="appEmpZip2" value="" placeholder="Zip Code" class="" required/>
         <input type="text" name="appEmpPhone2" value="" placeholder="Phone" class="" required/>
         <input type="text" name="appEmpSalary2" value="" placeholder="Gross Salary" class="" required/>
 
    
    </fieldset>
    
    <fieldset>
         <p>How Are You Paid?</p>
         <label><input type="radio" name="appPayFrequency2" value="Weekly" placeholder="" class="" required/><span>Weekly</span></label>
    <label><input type="radio" name="appPayFrequency2" value="Semi-Monthly" placeholder="" class="" required/><span>Semi-Monthly</span></label>
    <label><input type="radio" name="appPayFrequency2" value="Bi-Weekly" placeholder="" class="" required/><span>Bi-Weekly</span></label>
    <label><input type="radio" name="appPayFrequency2" value="Monthly" placeholder="" class="" required/><span>Monthly</span></label>
      
    </fieldset>
    
    
         <div class="clearfix"></div>
    <p class="df-mtitle fw600 form-section-title">Co-Applicant Information</p>
    
    <fieldset>
    <input type="text" name="jointAcct" value="" placeholder="Account Number" class="" required/>
    <input type="text" name="jointName" value="" placeholder="Name" class="" required/>
         <input type="text" name="jointSSN" value="" placeholder="SSN" class="" required/>
         
    <input type="text" name="jointAddress" value="" placeholder="Residence Adress" class="" required/>
    <input type="text" name="jointCity" value="" placeholder="City" class="" required/>
    <input type="text" name="jointState" value="" placeholder="State" class="" required/>
    <input type="text" name="jointZip" value="" placeholder="Zip" class="" required/>
         <input type="text" name="jointResTime" value="" placeholder="Time at Residence" class="" required/>
    <input type="text" name="jointBirthday" value="" placeholder="Birthdate" class="" required/>
    <input type="text" name="jointHomePhone" value="" placeholder="Home Phone" class="" required/>
    <input type="text" name="jointPayment" value="" placeholder="Monthly Payment" class=""  required/>
    
           </fieldset>
         
    <fieldset>
         
         <label><input type="radio" name="jointPayType" value="Buying/Own" placeholder="" class="" required/><span>Buying/Own</span></label>
    <label><input type="radio" name="jointPayType" value="Rent" placeholder="" class="" required/><span>Rent</span></label>
    <label><input type="radio" name="jointPayType" value="Other" placeholder="" class="" required/><span>Other</span></label>
      
    </fieldset>
    
         <fieldset>
    
    
         <div class="clearfix"></div>
    <p class="df-mtitle fw600 form-section-title">Employment Information (Co-Applicant)</p>
    
    <fieldset>
    <input type="text" name="jointEmp" value="" placeholder="Employer" class="" required/>
         <input type="text" name="jointEmpPosition" value="" placeholder="Position" class="" required/>
         <input type="text" name="jointEmpTime" value="" placeholder="Length of Employment" class="" required/>
         <input type="text" name="jointEmpAddress" value="" placeholder="Employer Address" class="" required/>
         <input type="text" name="jointEmpCity" value="" placeholder="City" class="" required/>
         <input type="text" name="jointEmpState" value="" placeholder="State" class="" required/>
         <input type="text" name="jointEmpZip" value="" placeholder="Zip Code" class="" required/>
         <input type="text" name="jointEmpPhone" value="" placeholder="Phone" class="" required/>
         <input type="text" name="jointEmpSalary" value="" placeholder="Gross Salary" class="" required/>
         <input type="text" name="jointOtherInc" value="" placeholder="Other Gross Monthly Income" class="" required/>
         <input type="text" name="jointOtherSource" value="" placeholder="Source of Other Income" class="" required/>
    
    </fieldset>
    
    <fieldset>
         <p>How Are You Paid?</p>
         <label><input type="radio" name="jointPayFrequency" value="Weekly" placeholder="" class="" required/><span>Weekly</span></label>
    <label><input type="radio" name="jointPayFrequency" value="Semi-Monthly" placeholder="" class="" required/><span>Semi-Monthly</span></label>
    <label><input type="radio" name="jointPayFrequency" value="Bi-Weekly" placeholder="" class="" required/><span>Bi-Weekly</span></label>
    <label><input type="radio" name="jointPayFrequency" value="Monthly" placeholder="" class="" required/><span>Monthly</span></label>
      
    </fieldset>
    
    <fieldset class="p20-b">
         <div class="clearfix">**Alimony, child support, or separate maintenance need not be revealed unless you want such income considered as a basis for repayment of this obligation.</div>
             </fieldset> 
                 
    <fieldset>
        <textarea name="comments" value="" placeholder="Comments & Questions" class="" required></textarea>
           </fieldset>
    
    
    <fieldset>
         <p>Preferred Method of Contact</p>
         <label><input type="radio" name="contact" value="Email" placeholder="" class="" required/><span>Email</span></label>
    <label><input type="radio" name="contact" value="Home Phone" placeholder="" class="" required/><span>Home Phone</span></label>
    <label><input type="radio" name="contact" value="Mobile Phone" placeholder="" class="" required/><span>Mobile Phone</span></label>
    <label><input type="radio" name="contact" value="Work Phone" placeholder="" class="" required/><span>Work Phone</span></label>      
    </fieldset>
             
             
         <div class="clearfix"></div>
    <p class="df-mtitle fw600 form-section-title">Applicant Information</p>
    
    <fieldset class="p20-b">
   By submitting this application, you authorize CGR Credit Union to gather whatever credit and employment information considered appropriate, including information from various credit reporting agencies.
    </fieldset>
    
    <fieldset id="security"><?php
          require_once('recaptchalib.php');
          $publickey = "6LeCchoTAAAAABeBTaD2j8Xq8bZ1NeWFf0Vc7YuX"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?></fieldset>
    
    
         <div class="clearfix"></div>
    
    <fieldset>
    <input type="submit" value="Submit"/>
         <input type="reset" value="Reset"/>
    
    </fieldset>
    
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