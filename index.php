<?php
function Romawi($num)
{
  $num = intval($num);
  $result = '';

  $array = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);

  foreach ($array as $romawi => $value) {
    $matches = intval($num / $value);
    $result .= str_repeat($romawi, $matches);
    $num = $num % $value;
  }

  return $result;
}

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Praktikum Pemrograman Web - Pertemuan 6</title>
  </head>
  <body>
      <form action="#" method="POST">
       Masukkan Angka : <input type="number" name="num"><br><br>
       <button type="submit">Ubah</button><br><br>
       <a>Angka Romawi : <?php error_reporting(0);
                  echo Romawi($_POST["num"]); ?><br></a>
      </form>
  </body>
</html>
