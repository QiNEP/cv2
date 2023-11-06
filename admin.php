<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CRUD PHP | Add</title>
</head>

<body class="p-3">
  <a class="btn btn-success" href="index.php">Kembali ke Index</a>

  <form action="add.php" method="post">
    <table class="table table-striped">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td><input type="text" name="kelas"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn btn-success" type="submit" name="submit">Simpan</button></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $email = $_POST["email"];

    //gunakan file config.php
    include_once("config.php");

    //ambil data dan simpan kedalam variabel result
    $result = mysqli_query($conn, "INSERT INTO mahasiswa(nama,kelas,email)VALUES('$nama','$kelas','$email')");

    //tampilkan pesan
    echo "User telah ditambahkan";
  }
  ?>

</body>

</html>