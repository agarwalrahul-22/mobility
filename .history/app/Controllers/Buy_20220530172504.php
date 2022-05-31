<?php
namespace App\Controllers;

class Buy extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Buy",
             "act" => "active"
        ];
        return view('buy_view',$data);
    }
}
