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

   public function get_projects($limit,$offset){


    // $query = $this->db->select()
    //                   ->from('projects')
    //                   ->limit($limit,$offset)
    //                   ->get();

      $this->db->limit($limit,$offset);
    $query = $this->db->get('projects');

    return $query->result();

    }

   public function get_projects_rows(){

        $query = $this->db->get('projects');

        return $query->num_rows();

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


    


    public function delete_project($project_id){

        $this->db->where('id',$project_id);
        $this->db->delete('projects');
        return true;
    }

    public function get_projects_info($project_id){

        $this->db->where('id',$project_id);
        $get_data = $this->db->get('projects');
        return $get_data->row();
    }

    public function get_all_projects($user_id){

        $this->db->where('project_user_id',$user_id);
        $get_all_project = $this->db->get('projects'); 
        return $get_all_project->result();

    }

    //joining table using codeigniter join query
    public function get_project_task($project_id,$active = true){


        $this->db->select('
            tasks.task_name,
            tasks.task_body,
            tasks.id,
            projects.project_name,
            projects.project_body
            ');

        $this->db->from('tasks');
        $this->db->join('projects','projects.id = tasks.project_id');
        $this->db->where('tasks.project_id',$project_id);


        if($active == true){

            $this->db->where('tasks.status',0);
        }
        else{

            $this->db->where('tasks.status',1);
        }

        $query = $this->db->get();

        if($query->num_rows() < 1){


            return FALSE;
        }

        return $query->result();




    }

    public function delete_project_tasks($project_id){
        
        $this->db->where('project_id',$project_id);
        $query = $this->db->delete('tasks');
        return $query;



    }

}
?>