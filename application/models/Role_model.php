<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/6/2018
 * Time: 4:14 PM
 */

class Role_model extends CI_Model
{
    /**
     * Role_model constructor.
     * load database
     */
    public function __construct ()
{
    $this->load->database();
}
public function Add_role()
{
}

    /**
     *Get list of registered roles
     */
    public function get_roles()
        {
        $query=$this->db->get('tbl_roles');
        return $query->result();
        }
public function edit_roles(){

}
}