
<?php 
/**
* functions related to districts
*/
class District extends CI_controller
{

    /**
     *home page of district
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('District_model');
        $this->load->model('Road_model');
    }

    function index()
	{
	    if($this->session->userdata('user')==null)
        {
            redirect(base_url());
        }else
            {
                $page['page_title'] = "District-index";
                $this->load->view("header",$page);
            $this->load->view("navigation_bar");
            $this->load->view("District/road");
            $this->load->view("footer");
        }

	}
    /**
     * Road maintainance methods
     * register new road asset
     */
    function Register_road()
	{
        if($this->session->userdata('user')==null)
        {
            redirect(base_url());
        }else {
        
        $page['page_title'] = "District";
		$this->load->view("header",$page);
		$this->load->view("navigation_bar");
        $roaddata['roadclasses']=$this->Road_model->getroad_class();
		$roaddata['roads']=$this->Road_model->get_road_list();
		$this->load->view("road_registration_form",$roaddata);
        $this->load->view("footer");
//       $roaddata['bridgetypes']=$this->Road_model->getbridgetype();
//        $roaddata['walkwaytypes']=$this->Road_model->getwalkwaytype();
//        $roaddata['drinagetypes']=$this->Road_model->getdrinagetype();
//        $roaddata['roadfurnituretype']=$this->Road_model->getroadfurnituretype();

        
	}
}
	function list_roads()
	{

        $page['page_title'] = "District";
	    $this->load->view("header",$page);
	    $this->load->view("navigation_bar");
	
		$list['roads']=$this->Road_model->get_road_list();
		 $this->load->view("district/roadlist",$list);
		
		
	$this->load->view("footer");
	}
    /**
     * resource allocation function
     */
    public function resource_allocatation()
    {

    }
    /**
     *generate road segmenent registration form
     */
    public function AddSegment($roadnumber=null)
    {

        $page['page_title'] = "District";
        $this->load->view("header",$page);
        $this->load->view("navigation_bar");
		// get all road numbers
$road_data=$this->Road_model->getroadnumbers();



        
		
		
        $this->load->view("footer");
    }

    /**
     *do registration of segments
     */
    public function do_segment_registration()
    {
      $roadnumber=$_POST['roadnumber'];
      $segmentstart=$_POST['segmentstart'];
       $segmentend=$_POST['segmentend'];
        $segment_desc=$_POST['segmentDescription'];
         $segment_length=$_POST['segmentlength'];
         $segment_name=$_POST['segment'];
       //echo $roadnumber;
        $segment_data = array('road_number' =>$roadnumber ,
                                'segment_name' => $segment_name,
                                 'start_point' => $segmentstart,
                                'segment_end' =>$segmentend ,
                                'segment_description'=>$segment_desc,
                                'segment_length' =>$segment_length );
        
$result=$this->Road_model->savesegment($segment_data);
if ($result) {
 $this->session->set_flashdata('Segmessage', " <div class='alert alert-success'>Road segment  registered successfully</div>");// set success message
        // echo "road already registered";
            redirect('District/AddSegment');
}
   else{
     $this->session->set_flashdata('Segmessage', " <div class='alert alert-warning'>Road segment already exists</div>");// set success message
        // echo "road already registered";
            redirect('District/AddSegment');

   } }

    /**
     * List segments road referenced by road number
     * @param $roadnumber
     */
    public function DisplaySegments($roadnumber)
    {

    }
    /**
     * List segments road referenced by road number
     * Edit details of road segment
     * @param $segmentID
     */
    public function editsegment($segmentID)
    {

    }

    /**
     * ////////////////////////////////////////////
     *Staff member manuplation functions
     * register new member
     * edit member profile
     * view staff profile
     * ////////////////////////////////////////////////
     * register new member
     */
    public function register_staff_member(){
        //echo "register";
        $page['page_title'] = "District";
        $this->load->view('header',$page);
        $this->load->view('navigation_bar');
        $this->load->view('District/district_Staff_reg_form');
        $this->load->view('footer');

    }

    /**
     *Edit staff profile
     */
    public function edit_staff_profile(){


    }

    /**
     *create user for staff
     */
    public function Add_user(){

    }

    /**
     *ban user account
     */
    public function ban_user(){

    }

    /**
     *change user password
     * @param $userid
     */
    public function changePAssword($userid){

    }

    /**
     *view list of staff members
     */
    function view_staff_list(){

   }
public function road_count($distrct_id){
        //$distrct_id=$_REQUEST['id'];
        $result=$this->District_model->get_roads_count($distrct_id);
     foreach ($result as $data){
         echo $data->total;
     }


}

    /**
     * do registration of new road
     */
 public  function do_Add_road(){
        // Getting form data
        $road_number=$_POST["roadnumber"];
        $Road_Name=$_POST["roadname"];
        $Road_Class=$_POST["roadclass"];
	    $Standard_Width=$_POST["standard_wdith"];
	    $Length=$_POST["roadLength"];
		$CarriageWay_Width=$_POST["carriageWidth"];

	    $Area=$_POST["roadArea"];
		$Number_of_lanes=$_POST["number_of_lanes"];
		$No_Ways=$_POST["no_ways"];
	    $Start_Chainage=$_POST["Start_Chainage"];
		$End_chainage=$_POST["End_chainage"];
		$start_description=$_POST["start_description"];
        $End_description=$_POST["End_description"];

		$District=$_POST["District"];
		$Project_HandOver=$_POST["projectHandover"];
         $rate=$_POST['rate'];

         //variable to column assignment
        $road_data=array(
            'road_number'=> $road_number,

            'road_name'=>$Road_Name,
			'road_class_ID'=>$Road_Class,
			'standard_Width'=>$Standard_Width,
			'measured_Length'=>$Length,
            'carriage_way_width'=>$CarriageWay_Width,
            'area'=>$Area,
            'no_lanes'=>$Number_of_lanes,
            'no_ways'=>$No_Ways,
            'start_chainage'=>$Start_Chainage,
            'End_chainage'=>$End_chainage,
            'start_description'=>$start_description,
			'End_description'=>$End_description,
			'district_id'=>$District,
			'project_handover'=>$Project_HandOver,
            'rate'=>$rate
        );


        //check if it is already registered
        $road_exists=$this->Road_model->check_if_exists($road_number);
        if($road_exists)
        {
            $this->session->set_flashdata('message', " <div class='alert alert-warning'>Road already exists</div>");// set success message
        // echo "road already registered";
            redirect('District/Register_road');

        }else{
            $is_registered=$this->Road_model->register_road($road_data);
            if($is_registered){

                $this->session->set_flashdata('message', " <div class='alert alert-success'>Road successfully registered</div>");// set success message
              //  echo " successfull";
                redirect('District/Register_road');
            }else{
                $this->session->set_flashdata('message', " <div class='alert alert-danger'>Error in road registration</div>");// set success message
               // echo "not successfull";
                redirect('District/Register_road');
            }
        }



}
function logout(){

    $this->session->unset_userdata('role');
    $this->session->unset_userdata('district');
    redirect(base_url());
}

}
 ?>