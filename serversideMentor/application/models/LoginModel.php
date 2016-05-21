<?php
/**
* jjj
*/
class LoginModel extends CI_Model
{
	public function findUser($data){
		$result=$this->db->select("*")
						->from("fb_members")
						->where($data)
						->get();
		if($result->num_rows()==1){
			$user=array();
			foreach ($result->result_array() as $row)
				$user[]=$row;
			$user[0]['ResponseCode']="200";
			$user[0]['Msg']="Success";


		}
		else
		{
			$emailid=$data['vchr_email'];
			$result=$this->db->select("vchr_email,vchr_first_name,vchr_last_name,vchr_prof_pic")
							 ->from("fb_members")
							 ->where('vchr_email', $emailid)
							 ->get();
			if($result->num_rows()==1){
				$user=array();
				foreach ($result->result_array() as $row)
					$user[]=$row;
				$user[0]['ResponseCode']="500";
				$user[0]['Msg']="Password Incorrect!";
			}
			else
			{
				$user[0]['ResponseCode']="404";
				$user[0]['Msg']="Email id does not exist";
				
			}
		}
		return $user;
		}
}






