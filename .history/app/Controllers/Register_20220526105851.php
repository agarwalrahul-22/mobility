<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Register"
        ];
        return view('register_view', $data);
    }
}
