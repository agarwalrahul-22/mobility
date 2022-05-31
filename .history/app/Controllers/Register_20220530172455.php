<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Register",
             "act" => "active"
        ];
        return view('register_view', $data);
    }
}
