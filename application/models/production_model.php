<?php
/**
 * register new product
 * @param $data
 * @return mixed
 */
class production_model extends CI_Model
{
    /**
     * production constructor.
     */
    function __construct()
 {
     $this->load->database();
 }

    public function register_product($data){
        return $this->db->insert('tbl_product',$data);
}
   function get_prtypes(){
        $query=$this->db->get('tbl_product_types');
        return $query->result();
}
    public function get_products_info()
    {
        $query=$this->db->get('tbl_product');
        return $query->result();
    }
    function listproducts(){
     $query=$this->db->get('tbl_product');
     return $query->result();
     }
    function listproducttype(){
        $query=$this->db->get('tbl_product_types');
        return $query->result();
    }
    public function getproduct_types(){
        $query=$this->db->get('tbl_product_types');
        return $query->result();
    }
    function submit_request($data){
    return $this->db->insert('tbl_test_request',$data);
    }
    public function get_Producton_plantName($plantId){

        $this->db->where('Plant_id',$plantId);
        $query=$this->db->get('tbl_production_plant');
        return $query->result();
    }
}
