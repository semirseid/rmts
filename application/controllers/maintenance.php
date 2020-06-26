<?php
/**
 * 
 */
 class maintenance extends CI_controller
 {
     function __construct()
     {
         parent::__construct();
         $this->load->model('maintenance_model');
     }

     /**
      *index page for production site users
      */
     public function index()
 	{
 		$this->load->view('header'); 
 		$this->load->view('maintenance/nav');
 		$this->load->view('footer'); 
 	}
 	function register()
    {
         $page['page_title']= "maintenance";
         $this->load->view('header',$page);
         $this->load->view('maintenance/nav');
         $maintenance['types']= $this->maintenance_model->get_matypes();
         $maintenance['activitytypes']= $this->maintenance_model->get_mactivitytypes();
         $maintenance['maintenancelist']= $this->maintenance_model->listmaintenances();

       // $maintenanceactivitydata['maintenanceactivitys']=$this->maintenance_model->getmaintenance_activitytypes();
       // $roaddata['bridgetypes']=$this->Road_model->getbridgetype();
        //$roaddata['walkwaytypes']=$this->Road_model->getwalkwaytype();
        //$roaddata['drinagetypes']=$this->Road_model->getdrinagetype();
        //$roaddata['roadfurnitures']=$this->Road_model->getroadfurniture();

       //  $data=array_merge($maintenance_types,$maintenances);
         $this->load->view('maintenance/register_maintenance',$maintenance);
         $this->load->view('footer');
    }
     /**
      * do registration of product
      *      */
     function do_registration()
     {

         $maintenance_type_id=$_POST['maintenance_types'];
         $maintenance_name=$_POST['maname'];
         $activity_types=$_POST['activity_types'];
         $unit=$_POST['unit'];
         $unitrate=$_POST['unit_rate'];
         $physical_accomplishment=$_POST['physical_accomplishment'];
         $financial_accomplishment=$_POST['financial_accomplishment'];
         $remark=$_POST['remark'];

         //
         $info=array(
             'maintenance_type'=>$maintenance_type_id,
             'maintenance_name'=>$maintenance_name,
             'activity_types'=>$activity_types,
             'unit'=>$unit,
             'unit_rate'=>$unitrate,
             'physical_accomplishment'=>$physicalaccomplishment,
             'financial_accomplishment'=>$financialaccomplishment,
             'remark'=>$remark
         );
//pass data to the model
      $is_inserted=$this->maintenance_model->register_maintenance($info);
      if($is_inserted==true){
        $this->session->set_flashdata('msg','<div class="alert alert-success">maintenance data successfly registered</div>');
        redirect(base_url('index.php/maintenance/register'));
      }else{
          $this->session->set_flashdata('msg','<div class="alert alert-warning">maintenance data  not registered</div>');
          redirect(base_url('index.php/maintenance/register'));
      }

    }


 } 
 ?>