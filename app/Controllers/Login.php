<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    
    public function index()
    {
        $session = session();
        $sesi = $session->get('logged_in');
        if ($sesi == 1) 
        {
            return redirect()->to('/dashboard-rectifier');
        }else{
            return view('/auth/login');
        }
        //echo $sesi;
        // return view('auth/login');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $name = $this->request->getVar('name');
        $password = $this->request->getVar('password');
        $data = $model->where('user_name', $name)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard-rectifier');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('login');
        }
  
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}
