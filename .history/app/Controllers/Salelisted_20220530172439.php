<?php
namespace App\Controllers;

class Salelisted extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Vehicles on Sale",
             "act" => "active"
        ];
        return view('salelist_view',$data);
    }
}
