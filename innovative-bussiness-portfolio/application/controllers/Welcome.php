<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

     function __construct()
{
     parent::__construct();
     $this->load->model("models");
} 
	 
	public function index()
	{
		$this->load->view('index');
	}
     
     // public function insertbanner()
     // {
 
     // 	$img=rand(1111,9999)."_".$_FILES['image']['name'];
     // 	move_uploaded_file($_FILES['image']['temp_name'],"images/".$img);

     // 	$in = array('b_img' =>$img);

     // 	$this->db->insert('banner',$in);
     // 	redirect('showbanner');
     // }

     public function contact()
     {
          $this->load->view('contact_form');
     }

     public function insertform()
     {
          $insform=array("c_name"=>$this->input->post('name'),
                         "c_email"=>$this->input->post('email'),
                         "c_num"=>$this->input->post('phoneno'),
                         "c_subject"=>$this->input->post('subject'),
                         "c_message"=>$this->input->post('message'));
         if($this->db->insert('contact',$insform)==true ){
          echo "<script>alert('your inquiry has been submitted successfully');location='index';</script>";
         }
         else{
          echo "<script>alert('Sorry something’s not right. Please try again');location='contact';</script>";
         }
     }

     public function web_development($id)
     {
          $reqsub['s']=$this->models->getserviceid($id);

          $this->load->view('web_development',$reqsub);
     }

     public function innovative_service($id)
     {
          $reqcard['c']=$this->models->getcardid($id);
          $this->load->view('innovative_service',$reqcard);
     }



     public function about(){
          $this->load->view('about');
     }

     public function review()
     {
          $this->load->view('review');
     }

     public function privacy_policy(){
          $this->load->view('privacy_policy');
     }

}
