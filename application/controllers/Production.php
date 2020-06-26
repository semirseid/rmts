<?php
/**
 * 
 */
 class Production extends CI_controller
 {
     function __construct()
     {
         parent::__construct();
         $this->load->model('production_model');
     }

     /**
      *index page for production site users
      */
     public function index()
 	{
        $page['page_title'] = "Production";
        $this->load->view("header",$page);

 		$this->load->view('Production/nav');
        $this->load->view('production/home');
        $this->load->view('footer');
 	}
 	function register(){
         $page['page_title']= "production";
         $this->load->view('header',$page);
         $this->load->view('Production/nav');
         $product_types['types']= $this->production_model->get_prtypes();
         $products['productlist']= $this->production_model->listproducts();
         $data=array_merge($product_types,$products);

         $this->load->view('Production/register_product',$data);
         $this->load->view('footer');
    }
     /**
      * do registration of product
      *      */
     function do_registration()
     {

         $product_types_id=$_POST['product_types'];
         $product_name=$_POST['prname'];
         $quantity=$_POST['quantity'];
         $unitcost=$_POST['unitcost'];
         $supplier=$_POST['supplier'];
         $productionsite=$_POST['productionsite'];
         $productsite=$_POST['productionsite'];
         $date=$_POST['date'];
         $remark=$_POST['remark'];
         $insertedby=$this->session->userdata('user');
         $inserted_date=date('d/m/y');

         //`product_id`, `product_types`, `product_name`, `quantity`, `unit_cost`, `total_cost`, `production_site`, `supplier`, `date`, `remark`
         $info=array(
             'product_id'=>$product_types_id,
             'product_name'=>$product_name,
             'quantity'=>$quantity,
             'unit_cost'=>$unitcost,
             'Plant_id'=>$insertedby,
              'supplier'=>$insertedby,
             'Remark'=>$remark
         );
//pass data to the model
      $is_inserted=$this->production_model->register_product($info);
      if($is_inserted==true){
        $this->session->set_flashdata('msg','<div class="alert alert-success">product successfly registered</div>');
        redirect(base_url('index.php/production/register'));
      }else{
          $this->session->set_flashdata('msg','<div class="alert alert-warning">product not registered</div>');
          redirect(base_url('index.php/production/register'));
      }

    }

     /**
      *
      */
     function requestTesting()

     {
         $product_id=$_GET['prid'];
         $Requestdate=date('dd-mm-yy');
         $requestedby=$this->session->userdata('user');
        // $requestedby=$this->session->userdata('user');
         $data=array(
             'product_id'=>$product_id,
             'request_date'=>$Requestdate,
             'requested_by'=>$requestedby
         );
         $submitted=$this->production_model->submit_request($data);
         if($submitted){
             $this->session->set_flashdata('requestmsg','<div class="alert alert-success">request successfly submited</div>');
             redirect(base_url('index.php/production/register'));
         }else{
             $this->session->set_flashdata('requestmsg','<div class="alert alert-warning">request not submited</div>');
             redirect(base_url('index.php/production/register'));
         }
    }

 } 
 ?>