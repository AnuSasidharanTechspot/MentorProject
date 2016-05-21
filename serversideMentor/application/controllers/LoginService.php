<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginService extends CI_Controller {

  public function loginAuth(){
    if(isset($_REQUEST['email']) && isset($_REQUEST['password']))
    {

      $user['vchr_email'] = $this->input->get_post('email');
      $user['vchr_password'] = $this->input->get_post('password');
      $this->load->model("LoginModel");
      $message=$this->LoginModel->findUser($user);
      echo json_encode($message);
    }
    else{
      $response = array("ResponseCode"=>"404","Msg"=>"Email or password is not defined");
      echo json_encode($response);
    }
  }
}
?>