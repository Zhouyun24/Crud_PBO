<?php 
    namespace App\Http\Controllers\Admin;

    // for controller in folder
    use App\Http\Controllers\Controller;


    class PageController extends Controller{
        public function index(){
            return "Halaman Home";
        }
        public function tampil(){
            return  "Data Siswa Adminn";
        }
    }
?>