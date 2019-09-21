<?php

class Tasks extends CI_Controller{




    public function display($task_id){

        $data['task'] = $this->tasks_model->get_task($task_id);

        $data['main_view'] = 'tasks/display';

        $this->load->view('layouts/main', $data);

    }


}