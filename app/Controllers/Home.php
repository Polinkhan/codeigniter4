<?php

namespace App\Controllers;
use CodeIgniter\Controller\Session;


class Home extends BaseController
{

    public function __construct(){
        $this->session = session();
    }

    public function index()
    {
        $session_id = $this->session->get('PersonID');
        $session_pass = $this->session->get('Password');

        $flash_id = session()->getFlashdata('alartStatus');
        $flash_pass = session()->getFlashdata('alartMessage');

        if (($session_id && $session_pass)|| ($flash_id && $flash_pass)) {
            $data['meta_title'] = "Home";
            echo view('header',$data);
            echo view('home');
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
