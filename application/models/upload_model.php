<?php



class Upload_model extends CI_Model

{
      
    public function insert_image($image_data){

        $query = $this->db->insert('uploads_table',$image_data);
        return $query;
    }

    public function get_all_images(){

        $query = $this->db->get('uploads_table');

        return $query->result();
    }




}