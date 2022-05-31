<?php
namespace App\Controllers;

class Rentlisted extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Vehicle On Rent",
             "act" => "active"
        ];
        return view('rentlist_view',$data);
    }
}
