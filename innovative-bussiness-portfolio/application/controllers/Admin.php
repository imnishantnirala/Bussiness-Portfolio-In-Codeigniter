<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

     function __construct()
{
     parent::__construct();
     $this->load->model("amodels");
} 

	 
	public function index()
	{
		$this->load->view('admin/index');
	}

	// this "contact" function for view contect pages
	public function contact()
	{
		$this->load->view('admin/contact');
	}


	// this "insertcontact" function for insert contect forms and details 
	public function insertcontact()
	{
		$contect = array('c_name'=>$this->input->post('name'),
							'c_email'=>$this->input->post('email'),
							'c_subject'=>$this->input->post('subject'),
							'c_message'=>$this->input->post('message'));

			$this->db->insert("contact",$contect);
			redirect('admin/index');
	}

	public function showcontact()
	{
		$this->load->view('admin/show_contact');
	}
	// this function "menu" for insert menu list for header page
	public function menu()
	{
		$this->load->view('admin/menu');
	}

	// this function "insertmenu" is a insert menu for header
	public function insertmenu()
	{
		$menu= array("menu_name"=>$this->input->post('menu'),
				"menu_url"=>$this->input->post('url'));
		$this->db->insert('menu',$menu);
		redirect('admin/showmenu');
	}


	public function showmenu()
	{
		$this->load->view('admin/show_menu');
	}


	public function login()
	{
		$this->load->view('admin/login');
	}

	public function signin()
	{
		$this->load->view('admin/signin');
	}
	public function insertuser()
	{
		$signin=array("username"=>$this->input->post('username'),
					   "email"=>$this->input->post('email'),
						"pass"=>$this->input->post('password'));
		$this->db->insert('login',$signin);

		redirect('admin/login');
	}

	// this "chakesignin" function for select form login page value and chake from login database useing session 
	public function chakesignin()
	{
		$chakesign=array("email"=>$this->input->post('email'),
							"pass"=>$this->input->post('password'));

		$csignin=$this->amodels->checksignin($chakesign);
		$msg=$this->session->set_flashdata("msg");
		if($csignin==1)
		{
			$this->session->set_userdata("checksesn","asdf8s7df8dsf");
			$this->session->set_userdata("sesn",$chakesign['email']);

			redirect('admin/index');
		}
		else
		{
			
			echo "<script>alert('somethings wrong'); location='login'; </script>";
		}	
	}

	// this "logout" function for logout user 
	public function logout()
	{
		$this->session->set_userdata("checksesn","");
		$this->session->set_userdata("sesn",'');
		redirect('admin/login');
	}


	public function updatemenu($id)
	{
		$req['c']=$this->amodels->getmenuid($id);

		$this->load->view('admin/update_menu',$req);
	}

	public function editform($id)
	{
		$editmenu=array("menu_name"=>$this->input->post('menu'),
						"menu_url"=>$this->input->post('url'));
		$this->db->where('m_id',$id)->update("menu",$editmenu);

		redirect('admin/showmenu');
	}

	public function deleteform($id)
	{
		$this->db->where('m_id',$id)->delete('menu');
		redirect('admin/showmenu');
	}

	public function submenu()
	{
		$this->load->view('admin/sub_menu');
	}

	public function insertsubmenu()
	{
		$submenu= array("sub_menu_name"=>$this->input->post('submenu'),
				"sub_menu_url"=>$this->input->post('url'),
				"menu"=>$this->input->post('menu'));
		$this->db->insert('sub_menu',$submenu);
		redirect('admin/showsubmenu');
	}

	public function showsubmenu()
	{
		$this->load->view('admin/show_sub_menu');
	}

	public function updatesubmenu($id)
	{
		$ups['s']=$this->amodels->getsubmenuid($id);
		$this->load->view('admin/update_sub_menu',$ups);
	}
	public function editsubmenu($id)
	{
		$editsubmenu= array("sub_menu_name"=>$this->input->post('submenu'),
				"sub_menu_url"=>$this->input->post('url'));

		$this->db->where('sub_menu_id',$id)->update('sub_menu',$editsubmenu);
		redirect('admin/showsubmenu');
	}
	public function deletesubform($id)
	{
		$this->db->where('sub_menu_id',$id)->delete('sub_menu');
		redirect('admin/showsubmenu');
	}






	public function service()
	{
		$this->load->view('admin/service');
	}

	public function show_service()
	{
		
		$this->load->view('admin/show_service');
	}

	public function update_service($id)
	{
		$sev['s']=$this->amodels->gatservice($id);
		$this->load->view('admin/update_service',$sev);
	}

	public function edit_services($id)
	{
		$sev=$this->amodels->gatservice($id);
		if ($_FILES['service_image']['name']=="") {
			$servimg=$sev->service_img;
		}
		else
		{
			$servimg=rand(0000,9999)."_".time()."_".$_FILES['service_image']['name'];
			move_uploaded_file($_FILES['service_image']['tmp_name'],"images/".$servimg);
		}

		if ($_FILES['cover_image']['name']=="") {
			$coverimg=$sev->cover_img;
		}
		else
		{
			$coverimg=rand(0000,9999)."_".time()."_".$_FILES['cover_image']['name'];
			move_uploaded_file($_FILES['cover_image']['tmp_name'],"images/service_cover_img/".$coverimg);
		}
			$insserv=array("service_d"=>$this->input->post('service_taxt'),
							"service_img"=>$servimg,
							"cover_img"=>$coverimg);

			$this->db->where('s_id',$id)->update('services',$insserv);
			redirect('admin/show_service');
	}






	public function insert_service() //cover_image
	{
		$servimg=rand(0000,9999)."_".time()."_".$_FILES['service_image']['name'];
		move_uploaded_file($_FILES['service_image']['tmp_name'],"images/".$servimg);

		$coverimg=rand(0000,9999)."_".time()."_".$_FILES['cover_image']['name'];
		move_uploaded_file($_FILES['cover_image']['tmp_name'],"images/service_cover_img/".$coverimg);

			$insserv=array("service_name"=>$this->input->post('service_name'),
							"sub_menu_id"=>$this->input->post('sub_menu'),
							"service_d"=>$this->input->post('service_taxt'),
							"service_img"=>$servimg,
							"cover_img"=>$coverimg);

			$this->db->insert('services',$insserv);
			redirect('admin/show_service');
			
	}

	public function delete_service($id)
	{
		$this->db->where('s_id',$id)->delete('services');
		redirect('admin/show_service');
	}

	public function latest_project()
	{
		$this->load->view('admin/latest_project');
	}
	public function show_latest_project()
	{
		$this->load->view('admin/show_latest_project');
	}

	public function insert_project()
	{
		$projectimg=rand(0000,9999)."_".time()."_".$_FILES['project_image']['name'];
		move_uploaded_file($_FILES['project_image']['tmp_name'],"images/project_image/".$projectimg);

		$project=array("project_name"=>$this->input->post('project_name'),
						"admin_name"=>$this->input->post('admin_name'),
						"project_url"=>$this->input->post('project_url'),
						"sub_menu_id"=>$this->input->post('sub_menu'),
							"project_img"=>$projectimg);
		$this->db->insert('latest_projects',$project);
		redirect('admin/show_latest_project');
	}

	public function delete_project($id)
	{
		$this->db->where('project_id',$id)->delete('latest_projects');
		redirect('admin/show_latest_project');
	}

	public function service_card()
	{
		$this->load->view('admin/service_card');
	}
	public function show_service_card()
	{
		$this->load->view('admin/show_service_card');
	}

	public function insert_card()
	{
		$card_img=rand(0000,9999)."_".time()."_".$_FILES['card_image']['name'];
		move_uploaded_file($_FILES['card_image']['tmp_name'],"images/service_card_img/".$card_img);

		$card_cover_img=rand(0000,9999)."_".time()."_".$_FILES['cover_image']['name'];
		move_uploaded_file($_FILES['cover_image']['tmp_name'],"images/service_card_img/".$card_cover_img);

		$card=array("card_url"=>$this->input->post('card_url'),
					"card_d"=>$this->input->post('card_text'),
					"card_name"=>$this->input->post('card_name'),
					"sub_menu_id"=>$this->input->post('sub_menu'),
					"description"=>$this->input->post('description'),
					"card_img"=>$card_img,
					"cover_img"=>$card_cover_img);
		$this->db->insert('service_card',$card);
		redirect('admin/show_service_card');
	}

	public function update_service_cart($id)
	{
		$card1['c']=$this->amodels->getcardid($id);
		$this->load->view('admin/update_service_cart',$card1);
	}

	public function edit_card($id){

		$card1=$this->amodels->getcardid($id);

		if($_FILES['card_image']['name']=="") {
			$card_img=$card1->card_img;
		}
		else
		{
			$card_img=rand(0000,9999)."_".time()."_".$_FILES['card_image']['name'];
			move_uploaded_file($_FILES['card_image']['tmp_name'],"images/service_card_img/".$card_img);
		}

		if($_FILES['cover_image']['name']=="") {
			$card_cover_img=$card1->cover_img;
		}
		else
		{
			$card_cover_img=rand(0000,9999)."_".time()."_".$_FILES['cover_image']['name'];
			move_uploaded_file($_FILES['cover_image']['tmp_name'],"images/service_card_img/".$card_cover_img);
		}

		$card=array("card_url"=>$this->input->post('card_url'),
					"card_d"=>$this->input->post('card_text'),
					"card_name"=>$this->input->post('card_name'),
					"sub_menu_id"=>$this->input->post('sub_menu'),
					"description"=>$this->input->post('description'),
					"card_img"=>$card_img,
					"cover_img"=>$card_cover_img );
		$this->db->where('cart_id',$id)->update('service_card',$card);
		redirect('admin/show_service_card');

	}

	public function delete_card($id)
	{
		$this->db->where('card_id',$id)->delete('service_card');
		redirect('admin/show_service_card');
	}

	public function banner()
	{
		$this->load->view('admin/banner');
	}
	public function insert_banner()
	{
		$banner_image=rand(0000,9999)."_".time()."_".$_FILES['banner_img']['name'];
		move_uploaded_file($_FILES['banner_img']['tmp_name'],"images/banner_image/".$banner_image);

		$banner=array("banner_title"=>$this->input->post('banner_title'),
						"banner_tag"=>$this->input->post('banner_tag'),
						"description"=>$this->input->post('description'),
						"banner_img"=>$banner_image);
		$this->db->insert('banner',$banner);
		redirect('admin/show_banner');

	}

	public function show_banner()
	{
		$this->load->view('admin/show_banner');
	}

	public function company_details()
	{
		$this->load->view('admin/company_details');
	}
	public function update_details($id)
	{
		$del['d']=$this->amodels->getdetailsid($id);
		$this->load->view('admin/update_details',$del);
	}

	public function updatedetails($id)
	{
		$edit_details=array("company_name"=>$this->input->post('company_name'),
							"company_email"=>$this->input->post('company_email'),
							"company_no"=>$this->input->post('company_no'),
							"address"=>$this->input->post('address'));

		$this->db->where('details_id',$id)->update("company_details",$edit_details);
		redirect('admin/company_details');

	}


	public function show_logo()
	{
		$this->load->view('admin/show_logo');
	}

	public function update_logo($id)
	{
		$logo['l']=$this->amodels->getlogoid($id);
		$this->load->view('admin/update_logo',$logo);
	}

	public function editlogo($id)
	{
		$logo=$this->amodels->getlogoid($id);

		if ($_FILES['logo']['name']=="") {
			$logo_image=$logo->logo_img;
		}
		else
		{
			$logo_image=rand(0000,9999)."_".time()."_".$_FILES['logo']['name'];
			move_uploaded_file($_FILES['logo']['tmp_name'],"images/logo/".$logo_image);
		}


		$logoins=array("logo_img"=>$logo_image);
		$this->db->where('logo_id',$id)->update('logo',$logoins);
		redirect('admin/show_logo');
	}

	public function deletelogo($id)
	{
		$this->db->where('logo_id',$id)->delete('logo');
		redirect('admin/show_logo');
	}

	public function deletebanner($id)
	{
		$this->db->where('banner_id',$id)->delete('banner');
		redirect('admin/show_banner');
	}

	public function about($id)
	{
		$abt['a']=$this->amodels->getabout($id);
		$this->load->view('admin/about',$abt);
	}

	public function update_about($id){

		$abt=$this->amodels->getabout($id);
		if($_FILES['about_img']['name']=="")
		{
			$aimg=$abt->about_img;
		}
		else{
			$aimg=rand(0000,9999)."_".time()."_".$_FILES['about_img']['name'];
			move_uploaded_file($_FILES['about_img']['tmp_name'],"images/about/".$aimg);
			
		}

		if($_FILES['about_banner']['name']=="")
		{
			$abimg=$abt->about_banner;
		}
		else{
			$abimg=rand(0000,9999)."_".time()."_".$_FILES['about_banner']['name'];
			move_uploaded_file($_FILES['about_banner']['tmp_name'],"images/about/".$abimg);

			
		}



		$up_about=array("about_title"=>$this->input->post('about_name'),
						"about_taxt"=>$this->input->post('about_text'),
						"about_banner"=>$abimg,
						"about_img"=>$aimg);
		$this->db->where('about_id',$id)->update("about",$up_about);
		redirect('admin/show_about');
						

	}



	public function show_about()
	{
		$this->load->view('admin/show_about');
	}

	public function privacy_policy($id)
	{
		$prv['p']=$this->amodels->getprivacy($id);
		$this->load->view('admin/privacy_policy',$prv);
	}

	public function show_privacy_policy()
	{
		

		$this->load->view('admin/show_privacy_policy');
	}

	public function update_privacy($id)
	{
		$prv=$this->amodels->getprivacy($id);

		if($_FILES['policy_banner']['name']=="")
		{
			$policy_banner=$prv->policy_banner;
		}
		else{
			$policy_banner=rand(0000,9999)."_".time()."_".$_FILES['policy_banner']['name'];
			move_uploaded_file($_FILES['policy_banner']['tmp_name'],"images/privacy/".$policy_banner);
		}

		$up_policy=array("policy_title"=>$this->input->post('policy_name'),
						"policy_text"=>$this->input->post('policy_text'),
						"policy_banner"=>$policy_banner);
		$this->db->where('policy_id',$id)->update("privacy_policy",$up_policy);
		redirect('admin/show_privacy_policy');
	}


	public function review()
	{
		$this->load->view('admin/review');
	}

	public function show_review()
	{
		$this->load->view('admin/show_review');
	}

	public function insert_review()
	{

		$user_img=rand(0000,9999)."_".time()."_".$_FILES['user_img']['name'];
			move_uploaded_file($_FILES['user_img']['tmp_name'],"images/review/".$user_img);

		$review=array("user_name"=>$this->input->post('user_name'),
						"user_text"=>$this->input->post('user_text'),
						"user_details"=>$this->input->post('city'),
						"user_img"=>$user_img);

		$this->db->insert('review',$review);
		redirect('admin/show_review');
	}
	

	public function deletereview($id)
	{
		$this->db->where('review_id',$id)->delete('review');
		redirect('admin/show_review');
	}







//demo project
	public function signup()
	{
		$this->load->view('demo/signup');
	}

	public function insert_signup()
	{
		$signup_insert=array("name"=>$this->input->post('name'),
							"email"=>$this->input->post('email'),
							"pass"=>$this->input->post('password'),
							"phone"=>$this->input->post('phone'),
							"country"=>$this->input->post('country'),
							"city"=>$this->input->post('city'));
		$this->db->insert('demo',$signup_insert);
		redirect('admin/loginform');
	}

	public function loginform()
	{
		$this->load->view('demo/login');
	}

	public function chake_signup(){
		$chakesignup=array("email"=>$this->input->post('email'),
							"pass"=>$this->input->post('password'));
		$csignup=$this->amodels->csignup($chakesignup);

		if($csignup==1){
			$this->session->set_userdata("nishant","1234567");
			$this->session->set_userdata("sesn",$chakesignup['email']);

			redirect('demo/user');
		}
		else{
			redirect('demo/login');
		}


	}

	public function userdata()
	{
		$this->load->view('demo/user');
	}
	public function update_user()
	{
		$this->load->view('demo/update_user');
	}

	public function print1()
	{
		$this->load->view('admin/print');
	}

	public function table_datatable(){
		$this->load->view('admin/table-datatable');
	}

}
