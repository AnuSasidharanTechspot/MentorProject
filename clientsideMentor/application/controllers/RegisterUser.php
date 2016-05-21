<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegisterUser extends CI_Controller{
	public function addUser(){
		$user['fname']=$this->input->post("fname");
		$user['lname']=$this->input->post("lname");
		$user['email']=$this->input->post("email");
		$user['password']=$this->input->post("password");
		$user['day']=$this->input->post("day");
		$user['month']=$this->input->post("month");
		$user['year']=$this->input->post("year");
		$user['gender']=$this->input->post("gender");
		$url = 'http://api.baabtra.com/serversideMentor/index.php/RegisterService/insertUser';
		//use key 'http' even if you send the request to https://...
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$context  = stream_context_create($options);
		$json=file_get_contents($url, false, $context);
		echo $json;
						
	}