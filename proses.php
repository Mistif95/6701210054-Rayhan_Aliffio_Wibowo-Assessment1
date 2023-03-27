<?php

// Checkout ke cabang nomor (5). Dalam cabang ini, file proses.php masih kosong. Edit file proses.php dengan menambahkan proses aritmatik seperti pada nomor (6), tapi lakukan menggunakan switch case. Commit sebagai versi v1.2.1.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      $result = $num1 / $num2;
      break;
    default:
      $result = 'Invalid operator';
  }

  echo "Result: " . $result;
}

?>