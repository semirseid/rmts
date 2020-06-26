<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/6/2018
 * Time: 11:21 AM
 */

class laboratoryModel extends CI_Model

{
function get_requests(){
  $query=  $this->db->get('tbl_test_request');
  return $query->result();
}
}

