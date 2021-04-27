<?php
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
      if ($num2 == '0')
        $error_result = "На ноль делить нельзя!";
      else
        $result = $num1 / $num2;
      break;
    default:
      $error_result = 'Неверный оператор';
      break;
  }
  if (isset($error_result)) {
    echo "<div style='color: red;'>Ошибка: $error_result</div>";
  } else {
    echo "<div >Ответ: $result</div>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Калькулятор</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Область основного контента -->
  <form action=<?= $_SERVER['REQUEST_URI'] ?> method='POST'>
    <label>Число 1:</label>
    <br />
    <input name='num1' type='text' />
    <br />
    <label>Оператор: </label>
    <br />
    <input name='operator' type='text' />
    <br />
    <label>Число 2: </label>
    <br />
    <input name='num2' type='text' />
    <br />
    <br />
    <input type='submit' value='Считать'>
  </form>
  <!-- Область основного контента -->
</body>

</html>