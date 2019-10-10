<?php 

class Upload extends CI_Controller
{



    public function index()
        {
               // $data['main_view'] = "upload_form";

               // $this->load->view(, $data);
                $this->load->view('layouts/main',array('error' => ' ' ,'main_view'=>'upload_form' ));
        }

        
        public function do_upload()
        {

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
               // $config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {

                        $file_name = $this->upload->data('file_name');
                        $file_type = $this->upload->data('file_type');
                        $image_data = array(

                        'file_name'=> $file_name,
                        'file_type' => $file_type
                        );
                        

                        $this->upload_model->insert_image($image_data);
                        // $data = array('upload_data' => $this->upload->data());

                        // $this->load->view('upload_success', $data);

                        redirect('upload/get_all_image');
                }
        }


        public function get_all_image(){

                $data['images'] = $this->upload_model->get_all_images();

                $data['main_view'] = "image_view";

                $this->load->view('layouts/main', $data);




        }
}