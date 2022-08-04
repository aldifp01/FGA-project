<?php
require "koneksiMVC.php";
class m_programKerja
{
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();
    public function setProgramKerja(
        $nomorProgram,
        $namaProgram,
        $suratKeterangan
    ) {
        require "koneksiMVC.php";
        echo "$nomorProgram";
        $rs = $mysqli->query("INSERT INTO proker VALUES('$nomorProgram', '$namaProgram', '$suratKeterangan')
        ");
    }
    public function getSemuaProgramKerja()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
    public function deleteProgramKerja($nomor)
    {
        global $mysqli;
        $query = $mysqli->query("DELETE FROM proker WHERE nomorProgram = $nomor");
    }
    public function editProgramKerja(
        $nomorLama,
        $nomorProgram,
        $namaProgram,
        $suratKeterangan
    ) {
        global $mysqli;
        $mysqli->query("UPDATE proker SET nomorProgram = '$nomorProgram', namaProgram ='$namaProgram', suratKeterangan ='$suratKeterangan' WHERE nomorProgram='$nomorLama'");
    }
    public function getProgramKerja($nomorProgram)
    {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram = '$nomorProgram'");
        return $rs->fetch_assoc();
    }
    public function edit($nomor)
    {
        $data = $this->model->getProgramKerja($nomor);
        include('editProker.php');
    }
    public function updateProgramKerja(
        $old,
        $nomorProgram,
        $namaProgram,
        $suratKeterangan
    ) {
        global $mysqli;
        $mysqli->query("UPDATE proker SET nomorProgram = '$nomorProgram', namaProgram = '$namaProgram', suratKeterangan = '$suratKeterangan' WHERE nomorProgram='$old'");
    }
    public function logout()
    {
        session_start();
        session_destroy();
    }
}
