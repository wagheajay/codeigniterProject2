
<?php


class  Projects extends CI_Controller
{



     
        function __construct()
        {
            //to check on startup we have to make it parent of _construct() from ci_controller
            parent::__construct();

            if(!$this->session->userdata('logged_in')){

                $this->session->set_flashdata('no_access','Access Denied ! Please Login ');

                redirect('home/index');


            }
            
        }



    public function index(){


         $data['projects'] = $this->projects_model->get_projects();


        $data['main_view'] = "projects/index";

        $this->load->view('layouts/main',$data);




    }


    public function display($project_id){


        $data['project_data'] = $this->projects_model->get_project($project_id);


        $data['main_view'] = "projects/display";

        $this->load->view('layouts/main',$data);

    }




    
}
