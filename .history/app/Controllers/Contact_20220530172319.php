<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Contact",
            "act" => "active"
        ];
        return view('contact_view',$data);
    }
}
