<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
    /*
     * get rows from the files table
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from('student');
        //$this->db->where('status','1');
       // $this->db->order_by('created','desc');
        if(array_key_exists('stud_id',$params) && !empty($params['stud_id'])){
            $this->db->where('stud_id',$params['stud_id']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }
  
}