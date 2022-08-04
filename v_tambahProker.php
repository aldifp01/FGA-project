<!DOCTYPE html>
<html>
<style>
    h2 {
        text-align: center;
    }
</style>

<head>
    <link rel="stylesheet" href="v_style.css">
    <title></title>
</head>
<h2>Tambah Program Kerja BEM</h2>

<body>
    <form action="index.php?page=post" method="post">
        <label>
            Nomor Program Kerja<br>
        </label>
        <input type="number" name="nomor" placeholder="Nomor proker"><br>
        <label>
            Nama Program Kerja<br>
        </label>
        <input type="text" name="nama" placeholder="Nama proker"><br>
        <label>
            Surat Keterangan<br>
        </label>
        <input type="text" name="surat" placeholder="Surat keterangan"><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>

</html>