<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FacebookLogin extends CI_Controller{
	public function index()
	{
		$this->load->view("main");
	}
	public function loginControl(){
		$user['email']=$this->input->post("email");
		$user['password']=$this->input->post("password");
		//$url = 'http://api.baabtra.com/LoginService/login.php';
		$url = 'http://localhost:81/facebook/serversideMentor/index.php/LoginService/loginAuth';
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$json=json_decode($result,true);
		$user['data']=$json;
		foreach ($json as $val)
			if($val['ResponseCode']==200)
			 	$this->load->view("facebook_home",$user);
			else if($val['ResponseCode']==500)
				$this->load->view("wrong_pwd",$user);
			else if($val['ResponseCode']==404)
				$this->load->view("wrong_user_id",$user);
	}
}
?>