<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchFriends extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function fbMembers()
	{
		$user=$this->input->post('email');
		$url = 'http://api.baabtra.com/serversideMentor/index.php/FriendSearchService/searchFriends';
		
		//$data = array('email' => 'info@baabtra.com', 'password' => 'Thisistrue');
		//use key 'http' even if you send the request to https://...
		$options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
	}