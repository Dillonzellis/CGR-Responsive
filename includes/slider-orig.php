<section id="banner-login">

<div id="slider" class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							
							<li data-transition="notransition" data-slotamount="10" data-masterspeed="300" data-thumb="https://www.cgrcu.org/images/slider/home-loan.png">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="https://www.cgrcu.org/images/slider/home-loan.png" data-transition="notransition" alt="Home Equity Line of Credit">

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb"
											 data-x="300"
											 data-y="140"
											 data-speed="500"
											 data-start="1000"
											 data-easing="easeOutExpo">Get in the home of your dreams.</div>
                                             

										<div class="caption randomrotate"
											 data-x="300"
											 data-y="250"
											 data-speed="600"
											 data-start="1700"
											 data-easing="easeOutExpo"><a href="https://cu.memberfirst.com/cgrcu/?apply" target="_blank"><img src="https://www.cgrcu.org/images/slider/learn-more.jpg" alt="Learn More Button"></a></div>


							</li>

							
							
							<li data-transition="notransition" data-slotamount="10" data-masterspeed="300" data-thumb="https://www.cgrcu.org/images/slider/auto-loan5.jpg">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="https://www.cgrcu.org/images/slider/auto-loan5.jpg" data-transition="notransition" alt="Auto Loans">

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb"
											 data-x="300"
											 data-y="140"
											 data-speed="500"
											 data-start="1000"
											 data-easing="easeOutExpo">Is it time for a new car?<br>No payments for 90 Days<br>
Rates as low as 1.49% APR</div>
                                             

										<div class="caption randomrotate"
											 data-x="300"
											 data-y="250"
											 data-speed="600"
											 data-start="1700"
											 data-easing="easeOutExpo"><a href="promo/new-car.php"><img src="https://www.cgrcu.org/images/slider/learn-more.jpg" alt="Learn More Button"></a></div>


							</li>
							
							<li data-transition="notransition" data-slotamount="10" data-masterspeed="300" data-thumb="https://www.cgrcu.org/images/slider/auto-loan4.jpg">
										<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
										<img src="https://www.cgrcu.org/images/slider/auto-loan4.jpg" data-transition="notransition" alt="Auto Loans">

										<!-- THE CAPTIONS IN THIS SLDIE -->
										<div class="caption large_text sfb"
											 data-x="300"
											 data-y="140"
											 data-speed="500"
											 data-start="1000"
											 data-easing="easeOutExpo">Bring Us Your Auto Loan to Save!</div>
                                             

										<div class="caption randomrotate"
											 data-x="300"
											 data-y="250"
											 data-speed="600"
											 data-start="1700"
											 data-easing="easeOutExpo"><a href="promo/auto-loan.php"><img src="https://www.cgrcu.org/images/slider/learn-more.jpg" alt="Learn More Button"></a></div>


							</li>
                           				
					
						</ul>

					</div>
                    
<script type="text/javascript">

				var tpj=jQuery;
				tpj.noConflict();

				tpj(document).ready(function() {

				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;

					tpj(".fullwidthbanner").revolution(
						{
							delay:5000,
							startwidth:1280,
							startheight:500,

							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,

							hideThumbs:0,
							navigationType:"bullet",				// bullet, thumb, none
							navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

							navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


							navigationHAlign:"center",				// Vertical Align top,center,bottom
							navigationVAlign:"bottom",					// Horizontal Align left,center,right
							navigationHOffset:30,
							navigationVOffset:30,

							soloArrowLeftHalign:"left",
							soloArrowLeftValign:"center",
							soloArrowLeftHOffset:20,
							soloArrowLeftVOffset:0,

							soloArrowRightHalign:"right",
							soloArrowRightValign:"center",
							soloArrowRightHOffset:20,
							soloArrowRightVOffset:0,

							touchenabled:"on",						// Enable Swipe Function : on/off


							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

							hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
							hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
							hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


							fullWidth:"on",

							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

						});




			});
			</script>

				</div><!--end slider-->

<div id="home-banking-login">

<div id="home-banking-show-hide">
<p class="df-stitle">Home Banking Login <i class="fa fa-chevron-up fa-chevron-down gbd_white"></i></p>
</div><!--end home-banking-show-hide-->

<div class="home-banking-wrapper" style="display: none;">
<!--login form -->
      <form class="login" target="_top" autocomplete="off" name="pgLogin" method="post" action="https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.accountaccess.DoLogin">
           
                 <div class="tooltip">
                 <input type="text" name="AcctNum" placeholder="Account Number" maxlength="20" autofocus tabindex="1" aria-label="Account Number Field">

		  </div>
                 <input name="Pin" value="" maxlength="20" placeholder="Password" tabindex="2" type="password" aria-label="Password Field" autocomplete="current-password">
                 <input value="Login" name="btnOK" class="account2" tabindex="3" type="submit" aria-label="Login">
            <input name="txPin" value="" type="hidden">
      </form>
<!-- end login form -->

<p class="forgot-pass"><a id="forgotpasswordLink1" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=forgotpassword'); return false;">Forget your password?</a></p>

<button class="become-a-member" id="newMemLink1" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=signup'); return false;">Enroll in Home Banking</button>
<button class="become-a-member" id="newMemLink2" href ="#" onclick="postLink('https://www.secure-cgrcu.org/Centryx/servlet/com.sos.webteller.WebTellForms?Page=newmem'); return false;">Become a Member</button>
</div><!--end home-banking-wrapper-->
</div><!--end home-banking-login-->
</section><!---end banner login-->

