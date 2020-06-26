<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 12:45 PM
 */

class User_model extends CI_Model
{
public function __construct ()
{
    $this->load->database();
}

    /**
     * @param $username
     * @param $id
     * @return mixed
     */
    public function get_user_role($username)
{
    //$this->db->select('Role_ID');
    $this->db->where('user_name',$username);
    $query=  $this->db->get('tbl_users');
    return  $query->result();
}
    public function checkUser($username,$password)
    {
        $this->db->where('user_name',$username);
        $this->db->where('password',$password);
        $query=  $this->db->get('tbl_users');
        return  $query->result();
    }

}