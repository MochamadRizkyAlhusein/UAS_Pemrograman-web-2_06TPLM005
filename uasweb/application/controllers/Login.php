<?php 

class Login extends Controller{
  public function index(){
    // echo "Hallo nama saya $nama, saya adalah $pekerjaan";
    $data['judul'] = 'Login Page';
  
    $this->view('templates/header', $data);
    $this->view('login/index');
    $this->view('templates/footer');
  }
}