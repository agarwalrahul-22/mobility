<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » About"
        ];
        return view('about_view',$data);
    }
}
