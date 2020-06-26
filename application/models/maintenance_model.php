<?php
/**
 * register new product
 * @param $data
 * @return mixed
 */
class maintenance_model extends CI_Model
{
    /**
     * production constructor.
     */
    function __construct()
    {
        $this->load->database();
    }

    public function register_maintenance($data)
    {
        return $this->db->insert('tbl_maintainance_projects',$data);
    }

    function get_matypes()
    {
        $query=$this->db->get('tbl_maintenance_types');
        return $query->result();
    }
    public function get_mactivitytypes()
    {
        $query=$this->db->get('tbl_maintenanceactivity_types');
        return $query->result();
    }

    public function get_maintenances_info()
    {
        $query=$this->db->get('tbl_maintainance_projects');
        return $query->result();
    }
    function listmaintenances(){
        $query=$this->db->get('tbl_maintainance_projects');
        return $query->result();
    }
    function listmaintenancetypes(){
        $query=$this->db->get('tbl_maintenance_types');
        return $query->result();
    }
    public function getmaintenance_types(){
        $query=$this->db->get('tbl_maintenance_types');
        return $query->result();
    }

    function submit_request($data){
        return $this->db->insert('tbl_test_request',$data);
    }
}
