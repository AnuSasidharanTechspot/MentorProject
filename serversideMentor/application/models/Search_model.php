<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	public function list_members($input){
			$uid=$input['uid'];
			$name=$input['name'];
			$query=$this->db->query("select vchr_first_name from fb_members where vchr_first_name like '%$name%' and pk_int_member_id!=$uid");
			if ($query->num_rows() ==1)
			{						
				foreach ($query->result() as $row)
				{
					$val[]=$row;
				}

   			}
   			else
   			{
   				$val=null;
   			}
   			return json_encode($val);
   		}
}
?>