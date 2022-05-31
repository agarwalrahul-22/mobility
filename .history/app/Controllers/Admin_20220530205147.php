<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Admin",
             "act" => "active"
        ];
        return view('admin_view',$data);
    }
}
