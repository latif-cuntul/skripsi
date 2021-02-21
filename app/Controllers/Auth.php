<?php namespace App\Controllers;

use App\Models\User_Model;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/home');
        } else {
            return view('login');
        }
    }
    public function login()
    {
        $session = session();
        $model = new User_Model();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            if ($password === $pass) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'username' => $data['username'],
                    'nama' => $data['nama'],
                    'logged_in' => true,
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/auth');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ada');
            return redirect()->to('/auth');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth');
    }
}
