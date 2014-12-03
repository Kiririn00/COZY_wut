<div id='detail_body1'>
 <div id='content_layout'>
	<div id='detail_border'>
		
	</div>
	<div id='detail_map_field'>
 		<div id="map_body3" class='detail_map'>
		  <div id="map" style="width:960;height:480px;margin-bottom:30px"></div>
		</div>
		<div id='detail_map_information'>

		บริษัท แบงคอกนิวเทรนด์ ดีเวลอปเมนท์ จำกัด เลขที่ <br>
            713/12-15 ถนนประดิษฐ์มนูธรรม แขวงสะพานสอง 
            เขตวังทองหลาง กรุงเทพมหานคร <br>
		โทร: +66 2538 4940-1  แฟ็กซ์: +66 2538 5912  <br> ฝ่ายขาย : 08-7990-7813
		</div>
		<div id='detail_map_button_field'>
		<?php
			echo $this->Html->link('ติดต่อ',array(
				'action' => 'Contact',
            'id' => 'detail_map_button'));
		?>
            <?php
			echo $this->Html->link('แจ้งคำร้อง',array(
				'action' => 'Contact',
            'id' => 'detail_map_button'));
		?>
			

		</div>
	</div><!--end #detail_map_field -->

	<div id="topic1_body3">
			<div id="icon">
				<?php echo $this->Html->image('icon.png');?>
			
			</div>
			<div id="topic_body3_text">RELATE PROJECTS</div>
			<div id="topic_body3_text2">VIEW ALL PRODUCTS .</div>
	</div>

	<div id="content_body3_field">
<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br>SATRIWITTHAYA 9
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				โฮมออฟฟิศ 3 ชั้น 3 นอน 3 น้ำ			
				<br/><br/>
				เริ่มต้น 6.39 ลบ. (4หลัง)
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',0
					));
				?>
				</div>
			</div>

	<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br/>SATRIWITTHAYA 9  
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
                    
				บ้านเดี่ยว 2 ชั้น 3 นอน 3 น้ำ
				<br/>
                เริ่มต้น 6.39 ลบ. (2 หลัง) 
                       <br/>  <br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',10
					));
				?>
				</div>
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br>
                NAKNIWAT 37 1-4
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				บ้านเดี่ยว 2 ชั้น 3 นอน 3 น้ำ	
				<br/><br/>
				เริ่มต้น 6.39 ลบ.(2 หลัง)
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',2
					));
				?>
				</div>
			</div>
	</div>
	</div>
 </div><!-- end #content_layout -->
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