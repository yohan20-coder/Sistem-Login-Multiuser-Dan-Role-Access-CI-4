<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
       return redirect()->to(site_url('login'));
    }

    public function login()
    {
       if(session('id_user')){
         return redirect()->to(site_url('home'));
       }
       return view('auth/login');
    }

    public function loginProcess()
    {
       //cara 1 apabila nama filed db == name form
       $post = $this->request->getPost();
       $query = $this->db->table('tb_users')->getWhere(['email_user' => $post['email']]);
       $user = $query->getRow();
       if($user){
         if(password_verify($post['password'], $user->password_user)){
            $param = ['id_user' => $user->id_user];
            session()->set($param);
            return redirect()->to(site_url('home'));
         }else{
            return redirect()->back()->with('error', 'Password tidak sesuai');
         }
       }else{
         return redirect()->back()->with('error', 'Email tidak ditemukan');
       }

       
    }

    public function logout()
    {
       session()->remove('id_user');
       return redirect()->to(site_url('login'));
    }

  
}
