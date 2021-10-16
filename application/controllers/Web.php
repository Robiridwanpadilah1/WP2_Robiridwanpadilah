<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Web extends CI_Controller{
 function __construct(){
    parent::__construct();
 }
 public function index(){
 $data['judul'] = "Halaman Depan";
 $this->load->view('header',$data);
 $this->load->view('index',$data);
 $this->load->view('footer',$data);
}
}