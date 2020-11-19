<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        if ( $this->session->userdata('logged_in') ){
            $this->session->sess_destroy();
        }
		$this->load->view('Login/login_form');
    }
    
    public function submit()
    {
        $respuesta = array(
            'status' => 'error',
            'mensaje' => 'Ocurrió un error, verifica tu correo y/o password'
        );
        try {
            
            $correo = $this->input->post('user_mail');
            $password = $this->input->post('user_password');
            
            $this->create_login($correo, $password);
        } catch (Exception $e) {
            echo json_encode($respuesta);
        }
    }

    private function create_login($mail, $password)
    {
        $user = $this->Login_model->seek_user($mail);
            
        if ( count($user) == 0 ){
            throw new Exception('error');
        }

        if ( $password != $user[0]->password ){
            throw new Exception('error');
        }

        //Iniciar sesión
        $dataUser = array(
            'email'     => $user[0]->mail,
            'logged_in' => True
        );

        $this->session->set_userdata($dataUser);

        $respuesta['status'] = 'ok';
        $respuesta['mensaje'] = 'Login correcto';
        echo json_encode($respuesta);
    }
}
