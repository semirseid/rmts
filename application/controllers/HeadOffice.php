<?php
/**
 * HeadOffice administrators pages
 * @property  Staff_model
 * @property  session
 * @property  Staff_model
 * @property  staff_model
 */
 class HeadOffice extends CI_controller
 {
     function __construct()
     {
         parent::__construct();
         $this->load->model('Staff_model');
         $this->load->Model('District_model');
         $this->load->Model('Road_model');
         $this->load->Model('production_model');

     }
     //index page of HeadOffice admin
 	function index(	)
 	{
        $page['page_title'] = "HeadOffice";
        $this->load->view("header",$page);
 		$this->load->view("HeadOffice/nav");
        $basicInfo['districts']=$this->District_model-> listDistricts();
        $basicInfo['roads']=$this->Road_model-> get_road_list();
        $this->load->view("HeadOffice/basic_reports",$basicInfo);
 		$this->load->view("footer");
 	}
 	// list of registered road assets in all districts
 	function ListAllroads()
	{
        $page['page_title'] = "HeadOffice";
        $this->load->view("header",$page);
        $this->load->view("HeadOffice/nav");
        // Get road list

        $roadInfo['roads']=$this->Road_model-> get_road_list();
        $this->load->view("ListOfRoads",$roadInfo);
        $this->load->view("footer");
	}
	//list of production plant sites 
	//function production()
	//{
      //  $this->load->view('header');
        //$this->load->view('HeadOffice/nav');
        // Get road list
        //$this->load->view('HeadOffice/productions');
        //$this->load->view('footer');
//	}
     // list of registered productions
     function ListAllproducts()
     {
         $page['page_title'] = "HeadOffice";
         $this->load->view("header",$page);
         $this->load->view("HeadOffice/nav");
         // Get production list

         $productsInfo['products']=$this->production_model-> get_products_Info();
         $this->load->view("ListOfProducts",$productsInfo);

     }
	//list of laboratories sites 
	function laboratory()
	{

        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/laboratory');
        $this->load->view('footer');
	}	
	//list of machinery resources


    // list of registered machinerys
    function ListAllmachinerys()
    {
        $page['page_title']="HeadOffice";
        $this->load->view("header",$page);
        $this->load->view("HeadOffice/nav");
        // Get machinery list
        $this->load->Model('machinery_model');
        $machinerysinfo['machinerys']=$this->machinery_model-> get_machinerys_info();
        $this->load->view("ListOfmachinerys",$machinerysinfo);
        $this->load->view("footer");
    }
	function Machinery()
	{

        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/machinery');
        $this->load->view('footer');
	}	
	//  ===============================
	// maintenance report  functions
	// ==========================================

         /**
      *list of North District projects
      */
     function northdistrictprojects()
	{

        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/northdistrict');
        $this->load->view('footer');
	}
	 // list of South District projects
	function southdistrictprojects()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/southdistrict');
        $this->load->view('footer');
	}
	// list of Central District projects
	function centraldistrictprojects()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/centraldistrict');
        $this->load->view('footer');
	}// list of East District projects
	function eastdistrictprojects()
	{
        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/eastdistrict');
        $this->load->view('footer');
	}
	// list of West District projects 
	function westdistrictprojects()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/westdistrict');
        $this->load->view('footer');
	}
	//  ===============================
	// resources report  functions
	// ==========================================

     /**
      * budget management
      */
     function budget()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/budgetplan');
		$this->load->view('footer');
	}

     /**
      * budget management
      */
     function Machineries()
	{
        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/machinery_report');
        $this->load->view('footer');
	}
// construction materials
	function Materials()
	{
        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/material_report');
        $this->load->view('footer');
	}
function editprofile(){
         $staffid=$_REQUEST['staffid'];
    $data=$this->Staff_model->getprofileInfo($staffid);
//echo json_encode($data);
    foreach ($data as $info){
        echo "<form class='form-group' action=''>
<div class='form-group'>
<label>staff_id</label>
<input class='form-control ' name='editedfirstname' value='$info->Staff_ID'> 
</div>
<div class='form-group'>
<label>First name</label>
<input class='form-control ' name='editedlastname' value='$info->First_name'> 
</div>
<div class='form-group'>
<label>middle name</label>
<input class='form-control ' name='editedmiddlename' value='$info->Middle_name'> 
</div>
<div class='form-group'>
<label>Last name</label>
<input class='form-control ' name='editedlastname' value='$info->Last_name'> 
</div>
<div class='form-group'>
<label>Gender</label>
<select class='form-control ' name='EditedGender' >
<option value='$info->Gender'>$info->Gender</option>
<option>Male</option>
<option>Female</option>
 </select>
</div>
<div class='form-group'>
<label>Birth date</label>
<input class='form-control' type='date' name='editedid' value='$info->Birth_date'> 
</div>
</form>";

    }




}
	// hire new employee
	function hireEmployee()
	{
	//hire employee
        $page['page_title'] = "HeadOffice";
		$this->load->view('header',$page);
		$this->load->view('HeadOffice/nav');
		//Load model class that fetches employee data from database
        $this->load->model('staff_model');
        $empdata['employee']=$this->staff_model->get_staff_list();

		$this->load->view('staff_registration_form',$empdata);
	
		$this->load->view('footer');
	}
	// resign employee
	function resignEmployee()
	{
        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('resign');
        $this->load->view('footer');
	}

    /**
     * view employee profile
     */
    function Employeeprofile()
	{
        $page['page_title'] = "HeadOffice";
		$this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        //load class that fetches employee data from data
		$this->load->Model('Staff_model');
        //Get list of employees
		$employees['empdata']=$this->Staff_model-> get_staff_list();
        $this->load->view('Employeeprofile',$employees);
        $this->load->view('footer');
	}
	public function viewProfile($id){
        $profile=$this->Staff_model->get_employee_details($id);
        echo json_encode($profile);
    }

    /**
     * list all active staff members
     */
    function ListActiveEmployees()
	{
		echo "list active employee";
	}

    /**
     *Employee report
     */
    function employeeReport()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/staff_report');
        $this->load->view('footer');
	}
    //=========================================
    //      Logged user account management
    //============================================

    /**
     * create user account
     */
    public function AddUser()
    {
        $page['page_title'] = "HeadOffice";
        $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        // load employee list and roles
        $this->load->Model('Staff_model');
        $employees['employee']=$this->Staff_model->get_staff_list();
        //Get roles to be owned by users
        $this->load->Model('Role_model');
        $roles['role']=$this->Role_model->get_roles();
        $data=array_merge($employees,$roles);
        $this->load->view('HeadOffice/create_user',$data);
        $this->load->view('footer');
    }
    /**
     *logout
     */
    function Logout()
	{
		/** @var $session $this */
        $this->session->unset_userdata('HeadOffice');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('district');
		redirect(base_url());
	}

    /**
     *change password
     */
    function changePassword()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/changepassword');
        $this->load->view('footer');

	}
	// my profile
	function myprofile()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->view('HeadOffice/myprofile');
        $this->load->view('footer');
	}

    /**
     * do user creation
     */
    public function do_create_user(){
        //Accepting form data

        $userid=$_POST['userid'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        //column to form_data correspondance
		   $userdata= array(
			   'Staff_ID' =>$userid,
			   'user_name'=>$username,
			   'password'=>$password,
			   'Role_ID'=>$role
		   );
		   // load model class of user management
		$this->load->Model('Staff_model');
		// execute the specific function of this model

			$user_created=$this->Staff_model->create_account($userdata);
			if ($user_created)
			{
			//user created successfully
                $this->session->set_flashdata('message', "User account successfully registered");// set success message
				redirect(base_url('index.php/HeadOffice/AddUser'));
			}else{
                echo "user not created ";
			}
            }

 //=========================================
    //      district management
    //============================================
      // logout
	function addDistrict()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->model('District_model');
        $districts['district']=$this->District_model->listDistricts();
        $this->load->view('HeadOffice/AddDistrict',$districts);
        $this->load->view('footer');
	}
    function Do_addDistrict()
    {

        $districtname=$_POST['districtname'];
        $description=$_POST['description'];

        $districtInfo=array(

			'District_name'=>$districtname,
            'Disrict_description'=>$description
		                  );
        $this->load->model('District_model');
        $is_district_registered=$this->District_model->SaveDistrictInfo($districtInfo);
        if($is_district_registered) {
            $this->session->set_flashdata('message', "District successfully registered");// set success message
            redirect(base_url('index.php/HeadOffice/addDistrict'));
        }else
		{
            $this->session->set_flashdata('message', "District not registered");// set error message
            redirect(base_url('index.php/HeadOffice/addDistrict'));
		}
    }
	 // change password
	function viewDisricts()
	{
        $page['page_title'] = "HeadOffice";
	    $this->load->view('header',$page);
        $this->load->view('HeadOffice/nav');
        $this->load->model('District_model');
        $districts['district']=$this->District_model->listDistricts();
        $this->load->view('Districts',$districts);
        $this->load->view('footer');
	}

    /**
     * function to delete district
     * @param $id
     */
    function delete($id){

    }
	// reports by district
	function reportsbyDistrict()
	{
		echo " change pasword ";
	}
    /**
     *do registration of staff info into database
     */
    function do_register()
    {
         //loading model class
       $this->load->Model("staff_model");
         // fetching form data//
        $first_name=$_POST['FirstName'];
        $middle_name=$_POST['middleName'];
        $last_name=$_POST['LastName'];
        $gender=$_POST['gender'];
        $birth_date=$_POST['birthdate'];
        $hire_date=$_POST['hiredate'];
        $salary=$_POST['salary'];
        $academic_level=$_POST['academic_level'];

        //corresponding variables to respective column
        $data = array(
            'First_name' =>$first_name,
            'Middle_name'=>$middle_name,
            'Last_name'=>$last_name,
            'Gender'=>$gender,
            'Birth_date'=>$birth_date,
            'Hire_date'=>$hire_date,
            'salary'=>$salary,
            'academic_level'=>$academic_level
        );
        $is_inserted_dated=$this->staff_model->SaveStaffInfo($data);

          if ($is_inserted_dated){
             // if registration is successfull
          $this->session->set_flashdata('message', "Staff member successfully registered");// set success message
           redirect(base_url('index.php/HeadOffice/hireEmployee'));// redirect to employee form
           }
           else{
        // if registration is not successful
               $this->session->set_flashdata('message', "Staff member not registered");// set error message
               redirect(base_url('index.php/HeadOffice/hireEmployee'));// redirect to employee form
       }
    }

 } 
 ?>

