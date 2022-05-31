<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Login",
             "act" => "active"
        ];
        return view('login_view',$data);
    }
}
