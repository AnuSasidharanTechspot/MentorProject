<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_members extends CI_Controller {
	public function fb_members(){
		$search_string=$this->input->post("search");
		$this->load->model("Search_model");
		$result=$this->Search_model->list_members($search);
		echo json_encode($result);

	}