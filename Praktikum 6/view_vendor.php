<?php
    require_once 'dbkoneksi.php';

    $sql = " SELECT * FROM vendor ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if(isset($_POST['submit'])){
        $nomor = $_POST['nomor'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];


    $sql = "INSERT INTO vendor (nomor, nama, kota, kontak) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nomor, $nama, $kota, $kontak]);

    header("Location: index.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form_vendor.php">Tambah Vendor</a>
    <hr>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nomor</th>
                <th>Nama Perusahaan</th>
                <th>Kota</th>
                <th>Kontak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php   
                $number = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>

              <tr>
                <td> <?=  $number           ?>                            </td>
                <td> <?=  $row['nomor']      ?>                            </td>
                <td> <?=  $row['nama']      ?>                            </td>
                <td> <?=  $row['kota']        ?>                            </td>
                <td> <?=  $row['kontak'] ?>, <?=  $row['kontak'] ?> </td>
                <td>
                    <a href="edit_vendor.php?id=<?= $row['id'] ?>">EDIT</a>
                    <a href="delete_vendor.php?id=<?= $row['id'] ?>"  
                        onclick="if(!confirm('Anda Yakin Hapus Data <?=$row['nama']?>?')) {return false}"
                    >
                        HAPUS
                    </a>
                </td>
            </tr>

            <?php   
                $number++;
                endwhile;
            ?>

        </tbody>
    </table>
</body>
</html>