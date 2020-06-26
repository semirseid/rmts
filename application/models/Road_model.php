    <?php
     class Road_model extends CI_Model
        {
        public function __construct ()
        {
            $this->load->database();
        }
        public function savesegment($road_number){
           return $this->db->insert('tbl_road_segment',$data);
        }
        public function  getsegmentsCount($number)
        {
              //$this->db->where('road_number',);
            $query = $this->db->get_where('tbl_road_segment', array('road_number' => $number));
            return  $query->result();
        }

		function getroadnumbers(){
		$query=$this->db->get('tbl_road_asset');
		return $query->result();
		}

        function get_segments($roadNumber){
		    $this->db->where('road_number',$roadNumber);
            $query=$this->db->get('tbl_road_segment');
            return $query->result();
        }
         /**
          * @param $data
          * @return mixed
          * register new road
          */
         public function register_road($data)
                {
                    return $this->db->insert('tbl_road_asset',$data);
                }
    /**
     * @param $number
     * @return mixed
     * check if road is already registered to avoid data redendency
     */
       function check_if_exists($number)
            {
                $this->db->where('road_number',$number);
                $query=$this->db->get('tbl_road_asset');
                return $query->result();
            }
            public function get_road_info($id)
            {
                $this->db->select('
                      tbl_road_asset.road_name,
                      tbl_road_asset.road_number,
                      tbl_road_asset.End_chainage,
                     tbl_road_asset.End_description,
                      tbl_road_asset.start_description,
                       tbl_road_asset.surface_width,
                     tbl_road_asset.carriage_way_width,
                      tbl_road_asset.no_ways,
                         tbl_road_asset.project_handover,
                            tbl_road_asset.rate,
                               tbl_road_asset.standard_Width,
                      
                        tbl_road_asset.no_lanes,
                       tbl_road_asset.measured_Length,
                      tbl_road_asset.start_chainage,
                      tbl_road_asset.End_chainage,
                      tbl_road_asset.area,
                      tbl_district.District_name,
                      tbl_road_class.RoadclassName
                ');

                $this->db->from('tbl_road_asset');
                $this->db->join('tbl_road_class','tbl_road_asset.class_ID=tbl_road_class.class_ID');
                $this->db->join('tbl_district','tbl_road_asset.class_ID=tbl_district.District_id');
                $this->db->Where('road_number',$id);
                $query=$this->db->get();
                return $query->result();
            }
			function get_road_list(){
                   $this->db->select('
                              tbl_road_asset.road_name,
                              tbl_road_asset.road_number,
                              tbl_road_asset.End_chainage,
                              tbl_district.District_name,
                              tbl_road_class.RoadclassName,
                              tbl_road_asset.measured_Length,
                              tbl_road_asset.start_chainage,
                              tbl_road_asset.End_chainage'
                        );

                     $this->db->from('tbl_road_asset');
                     $this->db->join('tbl_road_class','tbl_road_asset.class_ID=tbl_road_class.class_ID');
                     $this->db->join('tbl_district','tbl_road_asset.class_ID=tbl_district.District_id');
                     $query=$this->db->get();
                     return $query->result();
			}
         public function get_road_class(){
                  $query=$this->db->get('tbl_road_class');
                return $query->result();
			}

         public function getwalkwaytype(){
             $query=$this->db->get('tbl_walkway_type');
             return $query->result();
         }
         public function getbridgetype(){
             $query=$this->db->get('tbl_bridge_type');
             return $query->result();
         }
         public function getroadfurnituretype(){
             $query=$this->db->get('tbl_roadfurniture_type');
             return $query->result();
         }
         public function getdrinagetype(){
             $query=$this->db->get('tbl_drinage_type');
             return $query->result();
         }

}