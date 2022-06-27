<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserAuthController extends BaseController{
    public function login()
    {
        $session = session();

        if($session->get('logged_in')){
            return redirect('user');
        }else{
            return redirect('login');
        }

        return view('User/login');
    }

    public function authentication()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
        ];

        $model = new UserModel();

        $res = $model->auth($data);
        if($res){
            $session = session();
            $ses_data = [
                'user_id' => $res['id'],
                'user_name' => $res['username'],
                'logged_in' => true,
            ];
            $session->set($ses_data);

            return redirect('user');
        }else{
            return "error";
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('/login');
    }

}