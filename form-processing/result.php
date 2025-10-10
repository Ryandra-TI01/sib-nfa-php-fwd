<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Ujian</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-lg p-4" style="width: 400px;">
    <h3 class="text-center mb-4">Hasil Ujian</h3>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama  = htmlspecialchars($_POST['nama']);
      $email = htmlspecialchars($_POST['email']);
      $nilai = (int)$_POST['nilai'];

      if ($nilai > 70) {
        $status = "<span class='badge bg-success'>Lulus ✅</span>";
      } else {
        $status = "<span class='badge bg-danger'>Remedial ❌</span>";
      }

      echo "
      <ul class='list-group mb-3'>
        <li class='list-group-item'><strong>Nama:</strong> $nama</li>
        <li class='list-group-item'><strong>Email:</strong> $email</li>
        <li class='list-group-item'><strong>Nilai:</strong> $nilai</li>
        <li class='list-group-item'><strong>Status:</strong> $status</li>
      </ul>
      <a href='index.php' class='btn btn-secondary w-100'>Kembali</a>
      ";
    } else {
      echo "<div class='alert alert-warning text-center'>Tidak ada data yang dikirim!</div>";
    }
    ?>
  </div>
</div>

</body>
</html>
