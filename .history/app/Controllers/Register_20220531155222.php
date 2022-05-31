<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RegisterModel;
class Register extends Controller
{
    public $registerModel;
    public $session;
    public $email;
    public function __construct(){
        helper('form');
        $this->registerModel = new RegisterModel();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }
    public function index()
    {
        $db = \Config\Database::connect();
        $data = [
            "page_title" => "Mobility » Register"
        ];
        $data['validation']=null;
        if ($this->request->getMethod() == 'post'){
            $rules=[
                'username' => 'required|min_length[5]|max_length[10]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[10]',
                'confirm_pass' => 'required|matches[password]'
            ];
            if($this->validate($rules)){
                $uniid=md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
                $userdata=[
                'username'=> $this->request->getVar('username',FILTER_SANITIZE_STRING),
                'password'=> password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
                'uniid'=> $uniid,
                'email'=> $this->request->getVar('email'),
                'activation_date'=> date("Y-m-d H:i:s")
                ];
                if($this->registerModel->createUser($userdata)){
                  $to= $this->request->getVar('email');
                  $subject="Account Activation link - mobility";
                  $message='Hi '.$this->request->getVar('username',FILTER_SANITIZE_STRING).",<br><br>Thanks, your account is created"
                  ."Successfully, please click to the link below to active your account<br><br>"
                  ."<a href='".base_url()."/register/activate".$uniid."'>Activate Now</a><br><br> Thanks<br>Team Mobility";
                  $this->email->setTo($to);
                  $this->email->setFrom('strgrpiitbbs@gmail.com','Info');
                  $this->email->setSubject($subject);
                  $this->email->setMessage($message);
                  if($this->email->send()){
                    $this->session->setTempdata('success','Your account is created.',3);
                    return redirect->to(current_url());
                  }
                  else{
                    $this->session->setTempdata('error','Sorry!! Unable to create an account', 3);
                    return redirect->to(current_url());
                  }
                }
                else{
                    $this->session->setTempdata('error','Sorry!! Unable to create an account, Try again', 3);
                    return redirect->to(current_url());
                }

            }
            else{
                $data['validation'] =$this->validator;
            }
        }
        return view('register_view', $data);
    }
}