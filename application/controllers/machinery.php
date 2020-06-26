<?php
/**
 *
 */
 class machinery extends CI_controller
 {
     function __construct()
     {
         parent::__construct();
         $this->load->model('machinery_model');
     }
     /**
      *index page for machinery users
      */
     public function index()
     {
         $this->load->view('header');
         $this->load->view('machinery/nav');
         $this->load->view('footer');
     }
     function register(){

         $page['page_title']= "machinery";
         $this->load->view('header',$page);
         $this->load->view('machinery/nav');
         $machinery_types['types']= $this->machinery_model->get_matypes();
         $machinerys['machinerylist']= $this->machinery_model->listmachinerys();
         $data=array_merge($machinery_types,$machinerys);
         $this->load->view("machinery/register_machinery",$data);
         $this->load->view('footer');
     }
     /**
      * do registration of machinery
      *      */
     function do_registration()
      {
              $machinery_types_id=$_POST['machinery_types'];
              $machinery_name=$_POST['maname'];
              $quantity=$_POST['quantity'];
              $modelno=$_POST['modelno'];
              $engineno=$_POST['engineno'];
              $plateno=$_POST['plateno'];
              $owner=$_POST['owner'];
              $assignedlot=$_POST['assignedlot'];
              $remark=$_POST['remark'];
              $insertedby=$this->session->userdata('user');
              $inserted_date=date('d/m/y');

         $info=array(

             'machinery_types'=>$machinery_types_id,
             'machinery_name'=>$machinery_name,
              'quantity'=>$quantity,
              'model_no'=>$modelno,
              'engine_no'=>engineno,
              'plate_no'=>$plateno,
              'owner'=>$owner,
              'assigned_lot'=>$assignedlot,
               /* 'Date_of_produce'=>$inserteddate,
                'Store_name'=>$insertedby,*/
              'remark'=>$remark

        );
      // pass data to the model
         $is_inserted=$this->machinery_model->register_machinery($info);
         if($is_inserted==true){
             $this->session->set_flashdata('msg','<div class="alert alert-success"> machinary successfly registered</div>');
             redirect(base_url('index.php/machinery/register'));
         }else{
             $this->session->set_flashdata('msg','<div class="alert alert-warning"> machinary not registered</div>');
             redirect(base_url('index.php/machinery/register'));
         }

     }

     function requestTesting(){
         $machinery_id=$_GET['maid'];
         $Requestdate=date('dd/mm/yy');
         $requestedby=$this->session->userdata('user');
         $data=array(
             'machinery_id'=>$machinery_id,
             'request_date'=>$Requestdate,
             'requested_by'=>$requestedby
         );
         $submitted=$this->machinery_model->submit_request($data);
         if($submitted){
             $this->session->set_flashdata('requestmsg','<div class="alert alert-success">request successfly submited</div>');
             redirect(base_url('index.php/machinery/register'));
         }else{
             $this->session->set_flashdata('requestmsg','<div class="alert alert-warning">request not submited</div>');
             redirect(base_url('index.php/machinery/register'));
         }
     }

 }
 ?>