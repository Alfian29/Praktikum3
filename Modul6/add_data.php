<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" type="text/css" href="stylecreate.css">
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <center>
        <h1>TAMBAH DATA</h1>
</center>
        <div>
            <label for="nis">NIS</label>
                <input type="text" name="nis" placeholder="Masukkan NIS..."></td>
            
            <label for="nama">Nama</label>
                <input type="text" name="nama" size=40 placeholder="Masukkan Nama..."></td>
            
            <label for ="alamat">Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat..."></td>
            
            <label for ="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password..."></td>
            
                <input type="submit" value="Simpan"/>
            </div>
        </form>
    </body>
</html>
<?php
            echo '<center><a href="record.php" class="button">Record</a></center><br>'
        ?>

<!-- PHP Script Begin -->
<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //Tambahkan data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "', '" .$password. "' )";
        $result = mysqli_query($connect, $sql);
        if ($result){
            echo 'Data Berhasil Ditambahkan';
        }
        else{
            echo 'Gagal Menambahkan Data <br />';
            echo mysqli_error($connect);
        }
    }
?>
<!-- PHP Script End -->