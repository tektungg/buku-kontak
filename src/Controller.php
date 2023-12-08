<?php

namespace src;

class Controller
{
    private $_model;
    public function __construct()
    {
        $this->_model = new Model();
    }

    public function index()
    {
        if(isset($_POST['submit'])){
            $this->_saveKontak();
        }
        $kontakList = $this->_model->findAllKontak();
//        $allKontak = $this->_model->findAllKontak();
//        echo "<pre>";
//        print_r($allKontak);
//        echo "</pre>";
        $view = new View('template/index_template.php');
        $view->setData(['subTitle' => 'Home', 'kontakList' => $kontakList]);
        $view->render();
    }

    private function _saveKontak()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nomorTelepon = $_POST['nomor_telepon'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        if(empty($id)){
            //insert data
            $kontak = new \Kontak();
            $kontak->setNama($nama);
            $kontak->setNomorTelepon($nomorTelepon);
            $kontak->setEmail($email);
            $kontak->setAlamat($alamat);
            $this->_model->addNewKontak($kontak);
        } else {
            //update data
            //$this->_model->edit($kontak);
        }
    }
}