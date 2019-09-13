
<?php


class  Projects extends CI_Controller
{


     public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            if ($this->session->userdata('logged_in') != FALSE) {

                return true;
            }
            else {
                //$this->session->set_flashdata('no_access', 'Access Denied ! Please Login');
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


        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'project/create_project';
            $this->load->view('layouts/main', $data);
            # code...
        } else {


            $data = array(

               // 'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('projectname'),
                'project_body' => $this->input->post('projectbody')
            );



            if ($this->project_model->create_new_project($data)) {

                $this->session->set_flashdata('project_created', 'project has been created.');
                redirect('projects/index');
                # code...
            }
        }
    }

    
}
?>
