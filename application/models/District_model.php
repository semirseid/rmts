    <?php
    /**
     * Created by PhpStorm.
     * User: luv2codeit
     * Date: 2/6/2018
     * Time: 7:15 PM
     */

    class District_model extends CI_Model
    {
    public function __construct ()
    {
        $this->load->database();
    }

        /**
         * register new district
         */
        public function SaveDistrictInfo($data)
                {
                return $this->db->insert('tbl_district',$data);
                }
                public function get_districts(){

                    $query= $this->db->get('tbl_district');
                    return $query->result();
                }
                //get districts and some info
        public function listDistricts()
                {
                    $this->db->select('
                                tbl_district.District_name ,
                               tbl_district.District_id,
                               count(tbl_road_asset.District_id) as roads'
                       );

                    $this->db->from('tbl_district');
                    $this->db->join('tbl_road_asset','tbl_road_asset ON tbl_district.District_id=tbl_road_asset.District_id','LEFT');
                    $this->db->group_by('tbl_district.District_id');
                  return  $this->db->get()->result();
                }
        public function getdistrictName($id){
                    $this->db->where('District_id',$id);
                    $query= $this->db->get('tbl_district','District_name');
                    return $query->result();

                }
        public function get_roads_count($district_id){

            $this->db->select('count(District_id) as total');

            $this->db->where('District_id',$district_id);
         return $this->db->get('tbl_road_asset')->result();
        }
    }