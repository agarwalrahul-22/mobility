<?php
namespace App\Controllers;

class Sale extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Register",
             "act" => "active"
        ];
        return view('sale_view',$data);
    }
}
