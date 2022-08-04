<?php
include_once("m_programKerja.php");
class c_programKerja
{
    public $model;
    public function __construct()
    {
        $this->model = new m_programKerja();
    }
    public function add()
    {
        include 'tambah.php';
    }
    public function post($post)
    {
        $nomorProgram = $post['nomor'];
        $namaProgram = $post['nama'];
        $suratKeterangan = $post['surat'];
        $this->model->setProgramKerja(
            $nomorProgram,
            $namaProgram,
            $suratKeterangan
        );
        header('Location: index.php');
    }
    public function edit($nomorProgram)
    {
        $data = $this->model->getProgramKerja($nomorProgram);
        include('edit.php');
    }
    public function update($post)
    {
        $lama = $post['nomor_lama'];
        $nomorProgram = $post['nomor'];
        $namaProgram = $post['nama'];
        $suratKeterangan = $post['surat'];
        $this->model->updateProgramKerja(
            $lama,
            $nomorProgram,
            $namaProgram,
            $suratKeterangan
        );
        header('Location: index.php');
    }
    public function delete($nomorProgram)
    {
        $this->model->deleteProgramKerja($nomorProgram);
        header('Location: index.php');
    }
    public function index()
    {
        $program = $this->model->getSemuaProgramKerja();
        include 'v_programKerja.php';
    }
    public function invoke()
    {
        $program = $this->model->getSemuaProgramKerja();
        include "v_programKerjaNon.php";
    }
    public function logout()
    {
        $this->model->Logout();
        header('location: loginPage.php');
    }
}
