<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Contact",
            "act" => true,
            // "acti" => "active"
        ];
        return view('contact_view',$data);
    }
}
