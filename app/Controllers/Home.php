<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct()
    {
        
        helper('url');
        
    }
    public function index()
    {
        $user = new UserModel();
        $data['users'] =  $user->findAll();
        echo view('home1',$data);
    }
    public function create(){
        echo view('create');
    }
    public function store(){
        $user = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'email'  => $this->request->getVar('email'),
        ];
        $user->insert($data);
        
        return redirect()->to(base_url());

    }
    public function edit($id){
        $user = new UserModel();
        $data['user'] = $user->find($id);
        echo view('edit',$data);
    }
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'id' => $this->request->getVar('id'),
            'username' => $this->request->getVar('username'),
            'email'  => $this->request->getVar('email'),
        ];
        $id = $this->request->getVar('id');
        //echo $id;
         //$userModel->where('id',$id)->first()->update('username'=>$data['username']);
         $userModel->save($data);
       return redirect()->to(base_url());
    }
    public function delete($id){
        $user = new UserModel();
        $data['user'] = $user->where('id',$id)->delete($id);
        echo 1;
        return redirect()->to(base_url());

    }

    }

        

