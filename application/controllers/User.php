<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 11:27 AM
 */

class User extends CI_Controller
{
    /**
     *User authentication
     * in
     */
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Staff_model');
        $this->load->model('District_model');
        $this->load->model('User_model');
        $this->load->model('production_model');


    }

    public function Authenticate_user()
    {
        $this->load->helper('form');
        $data['title'] = 'Create a news item';




            //Get form data
            $username=$_POST['username'];
            $password=$_POST['Password'];
            //Load model class


            //validate user
           $user_is_valid=$this->User_model->checkUser($username,$password);
           if($user_is_valid)
           {
               //user is valid get roles
               $district_id=null;
               $district_name=null;
               $staffid=null;
               $plantid=null;
               $plantname=null;

               $role=$this->User_model->get_user_role($username);
//               $id=$this->Staff_model->get_staffID($username);
//               foreach ($id as $idnumber)
//               {
//                   $staffid=$idnumber->Staff_ID;
//               }


               if($role)
                 {
               foreach ($role as $row)
               {
                   $user_role=$row->Role_ID;
                   //$district_id=$row->District_id;
                   $staffid=$row->Staff_ID;

                   if($user_role==2)
                   {
                       $result=$this->Staff_model->get_Staff_DistrictID($staffid);
                       foreach ($result as $staff_data )
                       {
                           $district_id=$staff_data->District_id;
                       }


                       $district_data=$this->District_model->getdistrictName($district_id);
                       foreach ($district_data as $datum){
                           $district_name=$datum->District_name;
                       }

                   }

                   if($user_role==3)
                   {
                       $query_result=$this->Staff_model->getPlantId($username);
                       foreach ($query_result as $plantInfo)
                       {
                           $plantid=$plantInfo->Plant_id;

                       }
                       $plant_name_query_result=$this->production_model->get_Producton_plantName($plantid);
                       foreach ($plant_name_query_result as $plantInfo)
                       {
                           $plantname=$plantInfo->Production_plant_name;

                       }
                   }

                  // echo $user_role;
                   switch ( $user_role)
                   {
                       case 1:
                           {
                               $this->session->set_userdata('HeadOffice', $user_role);// set session for role of logged user
                               $this->session->set_userdata('user', $username);// set session for user name of logged user
                               redirect(base_url('HeadOffice'));
                           }
                       case 2:{

                              $this->session->set_userdata('district', $user_role);// set session for role of logged user
                               $this->session->set_userdata('districtName', $district_name);// set session for role of logged user
                           $this->session->set_userdata('districtID', $district_id);
                          // $district_id=
                              $this->session->set_userdata('user', $username);// set session for user name of logged user
                              redirect(base_url('District'));
                           }
                       case 3:{



                             $this->session->set_userdata('plant', $plantname);// set session for role of logged user
                             $this->session->set_userdata('Production', $user_role);// set session for role of logged user
                             $this->session->set_userdata('user', $username);// set session for user name of logged user
                             redirect(base_url('Production'));
                    
                            }
                       case 4:
                           {
                               $this->session->set_userdata('laboratory', $user_role);// set session for role of logged user
                               $this->session->set_userdata('user', $username);// set session for user name of logged user
                               redirect(base_url('laboratory'));
                       }
                       case 5:
                           {
                               $this->session->set_userdata('machinery', $user_role);// set session for role of logged user
                               $this->session->set_userdata('user', $username);// set session for user name of logged user
                               redirect(base_url('machinery'));

                           }

                       case 6:
                       {
                           $this->session->set_userdata('maintenance', $user_role);// set session for role of logged user
                           $this->session->set_userdata('user', $username);// set session for user name of logged user
                           redirect(base_url('maintenance'));

                       }
                   }
               }}
               else{
                echo "undefined role";
               }

           }else{
               $this->session->set_flashdata('error',"<div class='alert alert-danger'>invalid username or password</div>");
               redirect(base_url());
               // input set error minvalidessage

           }

          //  echo $username.$password;

           // $this->load->view('header', $data);


    }
}
?>
