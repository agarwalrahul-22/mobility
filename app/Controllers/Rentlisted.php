<?php
namespace App\Controllers;

class Rentlisted extends BaseController
{
    public function index()
    {
        $data = [
            "page_title" => "Mobility » Vehicle On Rent"
        ];
        return view('rentlist_view',$data);
    }
}
