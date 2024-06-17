<?php

class Anggota {
    protected $model = '';

    public function __construct($model){
        $this->model=$model;
    }
    public function index(){
        $anggota = $this->model->getAnggota();
        require 'view/anggota/list.php';
    }
    public function detail($nisn){
        $anggota = $this->model->getAnggotabyId($nisn);
        require 'view/anggota/detail.php';
    }

    public function create(){
        if ($_POST) {
            $this->model->insert();
            header("location:http://localhost/oopmvc/index.php/anggota");
        } 
        else
        {
            require "view/anggota/input.php"; // ke form input anggota
        }
    }

    public function edit($nisn){
        if ($_POST) {
            $this->model->update($nisn);
            header("location:http://localhost/oopmvc/index.php/anggota");
        } else {
            $anggota = $this->model->getAnggotabyId($nisn);
            require "view/anggota/input.php";
        }
    }

    public function delete($nisn){
        if ($nisn) {
            $this->model->delete($nisn);
            header("location:http://localhost/oopmvc/index.php/anggota");
        }
    }
}
