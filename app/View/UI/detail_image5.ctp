<div id='detail_body1'>
 <div id='content_layout'>
	<div id='detail_border'>
		
	</div>
	<div id='detail_map_field'>
		<div id="map_body3" class='detail_image_block'>
			<div id='desc_image'>
			<?php
				echo $this->Html->image('SK16/SK16_1.jpg',array(
					'width' => 300,
					'height' => 180
				));
			 ?>
			</div>
			<div id='desc_image'>
			<?php
				echo $this->Html->image('SK16/SK16_2.jpg',array(
					'width' => 300,
					'height' => 180
				));
			 ?>
			</div>

			<div id='desc_image'>
			<?php
				echo $this->Html->image('SK16/SK16_3.jpg',array(
					'width' => 300,
					'height' => 180
				));
			 ?>
			</div>
			



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
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 9
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
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 <br> SOI 30
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				โฮมออฟฟิศ 3 ชั้น 3 นอน 3 น้ำ			
				<br/><br/>
				เริ่มต้น 4.39 ลบ. (12 หลัง) 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',1
					));
				?>
				</div>
			</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ NAKNIWAT 37 1-4
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
 </div><!-- end #content_layout -->
</div>


