<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');

class Login extends CI_Controller {

    public function_construct()
    {
        parent::_contruct();
    }

    public function index()
    {
        if (isset ($_POST['password'])){
            $this->load->model('usuario_model');
            if($this->usuario_model->login($_POST['usuario'],md5($_POST['password']))){
                redirect('welcome');
            } else{
                redirect('login#bad-password');
            }
        }
        $this->load->view('login')
    }
}



?>
