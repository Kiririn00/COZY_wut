<?php
//this is controller
class UIController extends AppController {
	//set layout
	var $layout = 'master';
	//set helper
	public $helpers = array('Html','Form','Js','Text');
	
	public function index(){
		//this is notting
	}

	public function Home(){
		//this is home page
		$this->layout = 'cozy_home_layout';
	}
	public function AboutUs(){
		//About Us Page
	}
	public function Contact(){
		//Contact Page
	}
	public function Event(){
		//Event Page
	}
	public function Project(){
		//show product page
		$this->layout = 'cozy_home_layout';
	}
	public function Search(){
		//Search Product page
	}
	public function Detail($project_name = null){
		//Project Detail Page

		$project_list = array('COZY @ SATRIWITTHAYA 2 SOI 9','COZY @ CHOKCHAI 4 SOI 30','COZY @ NAKNIWAT 37 1-4','COZY @ SATRIWITTHAYA 2 SOI 29 #2','COZY @ SANGKOMSONGKROR 16',
'COZY @ SATRIWITTHAYA 2 SOI 29-4','COZY @ SATRIWITTHAYA 2 SOI 10','COZY @ SATRIWITTHAYA 2 SOI 29 #1','COZY @ CHOKCHAI 4 
SOI 78','COZY @ NAKNIWAT 37');

		if($project_name==0)
		{
			$this->set('project_name',$project_list[0]);
			$this->set('project_code',$project_name);
		}
		else if($project_name==1){
			$this->set('project_name',$project_list[1]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==2){
			$this->set('project_name',$project_list[2]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==3){
			$this->set('project_name',$project_list[3]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==4){
			$this->set('project_name',$project_list[4]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==5){
			$this->set('project_name',$project_list[5]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==6){
			$this->set('project_name',$project_list[6]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==7){
			$this->set('project_name',$project_list[7]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==8){
			$this->set('project_name',$project_list[8]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==9){
			$this->set('project_name',$project_list[9]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==10){
			$this->set('project_name',$project_list[10]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==11){
			$this->set('project_name',$project_list[11]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==12){
			$this->set('project_name',$project_list[12]);
			$this->set('project_code',$project_name);
			
		}



		$this->layout = 'cozy_detail_layout';
	}

	public function DetailDesc($project_name = null){
		
	
		$project_list = array('COZY @ SATRIWITTHAYA 2 SOI 9','COZY @ CHOKCHAI 4 SOI 30','COZY @ NAKNIWAT 37 1-4','COZY @ SATRIWITTHAYA 2 SOI 29 #2','COZY @ SANGKOMSONGKROR 16',
'COZY @ SATRIWITTHAYA 2 SOI 29-4','COZY @ SATRIWITTHAYA 2 SOI 10','COZY @ SATRIWITTHAYA 2 SOI 29 #1','COZY @ CHOKCHAI 4 
SOI 78','COZY @ NAKNIWAT 37');
		if($project_name==0)
		{
			$this->set('project_name',$project_list[0]);
			$this->set('project_code',$project_name);
		}
		else if($project_name==1){
			$this->set('project_name',$project_list[1]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==2){
			$this->set('project_name',$project_list[2]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==3){
			$this->set('project_name',$project_list[3]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==4){
			$this->set('project_name',$project_list[4]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==5){
			$this->set('project_name',$project_list[5]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==6){
			$this->set('project_name',$project_list[6]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==7){
			$this->set('project_name',$project_list[7]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==8){
			$this->set('project_name',$project_list[8]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==9){
			$this->set('project_name',$project_list[9]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==10){
			$this->set('project_name',$project_list[10]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==11){
			$this->set('project_name',$project_list[11]);
			$this->set('project_code',$project_name);
			
		}
		else if($project_name==12){
			$this->set('project_name',$project_list[12]);
			$this->set('project_code',$project_name);
			
		}


		$this->layout = 'cozy_detail_desc_layout';
	}

	public function DetailImage($project_name = null){
		
		
		$project_list = array('COZY @ SATRIWITTHAYA 2 SOI 9','COZY @ CHOKCHAI 4 SOI 30','COZY @ NAKNIWAT 37 1-4','COZY @ SATRIWITTHAYA 2 SOI 29 #2','COZY @ SANGKOMSONGKROR 16',
			'COZY @ SATRIWITTHAYA 2 SOI 29-4','COZY @ SATRIWITTHAYA 2 SOI 10','COZY @ SATRIWITTHAYA 2 SOI 29 #1','COZY @ CHOKCHAI 4 SOI 78','COZY @ NAKNIWAT 37');
		
		if($project_name==0)
		{
			$this->set('project_name',$project_list[0]);
			$this->set('project_code',$project_name);
		}
		else if($project_name==1){
			$this->set('project_name',$project_list[1]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image2');
			
		}
		else if($project_name==2){
			$this->set('project_name',$project_list[2]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image3');

			
		}
		else if($project_name==3){
			$this->set('project_name',$project_list[3]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image4');
			
			
		}
		else if($project_name==4){
			$this->set('project_name',$project_list[4]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image5');
			
			
		}
		else if($project_name==5){
			$this->set('project_name',$project_list[5]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image6');
			
			
		}
		else if($project_name==6){
			$this->set('project_name',$project_list[6]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image7');
			
			
		}
		else if($project_name==7){
			$this->set('project_name',$project_list[7]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image8');
			
			
		}
		else if($project_name==8){
			$this->set('project_name',$project_list[8]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image9');
			
			
		}
		else if($project_name==9){
			$this->set('project_name',$project_list[9]);
			$this->set('project_code',$project_name);
			$this->layout = 'cozy_detail_image_layout';
			$this ->render('detail_image10');
			
			
		}

		$this->layout = 'cozy_detail_image_layout';
	}
	public function EventDetail($project_name = null){
	
	}


}


?>
