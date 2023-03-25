<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;

class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }
    public function index(){
        return view('auth/login');
    }
    public function register(){
        return view('auth/register');
    }
    public function save(){

        // $validation = $this -> validate([
        //     'name'=>'required',
        //     'email'=>'required|valid_email|is_unique[users.email]',
        //     'password'=>'required|min_length[5]|max_length[12]',
        //     'cpassword'=>'required|min_length[5]|max_length[12]|matches[password]'
        // ]);

        $validation = $this->validate([
            'nama'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Your full nama is required'
                ]
                ],
            'email'=>[
                'rules'=>'required|is_unique[users.email]',
                'errors'=>[
                        'required'=>'Email is required',
                        'is_unique'=>'Email already taken'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have more than 12 characters in length'
                ]
                ],
            'cpassword'=>[
                'rules'=>'required|min_length[5]|max_length[12]|matches[password]',
                'errors'=>[
                    'required'=>'Confirm password is required',
                    'min_length'=>'Confirm password must have atleast 5 characters in length',
                    'max_length'=>'Confirm_password must not have more than 12 characters in length',
                    'matches'=>'Confirm password not matches to password'
                ]
                ]                            
            ]);

        if(!$validation){
            return view('auth/register',['validation'=>$this->validator]);
        }else{ 
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $data = [
                'nama'=>$nama,
                'email'=>$email,
                'password'=>Hash::make($password),
            ];

            $usersModel =  new \App\Models\UsersModel();
            $query = $usersModel->add($data);
            if(!$query){
                return redirect()->to('auth/index')->with('success','You are registered successfully');
                // Kenapa di balikin karena kalo ga dibalikin itu pesan yang muncul di register yang fail
                // Tapi tetep kok kaya gini juga datanya masuk ke database
            }else{
                return redirect()->back()->with('fail','Something went wrong');
                // $last_id = $usersModel->insertID();
                // session()->set('loggedUser', $last_id);
                // return redirect()->to('/auth');
            }
        }
    }

    function check(){
        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|is_not_unique[users.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'is_not_unique'=>'This email is not registered on our service'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have atleast 5 characters in length',
                    'max_length'=>'Password must not have more than 12 characters in length'
                ]
            ]    
        ]);

            if(!$validation){
                return view('auth/login',['validation'=>$this->validator]);
            }else{
               $level = $this->request->getPost('level');
               $email = $this->request->getPost('email');
               $password = $this->request->getPost('password');
               $usersModel = new \App\Models\UsersModel();
               $user_info = $usersModel->where('email', $email)->first();
               $check_password = Hash::check($password, $user_info['password']);

               if(!$check_password){
                   session()->setFlashdata('fail', 'Incorrect password');
                   return redirect()->to('/auth')->withInput();
                }else{
                    session()->set('log', true);
                    session()->set('nama', $user_info['nama']);
                    session()->set('email', $user_info['email']);
                    session()->set('avatar', $user_info['avatar']);
                    session()->set('role', $level);
                    session()->set('loggedUser', true);
                    
                    return redirect()->to('/admin');
                    // $user_id = $user_info['id'];
                    // session()->set('loggedUser', $user_id);
                    // return redirect()->to('/dashboard');
            }
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('email');
        session()->remove('nama');
        session()->remove('avatar');
        session()->remove('role');

        return redirect()->to('auth/index')->with('success','You are logged out successfully');
    }
}