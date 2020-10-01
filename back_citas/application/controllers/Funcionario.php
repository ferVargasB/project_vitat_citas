<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {


    public function index()
    {
        if ( !$this->session->logged_in ){
            header("Location: http://localhost/project_vitat_citas/back_citas/"); 
            exit();
        }

        $data['citas'] = $this->Cita_model->get_citas_by_administrador();
        $this->load->view('Funcionario/dashboard', $data);
    }
}
