<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/6/2018
 * Time: 10:04 AM
 */

class Staff_model extends CI_Model
{
public function __construct()
{
    $this->load->database();
}
    /**
     * save staff into database
     * @param $data
     * @return mixed
     */
    public function SaveStaffInfo($data)
        {
            return $this->db->insert('tbl_staff', $data);
        }
        function getprofileInfo($id){
        $this->db->where('Staff_ID',$id);
            $query=$this->db->get('tbl_staff');
            return $query->result();
        }

    /**
     * @param $data
     * @return mixed
     * create user account
     */
    public function create_account($data)
        {
            return $this->db->insert('tbl_users',$data);
        }
    /**
     *Get list of Staff members
     */
    public function get_staff_list()
    {
         $query=$this->db->get('tbl_staff');
         return $query->result();
    }
    public function getPlantId($username){
        $this->db->where('user_name',$username);
        $query=$this->db->get('tbl_users','Plant_id');
        return $query->result();
    }
    public function get_staffID($username){

        $this->db->where('user_name',$username);
 $query=$this->db->get('tbl_users','Staff_ID');
 return $query->result();
    }
    function get_Staff_DistrictID($staff_id){
        $this->db->where('Staff_ID',$staff_id);
        $query=$this->db->get('tbl_staff','District_id');
        return $query->result();
    }
function get_employee_details($staff_id){
    $this->db->where('Staff_ID',$staff_id);
    $query=$this->db->get('tbl_staff');
    return $query->result();
}
}