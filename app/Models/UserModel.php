<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';

    protected $allowedFields = [
        'name',
        'family',
        'age',
        'address',
        'password'
    ];


    public function auth($data)
    {
        $username = $data['username'];
        $password = $data['password'];

        $user = $this->db->table('users')->select('*')->where('username', $username)->get()->getRowArray();

        if($user){
            if($user['username'] == $username){
                if($user['password'] == $password){
                    return $user;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }

    }






    public function insertUser($data)
    {
        $result = $this->insert($data);

        return $result;
    }

    public function updateUser($id, $data){
        $user = $this->where('id', $id);

        $result = $user->save($data);

        return $result;
    }
}