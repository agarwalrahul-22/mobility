<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Admin"
        ];
        return view('admin_view',$data);
    }
}
