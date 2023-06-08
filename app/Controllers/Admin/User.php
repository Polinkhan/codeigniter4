<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $db;

    public function __construct(){
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        return view("home");
    }

    public function view($id = "all")
    {
        if ($id == "all") {
            $isNewSaved = session()->getFlashdata('isNewSaved');
            $query = $this->db->query('SELECT * FROM Persons');
            $result = $query->getResult();
            $data['UserData'] = $result;
            $data['isNewSaved'] = $isNewSaved;
            return view('viewUsers', $data);
        } else {
            $query = $this->db->query('SELECT * FROM Persons WHERE PersonID = '.$id);
            $result = $query->getResult();
            $data['UserData'] = $result;
            return view('userDetails', $data);
        }
    }

    public function create()
    {
        
        $query = $this->db->query('SELECT PersonID FROM Persons WHERE PersonID = (SELECT MAX(PersonID) FROM Persons)');
        $result = $query->getResult();

        if (empty($result)) {
            $data['dynamic_id'] = 1001;
        } else {
            $data['dynamic_id'] = ($result[0]->PersonID + 1);
        }

        return view('userCreateForm', $data);
    }

    public function save($UserID)
    {
        $FirstName = $this->request->getPost('FirstName') ?? "null";
        $LastName = $this->request->getPost('LastName') ?? "null";
        $Address = $this->request->getPost('Address') ?? "null";
        $City = $this->request->getPost('City') ?? "unknown";

        $sql = 'INSERT INTO Persons (PersonID,FirstName,LastName,Address,City) values (?,?,?,?,?)';
        $this->db->query($sql, [$UserID,$FirstName,$LastName,$Address,$City]);
        session()->setFlashdata('isNewSaved', true);
        return redirect()->to('/admin/user/view');
    }


    public function delete($id="null")
    {
        $this->db->simpleQuery('Delete From Persons WHERE PersonID = '.$id);
        return redirect()->to('/admin/user/view');
    }
}
