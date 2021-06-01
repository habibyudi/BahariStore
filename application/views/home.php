<!DOCTYPE html>
<html lang="id">
<head>
        <style>
                .buttonAdd{
                        background-color : silver;
                        border : none;
                        text-decoration : none;
                        display : inline-block;
                        color : black;
                        padding : 8px 6px;
                        border : 1px solid black;
                        border-radius : 4px;
                        width : auto;
                        margin-right : 900px;
                        margin-top : 18px;
                        float : right;
                }
                .buttonDel
                {
                        background-color: white;
                        border : 1px solid black;
                        border-radius : 4px;
                        width : auto;
                        color: black;
                }
                a{
                        text-decoration: none;
                        color: black;
                }
        </style>
        <title>Daftar Data Pelanggan</title>
</head>

<body>
        <h1>Data Pelanggan</h1>
        <div class="buttonAdd">
        <a href='<?php echo base_url()."index.php/hal_admin/buka_form"; ?>'>Tambah Pelanggan</a>
        </div>
        <div><br>
        <table  border="1" cellpadding="5" cellspacing="0">
                <tr>
                        <td>NO</td>
                        <td>Nama</td>
                        <td>Jenis Kelamin</td>
                        <td>Alamat</td>
                        <td>Aksi</td>
                </tr>
            <tbody>
                <?php
                foreach($datanya as $i):
                ?>
                <tr>
                        <td><?php echo $i['no'];?> </td>
                        <td><?php echo $i['nama'];?> </td>
                        <td><?php echo $i['jk'];?> </td>
                        <td><?php echo $i['alamat'];?> </td>
                        <td><div class="buttonDel">
                        <a href='<?php echo base_url()."index.php/hal_admin/hapus/".$i['no']; ?>'>Hapus</a>
                        </div></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
<script>
      $(document).ready(function(){
            $('#mydata').DataTable();
      });
</script>
<a href='<?php echo base_url()."index.php/Welcome/logout"; ?>'>Logout</a>
</body>
</html>
