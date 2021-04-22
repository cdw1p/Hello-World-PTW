<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mendeteksi Hari Dari Tanggal</title>
</head>
<body>
  <form method="POST" action="">
    <p>
      Masukkan Tanggal: <br>
      <input type="date" name="date">
      <button type="submit">Submit</button>
    </p>
  </form>
  <?php if ($_POST && isset($_POST['date'])): ?>
    <hr>
    <p>
      Tanggal yang anda inputkan : <?= $_POST['date'] ?><br/>
    </p>
    Merupakan hari <?= deteksiTanggal($_POST['date']) ?>
  <?php endif ?>
  <?php
    function deteksiTanggal($date) {
      $namaHari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
      );
      $convertDate = date('l', strtotime($date));
      return $namaHari[$convertDate];
    }
  ?>
</body>
</html>
