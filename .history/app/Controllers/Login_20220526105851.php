<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Login"
        ];
        return view('login_view',$data);
    }
}
