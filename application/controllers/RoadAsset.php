<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/8/2018
 * Time: 8:46 AM
 */

class RoadAsset extends CI_Controller
{
public function __construct ()
{
    parent::__construct();
    $this->load->model('Road_model');
}
function register_new_road()
{

}
function viewDetails($roadnumber){
    $page['page_title'] = "HeadOffice";
    $this->load->view("header",$page);
    $this->load->view("HeadOffice/nav");
    $road_info['roadData']=$this->Road_model->get_road_Info($roadnumber);
    $road_info['segments']=$this->Road_model->get_segments($roadnumber);
    $this->load->view("HeadOffice/road_details",$road_info);
    $this->load->view("footer");
}
}