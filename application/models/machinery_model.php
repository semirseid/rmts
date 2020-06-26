
<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/6/2018
 * Time: 9:54 AM
 */

class machinery_model extends CI_Model
{
    /**
     * machinery constructor.
     */
    function __construct()
    {
        $this->load->database();
    }

    /**
     * register new machinery
     * @param $data
     * @return mixed
     */
    public function register_machinery($data){
        return $this->db->insert('tbl_machinery',$data);
    }
    function get_matypes(){
        $query=$this->db->get('tbl_machinery_types');
        return $query->result();
    }
    public function get_machinerys_info()
    {
        $query=$this->db->get('tbl_machinery');
        return $query->result();
    }

    function listmachinerys(){
        $query=$this->db->get('tbl_machinery');
        return $query->result();
    }
    function listmachinerytype()
    {
        $query = $this->db->get('tbl_machinery_types');
        return $query->result();
    }
    public function getmachinery_types(){
        $query=$this->db->get('tbl_machinery_types');
        return $query->result();
    }
          function submit_request($data){
        return $this->db->insert('tbl_test_request',$data);
    }
}



