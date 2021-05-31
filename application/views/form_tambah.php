<!DOCTYPE html>
<html lang="en">
<head>
    <Style>
        .kont
        {
            width: auto;
            height: auto;
        }
    </Style>
    <title>Input Nama Pelangan</title>
</head>
<body>
    <h3>Masukan Data Diri Pelanggan</h3>
    <form action="<?php echo base_url()."index.php/hal_admin/tambah_data"; ?>" method="POST">
    <table>
        <tr>
            <td>Nama</td> <td>: <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td> <td>: <input type="text" name="jk"></td>
        </tr>
        <tr>
            <td>Alamat</td> <td>: <input type="text" name="alamat"></td>
        </tr>
        <tr>
        <td><input type="submit"></td><td><input type="reset"></td>
        </tr>
    </table>
    </form>
</body>
</html>