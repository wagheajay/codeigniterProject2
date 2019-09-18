<?php


class Project_model extends CI_Model{




    // public function get_project($id){

    //     $query = $this->db->get('projects');
    //     $this->db->where('id' => $id);
    //     return $query->row();
        
    // }


    //pass argument in url to get result otherwise throw error of argument
    //
    public function get_project($id){
        //we write querys reverse in codeigniter
        $this->db->where('id',$id); //or like this );
        $query = $this->db->get('projects');
        
        return $query->row();
    }

   public function get_projects(){

        $query = $this->db->get('projects');

        return $query->result();

    }

    public function create_new_project($data){

        
        $query = $this->db->insert('projects',$data);
        return $query;
    }


    public function edit_new_project($project_id,$data){

        $this->db->where('id',$project_id);
        $this->db->update('projects',$data);
        return true;

    }


    public function get_projects_info($project_id){

        $this->db->where('id',$project_id);
        $get_data = $this->db->get('projects');
        return $get_data->row();
    }


    public function delete_project($project_id){

        $this->db->where('id',$project_id);
        $this->db->delete('projects');
        return true;
    }


}
?>