<?php
namespace App\Controllers;

class Sale extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Register"
        ];
        return view('sale_view',$data);
    }
}
