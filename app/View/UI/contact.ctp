<div id='contact_body1'>
 <div id='content_layout'>
 	<div id='contact_block1'>
 		<div id="topic1_body3" class='contact_topic_field'>
			<div id="topic_body3_text">CONTACT US</div>
		</div>
		<div id='contact_detail'>
			บริษัท แบงคอกนิวเทรนด์ ดีเวลอปเมนท์ จำกัด <br><br>

เลขที่ 713/12-15 ถนนประดิษฐ์มนูธรรม <br>
แขวงสะพานสอง เขตวังทองหลาง  กรุงเทพมหานคร<br>

TEL : +66 090-556-3645<br>
แฟ็กซ์: +66 2538 5912<br>

ฝ่ายขาย : 08-7990-7813<br><br>

Bangkok New Trend Development Co., Ltd.<br><br>

23 Ladprao 71 Ladprao Rd.,<br>
Wang Thong Lang, Bangkok 10310<br>

Telephone: +66 090-556-3645<br>
Fax: +66 2538 5912<br>


Sale : 08-7990-7813
		</div>
	</div>
	<div id='contact_block2'>
		<div id='contact_form_topic_field'>
 		<div id="topic1_body3" class='contact_topic_field'>
			<div id="topic_body3_text">ติดต่อฝ่ายขาย</div>
		</div>
			<div id='contact_form_topic_detail'>
				กรอกแบบฟอร์มด้านล่างเพื่อติดต่อเรา<br> Fill out the form below to contact us
			</div>
			
			<div id='contact_form'>
				Your Name
				<br/>
				<input id='contactform' type='text' placeholder='example: John Doe' />
				<br/>
				Your Phone Number
				<br/>
				<input id='contactform' type='text' placeholder='example: John Doe' />
				<br/>
				Your Phone Number
				<br/>
				<input  id='contactform' type='text' placeholder='example: John Doe' />
				<br/>
				Your Message
				<br/>
				<textarea id='contactform' name="" id="" rows="8" cols="40"></textarea>
				<br/>
             
				<input id='send_b' type='button' value='Submit your message'>
			</div><!-- end #contact_form -->
		</div><!-- end #contact_form_topic_field -->
	</div>

	<div id='contact_map_field'>
		
		<div id="topic1_body3" class='contact_topic_field'>
			<div id="topic_body3_text">แผนที่เดินทาง</div>
	
			<div id="map_body_contact">
                 
				
                 <div id="map" style="width:960;height:400px;margin-bottom:30px"></div>
                 
			</div>
		</div>

	</div>
 </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link type="text/css"
		href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.youtubepopup.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUJr_4AnWJJ_85vEyD1qRMljK9CSsAev4"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 18,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(13.7909066,100.6084257), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [			{		featureType:"road",		elementType:"labels",		stylers:[{visibility:"simplified"},{lightness:20}]	},{		featureType:"administrative.land_parcel",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"landscape.man_made",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"transit",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"road.local",		elementType:"labels",		stylers:[{visibility:"simplified"}]	},{		featureType:"road.local",		elementType:"geometry",		stylers:[{visibility:"simplified"}]	},{		featureType:"road.highway",		elementType:"labels",		stylers:[{visibility:"simplified"}]	},{		featureType:"poi",		elementType:"labels",		stylers:[{visibility:"off"}]},{		featureType:"road.arterial",		elementType:"labels",		stylers:[{visibility:"off"}]	},{		featureType:"water",		elementType:"all",		stylers:[{hue:"#a1cdfc"},{saturation:30},{lightness:49}]	},{		featureType:"road.highway",		elementType:"geometry",		stylers:[{hue:"#f49935"}]	},{		featureType:"road.arterial",		elementType:"geometry",		stylers:[{hue:"#fad959"}]	}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>
     