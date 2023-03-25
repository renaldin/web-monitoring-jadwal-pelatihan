<?php

namespace App\Controllers;

class Profile extends BaseController
{

    public function index()
        {
            $data = [
                'title' => 'Profile',
                'isi'   => 'profile'
            ];
            return view('layout/v_wrapper', $data);
        }
    
}