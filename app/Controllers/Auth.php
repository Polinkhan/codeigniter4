<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
        $this->session = session();
    }
    public function index(){
    }

    public function login()
    {
        $data['alart'] = session()->getFlashdata('alartStatus');
        $data['message'] = session()->getFlashdata('alartMessage');
        $data['meta_title'] = "Login Now";
        echo view ('header', $data);
        return view('login', $data);
    }

    public function login_form_validation()
    {
        $PersonID = $this->request->getPost('PersonID');
        $Password = $this->request->getPost('Password');
        $checkbox = $this->request->getPost('checkbox');
        
        $sql = 'Select * From  Credentials WHERE PersonID = ? and Password = ?';
        $query = $this->db->query($sql, [$PersonID,$Password]);
        $result = $query->getResult();
        if( empty($result)){
            session()->setFlashdata('alartStatus', true);
            session()->setFlashdata('alartMessage', "Invalid User ID/Password");
            return redirect()->to(base_url('login'));
        } else{
            if($checkbox){
                $this->session->set('PersonID', $PersonID);
                $this->session->set('Password', $Password);
            } else{
                session()->setFlashdata('PersonID',$PersonID);
                session()->setFlashdata('Password',$Password);
            }
            return redirect()->to(base_url('/'));
        }
        
    }

    public function register()
    {
        $query = $this->db->query('SELECT PersonID FROM Persons WHERE PersonID = (SELECT MAX(PersonID) FROM Persons)');
        $result = $query->getResult();
        empty($result)? $data['dynamic_id'] = 1001:$data['dynamic_id'] = ($result[0]->PersonID + 1);

        $data['meta_title'] = "Register Now";
        echo view ('header',$data);
        return view('register',$data);
    }

    public function register_form_validation($PersonID)
    {
        $Email = $this->request->getPost('Email');
        $Password = $this->request->getPost('Password');
        $Account = $this->request->getPost('Account');

        $FirstName = $this->request->getPost('FirstName');
        $LastName = $this->request->getPost('LastName');
        $Address = $this->request->getPost('Address');
        $City = $this->request->getPost('City') ?? "unknown";


        $sql = 'INSERT INTO Persons (PersonID,FirstName,LastName,Address,City) values (?,?,?,?,?)';
        $this->db->query($sql, [$PersonID,$FirstName,$LastName,$Address,$City]);
        
        $sql = 'INSERT INTO Credentials (PersonID,Password,Email,AccountType) values (?,?,?,?)';
        $this->db->query($sql, [$PersonID,$Password,$Email,$Account]);

        session()->setFlashdata('alartStatus', true);
        session()->setFlashdata('alartMessage', "New User Registered! Sign in Now");
        return redirect()->to(base_url('login'));
    }

}
