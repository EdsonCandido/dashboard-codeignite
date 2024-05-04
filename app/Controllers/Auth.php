<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        return view('/auth/form_login');
    }
    public function login_submit(){
        echo "teste";
    }
}
