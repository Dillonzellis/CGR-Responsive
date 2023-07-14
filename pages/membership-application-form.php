<!DOCTYPE html>
<html lang="en">

<head>
<title>CGR Credit Union - Membership Form</title>

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
<h1 class="page-title">Membership Application Form</h1>


<form id="membership-application-form" class="" action="insert12.php" method="POST">

<p class="df-title fw700">Applicant Information</p>

<fieldset class="inline-check">
<label><input type="checkbox" value="Savings" name="accounttype1" id="accounttype1" /><span>Savings</span></label>
<label><input type="checkbox" value="Checking" name="accounttype2" id="accounttype2" /><span>Checking</span></label>
<label><input type="checkbox" value="Christmas Club" name="accounttype3" id="accounttype3" /><span>Christmas Club</span></label>
<label><input type="checkbox" value="Vacation Club" name="accounttype4" id="accounttype4" /><span>Vacation Club</span></label>
<label><input type="checkbox" value="Money Market" name="accounttype5" id="accounttype5" /><span>Money Market</span></label>
</fieldset>


<fieldset>
<input type="text" name="name" id="name" placeholder="Name" required/>
<input type="text" name="ssn" id="ssn" placeholder="SSN" required/>
</fieldset>

<fieldset>
         
         <label>If you are not already a member, how would you be eligible?
</label>
         <select class="eligibility" name="membership" id="membership">
         
         <option value="Professional">Healthcare Professional or Employee working in Bibb or Houston, GA Counties</option>
         <option value="Family Member">Family member of, or living with, a healthcare professional or employee working in Bibb or Houston, GA Counties</option>
         <option value="Retired">Retired from a healthcare provider, company, or organization</option>
         <option value="None">None of the above but interested in joining CGRCU</option>
         </select>
         
          </fieldset>
          
          
<fieldset>
<input type="text" name="dlnumber" id="dlnumber" required placeholder="Drivers License No."/>
<input type="text" name="expdate" id="expdate" required placeholder="Expiration Date (mm/dd/yy)"/>
<input type="text" name="bday" id="bday" required placeholder="Birthdate (mm/dd/yy)"/>
</fieldset>


<fieldset>
<input type="text" name="address" id="address" required placeholder="Residence Address"/>
<input type="text" name="city" id="city" required placeholder="City"/>
<input type="text" name="state" id="state" required placeholder="State"/>
<input type="text" name="zip" id="zip" required placeholder="Zip"/>
<input type="text" name="homephone" required placeholder="Home Phone"/>
<input type="text" name="workphone" required placeholder="Work Phone"/>
<input type="text" name="employment" required placeholder="Employment"/>
<input type="text" name="email" required placeholder="Email"/>
<input type="text" name="mother" required placeholder="Mother's Maiden Name"/>
</fieldset>


<p class="df-title fw700">Account Designations</p>

<fieldset class="inline-check">
<label><input type="checkbox" value="Payable on Death (POD)/Trust Account" name="pod" /><span>Payable on Death (POD)/Trust Account</span></label>
<label><input type="checkbox" value="All Accounts" name="podall" /><span>All Accounts</span></label>
<label><input type="checkbox" value="Designate specific account(s)" name="podspecific" /><span>Designate specific account(s)</span></label>
<input type="text" name="podspecifica" placeholder="List Specific Accounts"/>
</select>

</fieldset>


<fieldset>
<input type="text" name="podben" placeholder="Beneficiary/POD Payee"/>
<input type="text" name="podbenstreet" placeholder="Street"/>
<input type="text" name="podbencity" placeholder="City"/>
<input type="text" name="podbenstate" placeholder="State"/>
<input type="text" name="podbenzip" placeholder="Zip"/>
<input type="text" name="relation" placeholder="Relationship to Applicant"/>
<input type="text" name="ssn2" placeholder="SSN"/>
<input type="text" name="dob2" placeholder=" Birthdate (mm/dd/yy)"/>
</fieldset>

<fieldset>
<input type="checkbox" value="UTMA/UGMA" name="ugma" /> UTMA/UGMA  (as custodian for minor under the Uniform Transfers/Gifts to Minors Act) </option>
</fieldset>

<fieldset>
<input type="text" name="ugmaminor" placeholder="Minors Name"/>
<input type="text" name="ugmaminorssn" placeholder="Minors TIN/SSN"/>
<input type="text" name="agent" placeholder="Name of Agent"/>
<input type="text" name="ugmaspecifica" placeholder="Designate specific account(s)"/>
</fieldset>

<fieldset>
<input type="checkbox" value="Other" name="other" /> Other <input type="text" size="25" name="othera" />
<input type="checkbox" value="See Account Authorization Card" name="authcard" /> See Account Authorization Card
</fieldset>



<fieldset>
<p>By submitting this application you agree to the terms and conditions of the Membership and Account Agreement, Truth-in-Savings Rate and Fee Schedule, Funds Availability Policy Disclosure, if applicable, and to any amendment the Credit Union makes from time to time which are incorporated herein.  You will receive account disclosures in the mail following this request.  Please complete them and return to us along with your initial deposit to finalize the opening of this share account.</p>

</fieldset>

<fieldset>
<input type="submit" value="Submit Application"/>
<input type="reset" value="Clear Application"/>
</fieldset>
</form>


</div>
</main>






<?php include ('../includes/footer.php');?>

<!--JAVASCRIPT INCLUDES-->


</body>

</html>