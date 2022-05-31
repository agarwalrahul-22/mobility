<?php
namespace App\Controllers;

class Rent extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Rent",
             "act" => "active"
        ];
        return view('rent_view',$data);
    }
}
