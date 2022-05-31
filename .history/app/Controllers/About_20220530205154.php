<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » About",
             "act" => "active"
        ];
        return view('about_view',$data);
    }
}
