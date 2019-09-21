<?php

class Tasks extends CI_Controller{




    public function display($task_id){

        $data['task'] = $this->tasks_model->get_task($task_id);

        $data['main_view'] = 'tasks/display';

        $this->load->view('layouts/main', $data);

    }

    public function create($project_id)
    {
        

        


        $this->form_validation->set_rules('taskname', 'Task Name', 'trim|required');
        $this->form_validation->set_rules('taskbody', 'Task Description', 'trim|required');
        $this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');


        if ($this->form_validation->run() == false) {


           


            $data['main_view'] = 'tasks/create_task';
            $this->load->view('layouts/main', $data);
            # code...
        } else {


            //$project_user_id = $this->session->userdata('user_id');
            $task_name = $this->input->post('taskname');
            $task_body = $this->input->post('taskbody');
            $due_date = $this->input->post('due_date');

            $data = array(

              'project_id' => $project_id,
               'task_body' => $task_body,
               'task_name' => $task_name,
               'due_date' => $due_date
            );



            if ($this->tasks_model->create_new_task($data)) {

                $this->session->set_flashdata('task_created', 'task has been created.');
                redirect('projects');
                
            }
        }
    }


}