
<?php


class  Projects extends CI_Controller
{




    //this construct function will run at start when projects get called
    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('pagination');

         if (!$this->session->userdata('logged_in')) {

          $this->session->set_flashdata('no_access', 'Access Denied!');
          redirect('home/index');


            
        }
        
        
    }

    


    public function index()
    {

    
        $config = array(

            'base_url' => base_url()."projects/index",
            'per_page' => 4,
            'total_rows' => $this->project_model->get_projects_rows(),
        );
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First Page';
        //$config['first_link'] = '&lsaquo; First';
        //$config['last_link'] = 'Last &rsaquo;';
        $config['last_link'] = 'Last Page';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
      $this->pagination->initialize($config);

        $page = $this->uri->segment(3,0);
    
        $data['projects'] = $this->project_model->get_projects($config['per_page'],$page);
        $data['main_view'] = "project/index";

        $this->load->view('layouts/main', $data);


        
    }


    public function display($project_id)
    {


        $data['not_completed_task'] = $this->project_model->get_project_task($project_id,true);
        $data['completed_task'] = $this->project_model->get_project_task($project_id,false);

        $data['project_data'] = $this->project_model->get_project($project_id);


        $data['main_view'] = "project/display";

        $this->load->view('layouts/main', $data);
    }


    public function create()
    {
        

        


        $this->form_validation->set_rules('projectname', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('projectbody', 'Project Description', 'trim|required');


        if ($this->form_validation->run() == false) {


           


            $data['main_view'] = 'project/create_project';
            $this->load->view('layouts/main', $data);
            # code...
        } else {


            $project_user_id = $this->session->userdata('user_id');
            $project_name = $this->input->post('projectname');
            $project_body = $this->input->post('projectbody');

            $data = array(

             'project_user_id' => $project_user_id,
               'project_body' => $project_body,
               'project_name' => $project_name
            );



            if ($this->project_model->create_new_project($data)) {

                $this->session->set_flashdata('project_created', 'project has been created.');
                redirect('projects');
                
            }
        }
    }


    //edit by id
    public function edit($project_id)
    {
       

        $this->form_validation->set_rules('projectname', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('projectbody', 'Project Description', 'trim|required');


        if ($this->form_validation->run() == false) {

            //get info for form
            $data['project_data'] = $this->project_model->get_projects_info($project_id);

            $data['main_view'] = 'project/edit_project';
            $this->load->view('layouts/main', $data);
            # code...
        } else {

            $p_name = $this->input->post('projectname');
            $p_body = $this->input->post('projectbody');

            $data = array(

               // 'project_user_id' => $this->session->userdata('user_id'),
               'project_body' => $p_body,
               'project_name' => $p_name
            );



            //update with arg id,data
            if ($this->project_model->edit_new_project($project_id,$data)) {

                $this->session->set_flashdata('project_updated', 'project has been created.');
                redirect('projects');
                
            }
        }
    }

    public function delete($project_id){
        $this->project_model->delete_project($project_id);
        //this will delete task of that project along with project
        $this->project_model->delete_project_tasks($project_id);
        
        $this->session->set_flashdata('project_deleted', 'project and project tasks has been deleted.');

        redirect('projects');

    }
    
}

