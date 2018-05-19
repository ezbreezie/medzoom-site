<?php
/*
Template Name: Contact
*/
get_header(); ?>
	
	</div><!-- #head-container -->

	<div class="row" id="contact-container">

		<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZYXb_KRI0fUWDjGltyK1URzjIf2TnVw'></script><div style='overflow:hidden;height:44vh;width:auto;'><div id='gmap_canvas' style='height:44vh;width:auto;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://termsandcondiitionssample.com">terms and conditions generator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(38.9684751,-76.5123686),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(38.9684751,-76.5123686)});infowindow = new google.maps.InfoWindow({content:'<strong>Medical Zoom</strong><br>1041 Spa Rd. Apt J Annapolis, MD 21403<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

		<div class="contact-content" style="background-image: url('<?php echo get_bloginfo('template_directory');?>/assets/images/gradient.png'); background-repeat:no-repeat;">

			<div class="container">

				<h2 class="blue">Get In Touch!</h2>

				<div class="form-pad">
		        	<?php echo do_shortcode('[gravityform id=3 title=false description=false ajax=true]'); ?>
		        </div><!-- container -->

			</div><!--container-->

		</div><!-- contact-content -->

	</div><!--#contact-container -->

<?php get_footer(); ?>
