<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/6/2018
 * Time: 8:57 AM
 */

class laboratory extends CI_Controller
{
function __construct()
{
    parent::__construct();
    $this->load->model('laboratoryModel');
}
function index(){
    $data['page_title']="laboratory-vew request";
    $this->load->view('header',$data);
   $this->load->view('laboratory/nav');
    $this->load->view('footer');
}
function viewrequest(){
    $data['page_title']="laboratory-vew request";
    $this->load->view('header',$data);
    $this->load->view('laboratory/nav');
    //get requests
   $request['requestlist']= $this->laboratoryModel->get_requests();
    $this->load->view('laboratory/requests',$request);
    $this->load->view('footer');
}
public function GetProductName($id){
    $name=null;
   $data=$this->laboratoryModel->getproductName($id);
   foreach ($data as $productInfo)
   {
$name=$productInfo->product_name;
   }
echo $name;

}
}