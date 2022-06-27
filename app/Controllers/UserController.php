<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $users = $this->model->findAll();

        $title = 'Users List';


        return view('User/index', compact('users', 'title'));
    }

    public function new()
    {
        $title = 'Create User';

        return view('User/form', compact('title'));
    }

    public function create()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'family' => $this->request->getPost('family'),
            'age' => $this->request->getPost('age'),
            'address' => $this->request->getPost('address'),
            'password' => $this->request->getPost('password'),
        ];

        $this->model->insertUser($data);

        $title = 'Users List';

        return redirect('user');
    }

//    public function edit($id)
//    {
//        $user = $this->model->where('id', $id)->first();
//
//        $title = 'User Edit';
//
//        return view('User/form', compact('user', 'title'));
//    }
}