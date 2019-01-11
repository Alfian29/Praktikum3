<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styletable.css">
    </head>
    <body>
        <center>
    <h1>RECORD  </h1>
        </center>
    </body>
</html>
<?php
require_once "connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if (mysqli_num_rows($result)){
    ?>
        <table border = 1 cellspacing = 1 cellpadding = 5 id="siswa">
        <tr>
            <th class="nomer">#</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>Alamat</th>
        </tr>
        <?php
            $i = 1;
            while($row = mysqli_fetch_row($result)){
        ?>  
            <tr>
                <td>
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $row[0];?>
                </td>
                <td>
                    <?php echo $row[1];?>
                </td>
                <td>
                    <?php echo $row[2];?>
                </td>
            </tr>
            <?php
                $i++;
            }
            ?>
        </table>
        <?php
            echo '<br><center><a href="add_data.php" class="button">Tambah Data</a> | <a href="logout.php" class="button">Keluar</a></center>'
        ?>
    <?php
}
else{
    echo 'Data Tidak Ditemukan';
    }
mysqli_close($connect);
}
?>