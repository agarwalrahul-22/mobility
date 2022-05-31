<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Homepage",
             "act" => "active"
        ];
        return view('home_view.php',$data);
    }
}
