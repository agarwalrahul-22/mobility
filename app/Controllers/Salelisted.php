<?php
namespace App\Controllers;

class Salelisted extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Vehicles on Sale"
        ];
        return view('salelist_view',$data);
    }
}
