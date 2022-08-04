<html>

<head>
    <link rel="stylesheet" href="v_style.css">
    <style>
        h2 {
            text-align: center
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align:
                left;
        }

        table {
            border-collapse: collapse;
            width: 95%;
        }

        th,
        td {
            padding: 15px
        }

        button {
            width: 70px;
            font-size: 12px;
        }
    </style>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <td>Nomor</td>
                    <td>Nama Program Kerja</td>
                    <td>Surat Keterangan</td>
                </tr>
            <tbody>
                <?php
                foreach ($program as $p) {
                ?>
                    <tr>
                        <td><?php echo
                            $p['nomorProgram']; ?></td>
                        <td><?php echo
                            $p['namaProgram']; ?></td>
                        <td><?php echo
                            $p['suratKeterangan']; ?></td>
                    </tr>
                <?php }; ?>
            </tbody>
            </thead>
        </table>
        <form action="v_login.php" method="POST">
            <input type="submit" value="Logout" class="registerbtn" name="Logout">
        </form>
</body>

</html>