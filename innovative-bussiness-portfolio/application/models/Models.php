<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Model {

	public function getmenu()
	{
		$getmenu=$this->db->get('menu');
		return $getmenu->result();
	}
	public function getsubmenu()
	{
		$getsubmenu=$this->db->get('sub_menu');
		return $getsubmenu->result();
	}

	public function getsubmenuid($id)
	{
		$subid=$this->db->where('sub_menu_id',$id)->get('sub_menu');
		return $subid->row();
	}
	public function getservice()
	{
		$serv=$this->db->get('services');
		return $serv->result();
	}
	public function getserviceid($id)
	{
		$getserv=$this->db->where('sub_menu_id',$id)->get('services');
		return $getserv->row();
	}

	public function getproject()
	{
		$getproject=$this->db->get('latest_projects');
		return $getproject->result();
	}

	public function getcard()
	{
		$getcard=$this->db->get('service_card');
		return $getcard->result();
	}

	public function getcardid($id)
	{
		$getcardid=$this->db->where('cart_id',$id)->get('service_card');
		return $getcardid->row();
	}


	public function getbanner()
	{
		$getbanner=$this->db->get('banner');
		return $getbanner->result();
	}

	public function getdetails()
	{
		$details=$this->db->get('company_details');
		return $details->result();
	}
	public function getlogo()
	{
		$logo=$this->db->get('logo');
		return $logo->result();
	}

	public function getreview(){
		$review=$this->db->get('review');
		return $review->result();
	}

	public function getabout()
	{
		$about=$this->db->get('about');
		return $about->result();
	}
	public function get_privacy_policy(){
		$privacy_policy=$this->db->get('privacy_policy');
		return $privacy_policy->result();
	}

}

