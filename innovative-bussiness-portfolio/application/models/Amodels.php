<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amodels extends CI_Model {

	// this function "select_contact" for select contect data  from database
	public function select_contact()
	{
		$contact = $this->db->get('contact');
		return $contact->result();

	}

	public function select_menu()
	{
		$menu=$this->db->get('menu');
		return $menu->result();
	}

	public function checksignin($chakesign)
	{
			$sgn=$this->db->query("SELECT * FROM `login` where `email`='$chakesign[email]' and `pass`='$chakesign[pass]' ");
			return $sgn->num_rows();
	}

	public function getmenuid($id)
	{
		$menuid=$this->db->where('m_id',$id)->get('menu');
		return $menuid->row();
	}

	public function select_sub_menu()
	{
		$submenu=$this->db->get('sub_menu');
		return $submenu->result();
	}

	public function getsubmenuid($id)
	{
		$submenuid=$this->db->where('sub_menu_id',$id)->get('sub_menu');
		return $submenuid->row();
	}

	public function select_service()
	{
		$service=$this->db->get('services');
		return $service->result();
	}

	public function gatservice($id){
		$getservice=$this->db->where('s_id',$id)->get('services');
		return $getservice->row();
	}

	public function select_project()
	{
		$project=$this->db->get('latest_projects');
		return $project->result();
	}

	public function select_card()
	{
		$card=$this->db->get('service_card');
		return $card->result();
	}

	public function getcardid($id)
	{
		$getcardid=$this->db->where('cart_id',$id)->get('service_card');
		return $getcardid->row();
	}

	public function select_banner()
	{
		$card=$this->db->get('banner');
		return $card->result();
	}
	public function select_details()
	{
		$detail=$this->db->get('company_details');
		return $detail->result();
	}
	public function getdetailsid($id)
	{
		$getdel=$this->db->where('details_id',$id)->get('company_details');
		return $getdel->row();
	}
	public function select_logo()
	{
		$logo=$this->db->get('logo');
		return $logo->result();
	}

	public function getlogoid($id)
	{
		$logo=$this->db->where('logo_id',$id)->get('logo');
		return $logo->row();
	}

	public function select_about()
	{
		$about=$this->db->get('about');

		return $about->result();
	}

	public function getabout($id)
	{
		$getabout=$this->db->where('about_id',$id)->get('about');
		return $getabout->row();
	}

	public function select_privacy()
	{
		$privacy=$this->db->get('privacy_policy');

		return $privacy->result();
	}

	public function getprivacy($id)
	{
		$getprivacy_policy=$this->db->where('policy_id',$id)->get('privacy_policy');
		return $getprivacy_policy->row();
	}

	public function select_review()
	{
		$get_review=$this->db->get('review');
		return $get_review->result();
	}

	public function getreview($id)
	{
		$review=$this->db->where('review_id',$id)->get('review');
		return $review->row();
	}


	// demo 

	public function csignup($chakesignup){
		$cup=$this->db->query("SELECT * FROM `demo` where `email` = $chakesignup[email] `pass` = $chakesignup[pass] ");
		return $cup->num_rows();
	}
}

