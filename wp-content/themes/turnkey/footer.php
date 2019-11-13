<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/wp-content/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
	</main>
    <!-- /Body Content -->
	</div>
    
        <div class="global-footer">
            <!-- Footer -->
    <footer class="container-fluid padMe50">
	<div class="container">
	    <div class="row">
	    	<div class="col-lg-4 col-md-3">
	    		<a class="footer-brand" href="/">
		      		<img src="/wp-content/themes/turnkey/assets/images/wht-turnkey-logo-small.png" />
		      	</a>
		      	<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=iJP3xkdvMnKngvrTktkRAkyqhL4vI1NTwmjoTh8gOyR35ErQ26k3Tw5fjVMb"></script></span>
	    	</div>
	    	<div class="col-md-4">
	    		<a  class="footerLinkHeader" href="#">Categories</a>
	    		<div class="row">
	    		                                                <div class="col-md-6 col-sm-12"><a href="/business-phone-systems">
                            Business Phone Systems
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/computer-equipment">
                            Computer Equipment
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/finance">
                            Finance
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/healthcare">
                            Healthcare
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/hr-personnel">
                            HR &amp; Personnel
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/insurance">
                            Insurance
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/internet">
                            Internet
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/marketing">
                            Marketing
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/merchant-services">
                            Merchant Services
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/payroll-services">
                            Payroll Services
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/professional-services">
                            Professional Services
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/telecom-equipment">
                            Telecom Equipment
                            </a></div>                                                                <div class="col-md-6 col-sm-12"><a href="/telecom-services">
                            Telecom Services
                            </a></div>                                </div>
	    	</div>
	    	
	    	<div class="col-md-3">
				<a  class="footerLinkHeader" href="/contact-us">Contact Us Today</a>
				<a href="8005610580">(800) 561-0580</a>
				<a href="mailto:support@turnkeyofficesolutions.com">support@turnkeyofficesolutions.com</a>
	    		
	    	</div>
	    </div>
    	<div class="row padMe50">
    		<!-- Social Links -->
			<div class="col-md-4 text-center">
				
			</div>
			<div class="col-md-4 text-center">
				
			</div>
			<!-- /Social Links -->
		</div>
		<div class="row">
			<p class="text-center white">&copy; Turnkey Office Solutions. All Rights Reserved. Turnkey Office Solutions and its logos are trademarks or registered trademarks of Turnkey Office Solutions. All other company and product names referenced herein are the property of their respective owners.</p>
			
    	</div>
    </div>  
    </footer>
    <!-- /Footer -->        </div>

        <!-- Google Tag Manager (noscript) -->

<!-- Fancy Animations -->
<script src="//unpkg.com/aos@next/dist/aos.js"></script>

<script src="/wp-content/themes/turnkey/assets/js/app.js"></script>
<script src="/wp-content/themes/turnkey//assets/js/bootstrap.js"></script>
<script src="/wp-content/themes/turnkey//assets/js/popper.js"></script>
<script>
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  };
}(jQuery));
</script>      <!-- </main> -->

<?php wp_footer(); ?>

</body>
</html>
