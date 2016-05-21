<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FriendSearchService extends CI_Controller {
	public function searchFriends(){
		if(isset($_REQUEST['searchid'])&& isset($_REQUEST['uid'])){
    		$search['uid']=$this->input->get_post('uid');
    		$search['name']=$this->input->get_post('searchid');
    		$this->load->model("Search_model");
    		$result=$this->Search_model->list_members($search);
    		//$conn=mysqli_connect('13.76.213.131','root','baabteadmin123!','automatefb');
   			
	}