<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <form action="" method="post">
        Nama: <input type="text" name="nama">
        Alamat: <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form>
    Selamat Datang <?php echo $_POST["nama"] ?? 'user'; ?><br>
    Alamat Kamu: <?php echo $_POST["alamat"] ?? 'dimana?'; ?>
</body>

</html>