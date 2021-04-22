<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menghitung Huruf Vokal & Konsonan</title>
</head>
<body>
  <form method="POST" action="">
    <p>
      Masukkan Kata: <br>
      <input type="text" name="kata">
      <button type="submit">Hitung</button>
    </p>
  </form>
  <?php if ($_POST && isset($_POST['kata'])): ?>
    <hr>
    <p>
      Kata yang anda inputkan : <?= $_POST['kata'] ?><br/>
    </p>
    <?php foreach (hitungKata($_POST['kata']) as $huruf => $hasil): ?>
      <?= $hasil ?>
    <?php endforeach ?>
  <?php endif ?>
  <?php
    function hitungKata($kata) {
      $arr = str_split($kata);
      $vocal = ['a', 'i', 'u', 'e', 'o'];
      $count = array_count_values($arr);
      $result = [];
      foreach ($arr as $item) {
        if (in_array($item, $vocal)) {
          $result[$item] = $item . ' - (' . $count[$item] . ') => ' . 'Vokal</br>';
        } else {
          $result[$item] = $item . ' - (' . $count[$item] . ') => ' . 'Konsonan</br>';
        }
      }
      return $result;
    }
  ?>
</body>
</html>
