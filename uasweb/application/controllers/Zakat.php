<?php

class Zakat extends Controller
{
  public function index()
  {
    // echo 'home/index';
    $data['judul'] = 'Zakat';
    $data['amal'] = $this->model('Zakat_model')->getAllZakat();
    $data['nama'] = $this->model('User_model')->getUser();


    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
