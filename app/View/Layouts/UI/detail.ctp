<div id='detail_body1'>
 <div id='content_layout'>
	<div id='detail_border'>
		
	</div>
	<div id='detail_map_field'>
 		<div id="map_body3" class='detail_map'>
		<?php
			echo $this->Html->image('map.jpg');
		?>
		</div>
		<div id='detail_map_information'>

		บริษัท แบงคอกนิวเทรนด์ ดีเวลอปเมนท์ จำกัด
		23 ลาดพร้าว 71 ถนนลาดพร้าว  แขวง/เขตวังทองหลาง กทม 10310
		โทร: +66 2538 4940-1  แฟ็กซ์: +66 2538 5912   ฝ่ายขาย : 08-7990-7813
		</div>
		<div id='detail_map_button_field'>
		<?php
			echo $this->Form->input('ติดต่อ',array(
				'type' => 'button',
				'label' => false,
				'id' => 'detail_map_button'
			));
		?>
		<?php
			echo $this->Form->input('แจ้งคำร้อง',array(
				'type' => 'button',
				'label' => false,
				'id' => 'detail_map_button'
			));
		?>
		<?php
			echo $this->Form->input('เยี่ยมชมโครงการ',array(
				'type' => 'button',
				'label' => false,
				'id' => 'detail_map_button'
			));
		?>	

		</div>
	</div><!--end #detail_map_field -->

	<div id="topic1_body3">
			<div id="icon">
				<?php echo $this->Html->image('icon.png');?>
			
			</div>
			<div id="topic_body3_text">RELATE PROJECT</div>
			<div id="topic_body3_text2">VIEW ALL PRODUCTS .</div>
	</div>

	<div id="content_body3_field">
			<div id="content_body3">
				<?php echo $this->Html->image('project1.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'Detail',
					));
				?>					</div>
			</div>
			<div id="content_body3">
					<?php echo $this->Html->image('project1.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'Detail',
					));
				?>					</div>
			</div>
			<div id="content_body3">
				<?php echo $this->Html->image('project1.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'Detail',
					));
				?>				
			</div><!-- end #content_body3 -->
		</div><!-- end #content_body3_field -->
	</div>
 </div><!-- end #content_layout -->
</div>

