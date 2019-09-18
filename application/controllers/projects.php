
<?php


class  Projects extends CI_Controller
{




    //this construct function will run at start when projects get called
    public function __construct()
    {
        parent::__construct();
        
         if (!$this->session->userdata('logged_in')) {

          $this->session->set_flashdata('no_access', 'Access Denied!');
          redirect('home/index');


            
        }
        
        
    }

    


    public function index()
    {

        $data['projects'] = $this->project_model->get_projects();


        $data['main_view'] = "project/index";

        $this->load->view('layouts/main', $data);


        
    }


    public function display($id)
    {


        $data['project_data'] = $this->project_model->get_project($id);


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

        redirect('projects');

    }
    
}

