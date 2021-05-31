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
    <title>Daftar Akun Bahari Store</title>
</head>
<body>
    <h3>Daftar Akun Bahari Store</h3>
    <form action="<?php echo base_url()."index.php/Welcome/aksi_daftar"; ?>" method="POST">
    <table>
        <tr>
            <td>Username </td> <td>: <input type="text" name="user"></td>
        </tr>
        <tr>
            <td>Password </td> <td>: <input type="password" name="pass"></td>
        </tr>
        <tr>
        <td><input type="submit"></td><td><input type="reset"></td>
        </tr>
    </table>
    </form>
</body>
</html>