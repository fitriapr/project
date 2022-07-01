<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>UPLOAD</h3>
    <form method="POST" action="" enctype="multipart/form-data">
        Upload :
        <input type="file" name="upload">
        <input type="submit" value="Upload">
    </form>

    <!-- proses upload  -->
    <!-- fungsi FILE Upload yaitu untuk menggugah berkas ke dalam server atau database baik itu gambar maupun dokumen -->

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_file = $_FILES['upload']['name'];
        $temp_nama = $_FILES['upload']['tmp_name'];
        $Folder = "upload/";

        $upload = move_uploaded_file($temp_nama, $Folder. $nama_file);

        if ($upload) {
            echo "file berhasil di upload";
        } else {
            echo "file gagal di upload";
        }
    }

    ?>
</body>

</html>