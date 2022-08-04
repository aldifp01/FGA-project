<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="v_style.css">
    <title></title>
</head>
<h2>Edit Program Kerja BEM</h2>
<table>

    <body>
        <form action="index.php?page=update" method="post">
            <input type="hidden" name="nomor_lama" value="<?php echo $data['nomorProgram'] ?>">
            <label>
                Nomor Program Kerja<br>
            </label>
            <input type="number" name="nomor" value="<?php echo $data['nomorProgram'] ?>" readonly><br>
            <label>
                Nama Program Kerja<br>
            </label>
            <input type="text" name="nama" value="<?php
                                                    echo $data['namaProgram'] ?>"><br>
            <label>
                Surat Keterangan<br>
            </label>
            <input type="text" name="surat" value="<?php echo $data['suratKeterangan'] ?>"><br>
            <input type="submit" name="edit">
        </form>
    </body>

</html>