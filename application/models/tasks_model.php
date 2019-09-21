<?php


class Tasks_model extends CI_Model{


    public function get_task($task_id){

          $this->db->where('id',$task_id);
          $query = $this->db->get('tasks');
          return $query->row();


    }

    public function create_new_task($data){


        $query = $this->db->insert('tasks',$data);
        return $query;
        
    }

    
}