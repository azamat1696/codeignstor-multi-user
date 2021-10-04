<?php

class Users extends CI_Controller {
   public function __construct() {
       parent::__construct();
       $this->load->model('user_model');
   }

   public function index() {
       echo "Welcome bro";
   }



   public function login() {
       $this->load->library('form_validation');
       $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
       $this->form_validation->set_rules('password', 'Password','required|trim');

       $this->form_validation->set_message(array(
           "required" => "{field} alanını boş bırakmayınız",
           "valid_email" =>"lütfen gwçweli email adresi giriniz"
       ));
        if ($this->form_validation->run() === FALSE) {

            $viewData = new stdClass();
            $viewData -> form_error= true;
        //    echo validation_errors();
        $this->load->view('login_v', $viewData);
           
        } else {
            
            $user = $this ->user_model->get(
                array(
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post("password"))
                    )
                );
              
                print_r($user);

        }


   }
   public function homepage() {
    $this->load->view('home_page_v');
}
}



?>